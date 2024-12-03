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
                                <h3 class="card-title">Dil Düzenle</h3>
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
                                <form method="post" action="{{url('/admin/language/edit/'.$data->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputName">Dil Adı</label>
                                        <input type="text" name="name" class="form-control" value="{{ $data['name'] }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Dil Kodu</label>
                                        <input type="text" name="code" class="form-control" value="{{ $data['code'] }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Varsayılan</label>
                                        <input type="number" name="is_default" class="form-control" value="{{ $data['is_default'] }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Aktif/Pasif Seçiniz:</label>
                                        <select class="form-control" name="is_active" >
                                            <option>{{ $data['is_active'] }}</option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Pasif</option>
                                        </select>
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
