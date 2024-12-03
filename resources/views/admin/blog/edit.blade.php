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
                                <h3 class="card-title">Blog Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{ url('/admin/blog/edit/' . $data->id) }}"
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
                                                <label for="inputName">Description Tr</label>
                                                <input type="text" name="description_tr" class="form-control"
                                                    value="{{ $data['description_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Blog Adı Tr</label>
                                                <input type="text" name="blog_name_tr" class="form-control" value="{{ $data['blog_name_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Başlık Tr</label>
                                                <input type="text" name="hood_tr" class="form-control"
                                                    value="{{ $data['hood_tr'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik Tr</label>
                                                <textarea cols="80" name="content_tr" class="summernote" rows="30">{{ $data['content_tr'] }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Selflink Tr</label>
                                                <input type="text" name="selflink_tr" class="form-control"
                                                    value="{{ $data['selflink_tr'] }}">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title En</label>
                                                <input type="text" name="title_en" class="form-control"
                                                    value="{{ $data['title_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Description En</label>
                                                <input type="text" name="description_en" class="form-control"
                                                    value="{{ $data['description_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Blog Adı En</label>
                                                <input type="text" name="blog_name_en" class="form-control" value="{{ $data['blog_name_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Başlık En</label>
                                                <input type="text" name="hood_en" class="form-control"
                                                    value="{{ $data['hood_en'] }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik En</label>
                                                <textarea cols="80" name="content_en" class="summernote" rows="30">{{ $data['content_en'] }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Selflink En</label>
                                                <input type="text" name="selflink_en" class="form-control"
                                                    value="{{ $data['selflink_en'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Resim
                                                Seçin</label>
                                            <input type="file" id="input-file-now" name="image" class="dropify">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset($data['image']) }}" style="height: 150px; width: 150px;">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="margin:10px;">Güncelle</button>

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
            $('.summernote').summernote()
        })
    </script>
@endsection