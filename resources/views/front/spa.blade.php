@extends('layouts.app')

@php
    $menu=1;
    $count=0;
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

<div class="spa-content-title">
    <label class="about-content-title-lbl">KARİNNA HOTEL CONVENTION & SPA CENTER</label>
</div>
<!--restaurant-->
<section class="room-top-select mt-5 mb-5">
    <div class="room-select-main">
        <div class="awesome__thumbnails">
            @foreach($details as $key=>$detail)
            <div class="thumb {{$key==0 ? 'active' : ''}}" data-rel="{{$count++}}">
                <label class="room-page-title">{{$detail['hood_'.$session]}}</label>
            </div>
            @endforeach
        </div>

    </div>

    <div class="slider-room-counter-main pt-5">
        <div class="row">
            <div class="col-12">
                <div class="awesome__slider">
                    <!--item-->
                    @foreach($details as $key=>$detail)
                    @php
                   	 $image = App\Models\Page_detail_gallery::orderBy('desk','asc')->where('page_detail_id',$detail->id)->first();
                    @endphp
                    <div class="room-slider-flex">
                        <div class="room-slider-text">                           
                            <h2 class="room-slider-text-h2">{{$detail['hood_'.$session]}}</h2>
                            <div class="room-info-p">
                                <p class="info-room-p">
                                    {!! $detail['content_'.$session] !!}
                                </p>

                            </div>
                            <div class="room-view-gallery">
                                                    <button class="btn btn-view-photo btn-picture" id="{{ $detail->id }}"
                                                        onclick="spa(id)">@lang('language.tumfotolar')</button>
                                                </div>
                        </div>
                        @isset($image)
                        <div class="room-slider-right">
                            <img src="{{asset($image->image)}}" alt="Washington Resort Hotel">
                        </div>
                        @endisset
                    </div>
                    @endforeach
                    <!--item-->
                </div>
            </div>
        </div>
    </div>

</section>

<!--restaurant-->

 <script>
        function spa(id) {
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
