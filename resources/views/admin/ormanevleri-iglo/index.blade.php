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
                                <h3 class="card-title">İglo Bilgilerini Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post" action="{{ url('/admin/ormanevleri-iglo/edit/' . $data->id) }}"
                                    enctype="multipart/form-data">

                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title Tr</label>
                                                <input type="text" name="title_tr" class="form-control"
                                                    value="{{ $data['title_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Keywords Tr</label>
                                                <input type="text" name="keywords_tr" class="form-control"
                                                    value="{{ $data['keywords_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Description Tr</label>
                                                <input type="text" name="description_tr" class="form-control"
                                                    value="{{ $data['description_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">İglo Başlık 1 Tr</label>
                                                <input type="text" name="iglo_hood_one_tr" class="form-control"
                                                    value="{{ $data['iglo_hood_one_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda Başlık 1 Tr</label>
                                                <input type="text" name="iglo_hood_two_tr" class="form-control"
                                                    value="{{ $data['iglo_hood_two_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İglo İçerik Tr</label>
                                                <textarea class="content summernote" cols="80" name="iglo_content_tr" rows="10">{{ $data['iglo_content_tr'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title En</label>
                                                <input type="text" name="title_en" class="form-control"
                                                    value="{{ $data['title_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Keywords En</label>
                                                <input type="text" name="keywords_en" class="form-control"
                                                    value="{{ $data['keywords_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Description En</label>
                                                <input type="text" name="description_en" class="form-control"
                                                    value="{{ $data['description_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">İglo Başlık 1 En</label>
                                                <input type="text" name="iglo_hood_one_en" class="form-control"
                                                    value="{{ $data['iglo_hood_one_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">İglo Başlık 2 En</label>
                                                <input type="text" name="iglo_hood_two_en" class="form-control"
                                                    value="{{ $data['iglo_hood_two_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İglo İçerik En</label>
                                                <textarea class="content summernote" cols="80" name="iglo_content_en" rows="10">{{ $data['iglo_content_en'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Güncelle</button>

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
           $('.summernote').summernote()
        })
    </script>
@endsection
