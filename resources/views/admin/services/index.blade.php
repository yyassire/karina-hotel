@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Hizmetler Yönetimi</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            @if(session('status'))
                <div class="alert alert-primary" role="alert">
                    {{session('status')}}
                </div>
            @endif

        <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                       
                        <form method="post" action="{{route('admin.service.store')}}" enctype="multipart/form-data">
                            @csrf

                            {{-- <input type="hidden" name="room_id" value="{{$id}}"> --}}


                            <div class="form-group">
                                <label for="exampleInputPassword1">Resim Seçin</label><span style="color: red">*</span>
                                <input type="file" name="image[]" multiple id="input-file-now" class="dropify" required/>         
                                <span style="color: red">@error('image') {{$message}} @enderror</span>                   
                            </div>
                            <div class="mb-5">
                                <select name="category_id" class="selectpicker" data-live-search="true" title='filtreleme etiketi'>
                                   @foreach ($category_data as $category_single_data )
                                       <option value="{{ $category_single_data->id }}">{{$category_single_data->name}}</option>
                                   @endforeach      
                                 </select>
                           </div>

                            <button type="submit" class="btn btn-primary btn-sm">Kaydet</button>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">No</th>
                                <th style="width: 20%">
                                   Hizmet Resimleri
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                            </thead>
                            <tbody id="priority-list">
                            @php($i=1)    
                            @foreach($data as $val)
                                <tr data-priority="{{$val['id']}}">

                                    <td>
                                        {{$i ++}}</td>
                                    <td>
                                        <img src="{{asset($val['image'])}}" style="width: 150px;height: 150px;">
                                        <br/>
                                        <small>
                                            Created {{$val['created_at']}}
                                        </small>
                                    </td>
                                    <td class="project-actions text-right">

                                        <a class="btn btn-danger btn-sm" href="{{url('/admin/service/delete/'.$val->id)}}" onclick="return confirm('Silmek İstediğinizden Emin Misiniz ?')">
                                            <i class="fas fa-trash">
                                            </i>
                                            Sil
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">

    </script>
@endsection

