@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Oda Yönetimi</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.room.create') }}">
                            <i class="fas fa-plus"></i>
                            Yeni Oda Ekle
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
                                    <th style="width: 1%">No</th>
                                    <th style="width: 20%">
                                        Odalar
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="priority-list">
                                @php($i = 1)
                                @foreach ($data as $val)
                                    <tr data-priority="{{ $val['id'] }}">

                                        <td>
                                            {{ $i++ }}</td>
                                        <td>
                                            <a>
                                                {{ $val['room_name_tr'] }}
                                            </a>
                                            <br />
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ url('/admin/room_gallery/' . $val->id) }}">
                                                <i class="fas fa-plus">
                                                </i>
                                                Galeri
                                            </a>


                                            <a class="btn btn-success btn-sm"
                                                href="{{ url('/admin/room/edit/' . $val->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Düzenle
                                            </a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ url('/admin/room/delete/' . $val->id) }}"
                                                onclick="return confirm('Silmek İstediğinizden Emin Misiniz ?')">
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
        $(function() {
            $("#priority-list").sortable({
                stop: setPriority
            });

            function setPriority() {
                $("#priority-list tr").each(function(i) {
                    var id = $(this).attr("data-priority");
                    //alert('Adı  => '+ id +'  İndex  =>  ' + i );
                    $.ajax({
                        type: 'POST',
                        url: "{{ URL::route('admin.room.ajaxdesk') }}",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
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
