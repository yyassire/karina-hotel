@extends('layouts.app')

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

<div class="widged-show-hide">
    <a href="/reservation" target="_blank" class="btn-widget">@lang('language.rezervasyon')</a>
</div>
<!--widget-->
<div class="widget-contentt">
    <div class="search-widget">
        <div class="row">

            <div class="col-8 col-md-6">
                <div class="entry-and-exit-date">
                    <!--item-->
                    <div class="date-of-entry">
                        <label class="date-lbl-text">@lang('language.giristarihi')</label>
                        <div class="check-in-day">
                            <label for="datetimes" class="check-in-day-lbl">05</label>
                            <p class="check-in-day-p">May</p>
                        </div>
                    </div>
                    <!--item-->

                    <!--item-->
                    <div class="release-date">
                        <label class="release-date-lbl">@lang('language.cikistarihi')</label>
                        <div class="check-out-date">
                            <label for="datetimes" class="check-out-date-lbl">05</label>
                            <p class="check-out-date-p">May</p>
                        </div>
                    </div>
                    <!--item-->
                    <input type="text" id="datetimes" class="form-control" />
                </div>
            </div>

            <div class="col-4 col-md-2">
                <div class="adult-count" id="adultShow">
                    <label class="adult-count-lbl">@lang('language.misafir')</label>
                    <p class="adult-count-p">2</p>
                    <div class="adult-count-content">
                        <div class="adult-title">
                            <label class="adult-title-lbl">@lang('language.yetiskin')</label>
                            <div class="adult-count-input">
                                <button class="btn btn-decrease-adult">-</button>
                                <input type="text" class="form-control adult-input" value="2">
                                <button class="btn btn-upgrade-adult">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="search-button">
                    <button class="btn btn-search-room">@lang('language.rezervasyonyap')</button>
                </div>
            </div>

        </div>
    </div>
</div>
<!--widget-->
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
        <a href="@if($session =='tr')/tr/hakkimizda @elseif($session=='en')/en/about @endif" class="about-send-link">Hak</a>
    </div>
</div>
</section>
<!--home banner-->

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
    <img class="home-page-img" src="/front_assets/images/shadow3.png">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="room-home-title-main">
                <label class="room-home-lbl">{{$homepage['room_one_'.$session]}}</label>
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
                    <a href="@if($session=='tr')/tr/odalar @elseif($session=='en')/en/rooms @endif">
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
            <a href="@if($session=='tr')/tr/odalar @elseif($session=='en')/en/rooms @endif" class="view-room-btn">@lang('language.tumodalar')</a>
        </div>
    </div>
</div>
</section>
<!--home room-->




<!--opportunities-->
<section class="opportunities-main">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="opportunities-title">
                <label class="opportunities-title-lbl">{{$homepage['activity_one_'.$session]}}</label>
                <h2 class="opportunities-title-h2">{{$homepage['activity_two_'.$session]}}</h2>
                <p class="opportunities-title-p">
                    {!! $homepage['activity_content_'.$session] !!}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="home-demo">
                <div class="owl-carousel owl-theme">
                    <!--item-->
                    @foreach($pages as $page)
                    <a href="@if($session == 'tr')/tr/sayfalar/{{$page['selflink_'.$session]}}/{{$page->id}} @elseif($session == 'en')/en/pages/{{$page['selflink_'.$session]}}/{{$page->id}} @endif">
                    <div class="item">
                        <img src="{{asset(App\Helper\mHelper::largeImage($page->image))}}" alt="">
                        <div class="slider-card-title">
                          <li><label class="slider-card-title-a">{{$page['title_'.$session]}}</label></li>
                        </div>
                    </div>
                    </a>
                    @endforeach
                    <!--item-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--opportunities-->

<!--campany slider-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper1">
                <div class="slider-container">
                    <div class="slides-numbers" style="display: block;">
                        <span class="active">01</span> <label>/ <span class="total"></span></label>
                    </div>
                    <div class="slider-holder">
                        <!--item-->
                        @foreach ($activity_details as $detail)
                        @php
                        $image = App\Models\Page_detail_gallery::orderBy('desk','asc')->where('page_detail_id',$detail->id)->first();
                        @endphp
                        <div class="item">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="slider-card-info">
                                        <label class="slider-card-info-lbl">@lang('language.aktiviteler')</label>
                                        <h2 class="slider-card-info-h2">{{$detail['hood_'.$session]}}</h2>
                                        <div class="slider-card-info-main">
                                            <p class="slider-card-info-main-p">
                                                {!! $detail['content_'.$session] !!}
                                            </p>

                                        </div>
                                        <div class="slider-view-btn">

                                            @if($session=='tr')<a href="/tr/sayfalar/{{$activity['selflink_'.$session]}}/{{$activity->id}}" class="slider-view-btn-link">@lang('language.incele')</a>@endif
                                            @if($session=='en')<a href="/en/pages/{{$activity['selflink_'.$session]}}/{{$activity->id}}" class="slider-view-btn-link">@lang('language.incele')</a>@endif
     
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    @isset($image)
                                    <div class="slider-img">
                                        <img src="{{asset($image->image)}}" alt="Karinna Resort Hotel">
                                    </div>
                                    @endisset
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
<!--video-->
<section class="video-main">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="video-title">
                <h2 class="video-title-h2">{{$homepage['video_'.$session]}}</h2>
                <p class="video-title-p">
                    {{$homepage['video_content_'.$session]}}
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
        <button class="btn btn-video" id="modalShow"><img src="{{asset('front_assets/images/play.svg')}}" /></button>
    </div>
</div>
</section>
<!--video-->


    <!--modal video-->
    <div class="modal1" id="modalOne">
        <div class="modal-conetnt1">
            <div class="close-btn">
                <button class="btn btn-modal-close" id="closeModal1">X</button>
            </div>
            <div class="row no-gutters">
               {!! $homepage->video_url !!}
            </div>
        </div>
    </div>
    <!--modal video-->





@endsection
