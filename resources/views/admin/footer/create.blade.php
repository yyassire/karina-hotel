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
                                <h3 class="card-title">Footer Sayfa Ekle</h3>
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
                                <form method="post" action="{{ route('admin.footer.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title Tr</label>
                                                <input type="text" name="title_tr" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Keywords Tr</label>
                                                <input type="text" name="keywords_tr" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Description Tr</label>
                                                <input type="text" name="description_tr" class="form-control">
                                            </div>



                                            <div class="form-group">
                                                <label for="inputName">Başlık 1 Tr</label>
                                                <input type="text" name="hood_one_tr" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 2 Tr</label>
                                                <input type="text" name="hood_two_tr" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 3 Tr</label>
                                                <input type="text" name="hood_three_tr" class="form-control">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik Tr</label>
                                                <textarea class="content" cols="80" id="summernote1" name="content_tr" rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Selflink Tr</label>
                                                <input type="text" name="selflink_tr" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title En</label>
                                                <input type="text" name="title_en" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Keywords En</label>
                                                <input type="text" name="keywords_en" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Description En</label>
                                                <input type="text" name="description_en" class="form-control">
                                            </div>


                                            <div class="form-group">
                                                <label for="inputName">Başlık 1 En</label>
                                                <input type="text" name="hood_one_en" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 2 En</label>
                                                <input type="text" name="hood_two_en" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 3 En</label>
                                                <input type="text" name="hood_three_en" class="form-control">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik En</label>
                                                <textarea class="content" cols="80" id="summernote2" name="content_en" rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Selflink En</label>
                                                <input type="text" name="selflink_en" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title De</label>
                                                <input type="text" name="title_de" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Keywords De</label>
                                                <input type="text" name="keywords_de" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Description De</label>
                                                <input type="text" name="description_de" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 1 De</label>
                                                <input type="text" name="hood_one_de" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 2 De</label>
                                                <input type="text" name="hood_two_de" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 3 De</label>
                                                <input type="text" name="hood_three_de" class="form-control">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik TDer</label>
                                                <textarea class="content" cols="80" id="summernote3" name="content_de" rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Selflink De</label>
                                                <input type="text" name="selflink_de" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title Ru</label>
                                                <input type="text" name="title_ru" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Keywords Ru</label>
                                                <input type="text" name="keywords_ru" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Description Ru</label>
                                                <input type="text" name="description_ru" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 1 Ru</label>
                                                <input type="text" name="hood_one_ru" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 2 Ru</label>
                                                <input type="text" name="hood_two_ru" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 3 Ru</label>
                                                <input type="text" name="hood_three_ru" class="form-control">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik Ru</label>
                                                <textarea class="content" cols="80" id="summernote4" name="content_ru" rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Selflink Ru</label>
                                                <input type="text" name="selflink_ru" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Resim seçin</label><span
                                            style="color: red">*</span>
                                        <input type="file" id="input-file-now" name="image" class="dropify"
                                            required>
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
            // Summernote
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()

        })
    </script>
@endsection
