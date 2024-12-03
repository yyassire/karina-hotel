@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>İletişim Form Yönetim Sayfası</h1>
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
                    
                  
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">No</th>
                                <th>
                                    İsim
                                </th>
                                <th>
                                    Soyisim
                                </th>
                                <th>
                                    Telefon
                                </th>
                                <th>
                                    Mail Adresi
                                </th>
                                
                                
                                <th>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="priority-list">
                            @php($i=1)
                            @foreach($data as $val)
                            <tr data-priority="{{$val['id']}}">

                                <td>
                                    {{$i++}}
                                </td>
                                <td>
                                    <a>
                                        {{$val['name']}}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{$val['surname']}}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{$val['phone']}}
                                    </a>
                                </td>
                                <td>
                                    <a>
                                        {{$val['email']}}
                                    </a>
                                </td>
                                
                                
                                <td class="project-actions text-right">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Silmek İstediğinize Emin Misiniz ?')" href="{{route('admin.form.delete',['id'=>$val['id']])}}">
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

