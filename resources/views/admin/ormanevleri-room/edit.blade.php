@extends('layouts.admin')
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
                                <form method="post" action="{{ url('/admin/ormanevleri-room/edit/' . $data->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputName">Başlık Tr</label>
                                                <input type="text" name="hood_tr" class="form-control"
                                                    value="{{ $data['hood_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda Adı Tr</label>
                                                <input type="text" name="room_name_tr" class="form-control"
                                                    value="{{ $data['room_name_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Oda İçerik Tr</label>
                                                <textarea class="content" cols="80" id="summernote1" name="content_tr" rows="10">{{ $data['content_tr'] }}</textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputName">Başlık En</label>
                                                <input type="text" name="hood_en" class="form-control"
                                                    value="{{ $data['hood_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda Adı En</label>
                                                <input type="text" name="room_name_en" class="form-control"
                                                    value="{{ $data['room_name_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Oda İçerik En</label>
                                                <textarea class="content" cols="80" id="summernote2" name="content_en" rows="10">{{ $data['content_en'] }}</textarea>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Oda Temsili Resmi</label>
                                            <input type="file" id="input-file-now" name="image" class="dropify">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset($data['image']) }}" style="height: 150px; width: 150px;">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Güncelle</button>

                            </div>


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
            // Summernote
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()
            $('#summernote5').summernote()
            $('#summernote6').summernote()
            $('#summernote7').summernote()
            $('#summernote8').summernote()
            $('#summernote9').summernote()
            $('#summernote10').summernote()
            $('#summernote11').summernote()
            $('#summernote12').summernote()
        })
    </script>
@endsection
