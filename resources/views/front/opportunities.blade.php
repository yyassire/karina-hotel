@extends('layouts.app')

@php
    $menu=1;

@endphp

@section('tkd')
<title>{{$page['title_'.$session]}}</title>
<meta name="keywords" content="{{$page['keywords_'.$session]}}">
<meta name="description" content="{{$page['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="{{asset(App\Helper\mHelper::largeImage($page->image))}}" alt="">
</section>


<!--campany slider-->
<section class="my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper1">
                <div class="slider-container">
                    <div class="slides-numbers" style="display: block;">
                        <span class="active">01</span> <label>/ <span class="total"></span></label>
                    </div>
                    <div class="slider-holder">
                        <!--item-->
                        @foreach($details as $detail)
                        @php
                    	$image = App\Models\Page_detail_gallery::orderBy('desk','asc')->where('page_detail_id',$detail->id)->first();
                        @endphp
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="slider-card-info">
                                        <label class="slider-card-info-lbl">@lang('language.firsatlar')</label>
                                        <h2 class="slider-card-info-h2">{{$detail['hood_'.$session]}}</h2>
                                        <div class="slider-card-info-main">
                                            <p class="slider-card-info-main-p">
                                                {!! $detail['content_'.$session] !!}
                                            </p>

                                        </div>
                                        <div class="room-view-gallery d-none">
                                                    <button class="btn btn-view-photo btn-picture" id="{{ $detail->id }}"
                                                        onclick="opportunity(id)">@lang('language.tumfotolar')</button>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="slider-img">
                                        <img src="{{asset($image->image)}}" alt="Washington Resort Hotel">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--item-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--campany slider-->
 <script>
        function opportunity(id) {
            $.ajax({
                type: 'GET',
                url: '/ajax/' + id,
                datatype: 'json',
                beforSend: function() {
                    console.log('before');
                },
                success: function(data) {
                    console.log(data.length);
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        console.log(i);
                        console.log(data[i].image);
                        html += '<div class="col-6 col-md-4 image">';
                        html += '<div class="img-wrapper">';
                        html += '<a class="pht" href="' + data[i].image + '"><img src="' + data[i].image +
                            '" class="img-responsive"></a>';
                        html += '<div class="img-overlay">';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                    }

                    $('#viewPhoto').html(html);

                },
                complete: function(data) {


                    $('#overlay #nextButton').trigger("click");

                },
                error: function() {
                    console.log('AJAX load did not work');
                }
            });
        }
    </script>

<!--tüm fotolar-->

<section class="view-photo">
    <div class="container-fluid">
        <div id="gallery">
            <div id="image-gallery">
                <div class="row" id="viewPhoto">
                    <!--item-->
                   
                    <!--item-->

                </div>
            </div>
        </div>
    </div>
</section>

<!--tüm fotolar-->


@endsection
