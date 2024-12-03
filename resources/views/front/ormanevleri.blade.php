@extends('layouts.ormanapp')

@php
$menu=0;
$activity = App\Models\Page::where('category','aktivite')->first();
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
@endphp

@section('tkd')
<title>{{$homepage['title_'.$session]}}</title>
<meta name="keywords" content="{{$homepage['keywords_'.$session]}}">
<meta name="description" content="{{$homepage['description_'.$session]}}"/>
@endsection

@section('content')

<div class="home-banner-content">
    <picture>
        <source media="(max-width:768px)" srcset="{{asset($mobile_sliders->image)}}">
        <img src="{{asset($sliders->image)}}" alt="Karinna Hotel">
    </picture>
</div>

{{-- <div class="widged-show-hide">
    <a href="/reservation" target="_blank" class="btn-widget">@lang('language.rezervasyon')</a>
</div> --}}


<div class="home-banner-about d-none">
    <div class="home-about-title">
        <label class="home-about-title-lbl">{{$homepage['slider_text_one_'.$session]}}</label>
        <h2 class="home-about-title-h2">{{$homepage['slider_text_two_'.$session]}}</h2>
    </div>
    <div class="home-about-title-p-main">
        <p class="home-about-title-p" style="color:white;">
            {!! $homepage['slider_text_three_'.$session] !!}
        </p>
    </div>
    <div class="about-send-btn">
    </div>
</div>
</section>
<!--home banner-->

{{-- id routing --}}
<div id="hakkimizda"></div>
<div id="about-us"></div>
{{-- id routing --}}


{{-- home about --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="room-home-title-main">
                <label class="room-home-lbl">{{$homepage['about_one_'.$session]}}</label>
                <h2 class="room-home-h2">{{$homepage['about_two_'.$session]}}</h2>
                <p class="room-home-p">
                    {!! substr($homepage['about_content_'.$session],0 ,581) !!}
                </p>
            </div>
        </div>
    </div>
</div>

<!--home room-->
<section class="room-main">

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="room-home-title-main">
                <h2 class="room-home-h2">{{$homepage['room_two_'.$session]}}</h2>
                {{-- <p class="room-home-p">
                    {!! $homepage['room_content_'.$session] !!}
                </p> --}}
            </div>
        </div>

        <div class="row room-card-list">
            <!--item-->
            @foreach($rooms as $room)
            <div class="col-12 col-md-4">
                <div class="room-card">
                    <a href="@if($session == 'tr')/tr/ormanevleri/orman-evleri @elseif($session =='en')/en/ormanevleri/forest-homes @endif">
                        <div class="room-card-img">
                            <img src="{{asset(App\Helper\mHelper::largeImage($room->image))}}" alt="Karinna Hotel">
                        </div>
                    </a>
                    <div class="room-title">
                        <label>{{$room['room_name_'.$session]}}</label>
                    </div>
                </div>
            </div>
            @endforeach
            <!--item-->
        </div>
        <div class="view-room-link">
            <a href="@if($session == 'tr')/tr/ormanevleri/orman-evleri @elseif($session =='en')/en/ormanevleri/forest-homes @endif" class="view-room-btn">@lang('language.tumodalar')</a>
        </div>
    </div>
</div>
</section>
<!--home room-->

<!--campany slider-->
<section class="iglo">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <div class="iglo-content">
                    <h2><a href="@if($session == 'tr')/tr/ormanevleri/iglo-evleri @elseif($session =='en')/en/ormanevleri/igloo-houses @endif">{{ $homepage['iglo_hood_'.$session] }}</a></h2>
                    <p>{!! $homepage['iglo_content_'.$session] !!}</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="carouselExampleControls23" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner igloslider">
                      @foreach ($iglo_slider as $iglo)
                      <div class="carousel-item">
                        <img class="iglo-slider-img" src="{{ $iglo->image }}" class="d-block" alt="...">
                      </div>
                      @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls23" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls23" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
</section>
<!--campany slider-->

<!--video-->
<section class="video-main">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="video-title">
                <h2 class="video-title-h2">{{$homepage['about_one_'.$session]}}</h2>
                <p class="video-title-p">
                    {{$homepage['slider_text_one_'.$session]}}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="video-picture">
    <img class="video-picture-bg" src="{{ asset($sliders->image) }}" alt="">
    <!--video-->
   

    <!--video-->
    <div class="video-play">
        <label class="video-play-lbl">@lang('language.tumvideolar')</label>
        <button class="btn btn-video" id="modalShow2"><img src="{{asset('front_assets/images/play.svg')}}" /></button>
    </div>
</div>
</section>
<!--video-->


    <!--modal video-->
    <div class="modal2" id="modalTwo">
        <div class="modal-conetnt1">
            <div class="close-btn">
                <button class="btn btn-modal-close" id="closeModal2">X</button>
            </div>
            <div class="row no-gutters">
               {!! $homepage->video_url !!}
            </div>
        </div>
    </div>
    <!--modal video-->





<script>
$(".igloslider div:nth-child(1)").addClass('active');
</script>

@endsection




