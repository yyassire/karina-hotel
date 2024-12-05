@extends('layouts.admin')
@php
    $amenities = [
        [
            'name' => 'Wifi',
            'icon' => 'fa-wifi',
        ],
        [
            'name' => 'TV',
            'icon' => 'fa-tv',
        ],
        [
            'name' => 'Klima',
            'icon' => 'fa-snowflake',
        ],
        [
            'name' => 'Evcil Hayvan',
            'icon' => 'fa-paw',
        ],
    ];
@endphp
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Oda Ekle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post" action="{{ route('admin.room.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputName">Başlık Tr</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Oda İçerik Tr</label>
                                                <textarea class="content" cols="80" id="summernote1" name="description" rows="10"></textarea>
                                            </div>

                                        </div>
                                        {{-- english --}}
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputName">Başlık En</label>
                                                <input type="text" name="name_en" class="form-control">
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Oda İçerik En</label>
                                                <textarea class="content" cols="80" id="summernote2" name="description_en" rows="10"></textarea>
                                            </div>

                                        </div>
                                        {{-- continue row --}}

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Kapasite</label>
                                            <input name="capacity" required type="number" class="form-control">
                                            <small class="form-text text-muted">Odanın toplam konaklayabileceği kişi sayısı.</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label>Gecelik fiyat</label>
                                            <input name="price_per_night" required type="number" class="form-control">
                                            
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label>Oda Tipi</label>
                                            <select name="type" class="selectpicker" data-live-search="true" title='Oda Tipi'>
                                               @foreach (['single', 'double', 'suite', 'family', 'deluxe', 'forest'] as $house_type )
                                                   <option value="{{ $house_type }}">{{$house_type}}</option>
                                               @endforeach      
                                             </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                        <label>Olanaklar</label>
                                        <select name="amenities[]" class="selectpicker" multiple data-live-search="true" title='Olanaklar'>
                                            @foreach ($amenities as $amenitie)
                                                <option value="{{ $amenitie['name'] }}">{{ $amenitie['name'] }}</option>
                                            @endforeach      
                                        </select>
                                   </div>
                                   <div class="form-group col-md-3">
                                    <label>cm2</label>
                                    <input name="size" required type="number" class="form-control">
                                    
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label>Odadaki oda sayısı</label>
                                    <select name="various_rooms_numb[]" class="selectpicker" multiple data-live-search="true" title='Odadaki oda sayısı'>
                                        @foreach ([1,2,3,4,5,6] as $room_numb )
                                            <option value="{{ $room_numb  }}">{{ $room_numb  }}</option>
                                        @endforeach      
                                    </select>
                               </div>
                               <div class="form-group col-md-3">
                                <label>Odadaki banyo sayısı</label>
                                <select name="various_bath_numb[]" class="selectpicker" multiple data-live-search="true" title='Odadaki banyo sayısı'>
                                    @foreach ([1,2,3,4,5,6] as $room_bath )
                                        <option value="{{ $room_bath  }}">{{ $room_bath  }}</option>
                                    @endforeach      
                                </select>
                           </div>
                           <div class="form-group col-md-3">
                            <label>Tercİh Edilen Oda</label>
                            <select name="preferred_room" class="selectpicker" title="Tercih Edilen Oda">
                                @foreach ([['name' => 'Evet', 'value' => true], ['name' => 'Hayır', 'value' => false]] as $resp)
                                    <option value="{{ $resp['value'] }}">{{ $resp['name'] }}</option>
                                @endforeach      
                            </select>
                       </div>
                                    </div>

                                    {{-- featured image --}}
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Oda Temsili Resmi</label>
                                            <span style="color: red">*</span>
                                            <input type="file" id="input-file-now"  name="featured_image" class="dropify"
                                                >
                                                {{-- <input type="file" id="input-file-now" name="images[]" class="dropify"  multiple> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Oda Ek Resmi</label>
                                            <span style="color: red">*</span>
                                            {{-- <input type="file" id="input-file-now" multiple name="image" class="dropify"
                                                > --}}
                                                <input type="file" id="input-file-now" name="images[]" class="dropify"  multiple>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success">Kaydet</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function() {
            $('select').selectpicker();
            // Summernote
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()
        })
    </script>

@endsection
