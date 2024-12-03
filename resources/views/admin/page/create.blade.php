@extends('layouts.admin') @section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Yeni Sayfa Ekle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i> </button>
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
                                <form method="post" action="{{ route('admin.page.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kategori Seçin</label>
                                                <select name="category" class="form-control">
                                                    <option>Seçiniz</option>
                                                    <option value="firsatlar">Fırsatlar</option>
                                                    <option value="restoran">Restoran&Bar</option>
                                                    <option value="havuz">Havuz&Plaj</option>
                                                    <option value="aktivite">Aktiviteler</option>
                                                    <option value="spa">Spa&Wellness</option>
                                                    <option value="toplanti">Toplantı&Konferans</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Anasayfada Gösterilsin mi ?</label>
                                                <select name="is_active" class="form-control">
                                                    <option>Seçiniz</option>
                                                    <option value="1">Evet</option>
                                                    <option value="0">Hayır</option>
                                                </select>
                                            </div>
                                        </div>
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
                                                <label for="inputName">Selflink En</label>
                                                <input type="text" name="selflink_en" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Resim
                                                Seçin</label><span style="color: red">*</span>
                                            <input type="file" id="input-file-now" name="image" class="dropify"
                                                required>
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
    </div> @endsection @section('js')
    {{-- <script>
        $(function() {
            // Summernote
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()
            $('#summernote5').summernote()
            $('#summernote6').summernote()
        });
    </script> --}}
@endsection
