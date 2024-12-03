@extends('layouts.admin',['pdf'=>'pdf'])
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pdf Yönetimi</h1>
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

                        @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="{{route('admin.pdf.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Dil Seçin</label>
                                                <select name="language_id" class="form-control">
                                                    <option>Seçiniz</option>
                                                    @foreach (App\Models\Language::all() as $language )
                                                    <option value="{{ $language['id'] }}">{{ $language['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pdf İsmi</label>
                                                <input type="text" name="name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pdf Dosyasını Ekleyiniz</label>
                                                <input type="file" name="file"  class="dropify" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Kaydet</button>
                                </form>
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
                                    Pdf İsimleri
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                            </thead>
                            <tbody id="priority-list">
                            @php($i=1)    
                            @foreach($data as $val)
                                <tr data-priority="{{$val['id']}}">

                                    <td>
                                        {{$i ++}}</td>
                                    <td>
                                        <a>
                                            {{$val['name']}}
                                        </a>
                                        <br/>
                                        
                                    </td>
                                    <td class="project-actions text-right">

                                        <a class="btn btn-danger btn-sm" href="{{route('admin.pdf.delete',['id'=>$val['id']])}}">
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
                        url: "{{ URL::route('admin.pdf.ajaxdesk') }}",
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

