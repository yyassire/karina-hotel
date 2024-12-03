@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Title-Keywords-Description Yönetimi</h1>
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
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tkd.create')}}">
                            <i class="fas fa-plus"></i>
                            Yeni Tkd Ekle
                        </a>
                      
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
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">Id</th>
                                <th style="width: 20%">
                                    Tkd
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                            </thead>
                            <tbody id="priority-list">
                            @foreach($data as $val)
                                <tr data-priority="{{$val['id']}}">

                                    <td>
                                        {{$val['id']}}</td>
                                    <td>
                                        <a>
                                            {{$val['title_tr']}}
                                        </a>
                                        <br/>
                                    </td>
                                    <td class="project-actions text-right">
                                        
                                        <a class="btn btn-primary btn-sm" href="{{url('/admin/tkd/edit/'.$val->id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Düzenle
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="{{url('/admin/tkd/delete/'.$val->id)}}" onclick="return confirm('Silmek İstediğinizden Emin Misiniz ?')">
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
