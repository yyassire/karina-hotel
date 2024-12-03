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
                                <h3 class="card-title">Slider Kategori Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post" action="{{route('admin.slider_category.update',['id'=>$data['id']])}}" enctype="multipart/form-data">
                                    @csrf

                                
                                    <div class="form-group">
                                        <label for="inputName">Slider Kategori Adı</label>
                                        <input type="text" name="name" class="form-control" value="{{$data['name']}}">
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
        $(function () {
            // Summernote
            $('#summernote').summernote()
        })
    </script>
@endsection
