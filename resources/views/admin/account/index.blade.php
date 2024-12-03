@extends('layouts.admin')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hesabım</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Hesabım</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="container">
                        <div class="row">
                            <form action="{{route('admin.account.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-Posta</label>
                                    <input type="text" name="email"  class="form-control" value="{{$user['email']}}" disabled/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Resim Seçin</label>
                                    <input type="file" id="input-file-now" name="image" class="dropify" >
                                </div>

                                <div class="form-group">
                                    <img src="{{asset($user['image'])}}" style="height: 150px; width: 150px;">
                                </div>
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
