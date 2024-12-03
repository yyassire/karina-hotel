@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dil Sayfası</h1>
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
                    <div class="card-header p-1">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('admin.language.store')}}" method="POST">
                            @csrf
                            <table>
                                <thead>
                                    <tr>
                                        <th>Dil</th>
                                        <th>Dil Kodu</th>
                                        <th>Varsayılan</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><input name="name" type="text"></td>
                                        <td><input name="code" type="text"></td>
                                        <td><input name="is_default" type="number"></td>
                                        <td class="p-2"><button type="submit" class="btn btn-primary">Dil Ekle</button>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">Id</th>
                                <th style="width: 20%">
                                    Dil
                                </th>
                                <th style="width: 20%">
                                    Dil Kodu
                                </th>
                                <th style="width: 20%">
                                    Varsayılan
                                </th>
                                <th style="width: 20%">
                                    Aktif/Pasif
                                </th>
                                <th style="width: 20%">
                                    
                                </th>

                            </tr>
                            </thead>
                            <tbody id="priority-list">
                            @foreach($data as $val)
                            <tr data-priority="{{$val['id']}}">

                                <td>
                                    {{$val['id']}}
                                </td>

                                <td>

                                    {{$val['name']}}
                                </td>

                                <td>
                                    {{$val['code']}}
                                </td>

                                <td>
                                    {{$val['is_default']}}

                                </td>

                                <td>
                                    {{$val['is_active']}}

                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-dark btn-sm" href="{{url('/admin/language/edit/'.$val->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Düzenle
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{url('/admin/language/delete/'.$val->id)}}">
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
@section('js')
    <script type="text/javascript">
        $(function(){
            $("#priority-list").sortable({
                stop: setPriority
            });
            function setPriority() {
                $("#priority-list tr").each( function(i){
                    var id = $(this).attr("data-priority");
                    //alert('Adı  => '+ id +'  İndex  =>  ' + i );
                    $.ajax({
                        type: 'POST',
                        url: "{{ URL::route('admin.language.ajaxdesk') }}",
                        headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'},
                        data: {
                            'id': id,
                            'desk': i,
                        },
                    });
                });
            }
        });

    </script>
@endsection
