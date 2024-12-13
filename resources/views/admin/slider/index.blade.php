@extends('layouts.admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Slider Galeri Yönetimi yes</h1>
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

                        <form method="post" action="{{ route('admin.slider.add') }}" enctype="multipart/form-data">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <input type="hidden" name="slider_id" value="{{ $id }}">


                            <div class="form-group">
                                <label for="exampleInputPassword1">Resim Seçin</label><span style="color: red">*</span>
                                <input type="file" name="image[]" multiple id="input-file-now" class="dropify"
                                    required />
                                <span style="color: red">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                         
                            @if ($id == 4)
                               
                            <div class="mb-5">
                                <select name="filters[]" class="selectpicker" multiple data-live-search="true" title='filtreleme etiketi'>
                                   @foreach ($filters as $filter )
                                       <option value="{{ $filter->id }}">{{$filter->name}}</option>
                                   @endforeach      
                                 </select>
                           </div>
                            @endif
                          
                            <button type="submit" class="btn btn-primary btn-sm">Kaydet</button>
                            <a href="/admin/slider/destroy/{{ $id }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Emin Misiniz ?')">Tümünü Sil</a>
                                
                        </form>




                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">No</th>
                                    <th style="width: 20%">
                                        Slider Galeri Resimleri
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
                                            <img src="{{ asset($val['image']) }}" style="width: 150px;height: 150px;">
                                        </td>
                                        <td class="project-actions text-right">

                                            <a class="btn btn-danger btn-sm"
                                                href="{{ url('/admin/slider/delete/' . $val->id . '/' . $id) }}">
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
            $('select').selectpicker();
            $("#priority-list").sortable({
                stop: setPriority
            });

            function setPriority() {
                $("#priority-list tr").each(function(i) {
                    var id = $(this).attr("data-priority");
                    //alert('Adı  => '+ id +'  İndex  =>  ' + i );
                    $.ajax({
                        type: 'POST',
                        url: "{{ URL::route('admin.slider.ajaxdesk') }}",
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
