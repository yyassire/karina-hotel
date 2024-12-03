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
                                <h3 class="card-title">Kod Bilgisi Ekle & Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post" action="{{url('/admin/code/edit/'.$data->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Google Tag Manager Head</label> 
                                                <textarea class="content form-control" cols="80"  name="google_tagmanager_head" rows="10" >{{$data['google_tagmanager_head']}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Google Tag Manager Body</label> 
                                                <textarea class="content form-control" cols="80" name="google_tagmanager_body" rows="10">{{$data['google_tagmanager_body']}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Facebook Pixel</label> 
                                                <textarea class="content form-control" cols="80"  name="facebook_head" rows="10">{{$data['facebook_head']}}</textarea>
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

