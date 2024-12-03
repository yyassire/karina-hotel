@extends('layouts.app')

@php
    $menu=1;
@endphp

@section('tkd')
<title>{{$about['title_'.$session]}}</title>
<meta name="keywords" content="{{$about['keywords_'.$session]}}">
<meta name="description" content="{{$about['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="{{$sliders[0]['image']}}">
</section>


<!--home section-->
<section class="home-section">
    <img class="home-page-img" src="/front_assets/images/shadow3.png">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="about-content-title">
                <label class="about-content-title-lbl">{{$about['hood_one_'.$session]}}</label>
                <h2 class="about-content-title-h2">{{$about['hood_two_'.$session]}}</h2>
            </div>
        </div>
    </div>

    <div class="row mobil-change mb-5">
        <div class="col-12 col-md-5">
            <div class="about-picture">
                <img src="{{asset(App\Helper\mHelper::largeImage($about->image))}}" alt="Washington Resort Hotel">
            </div>
        </div>

        <div class="col-12 col-md-7">
            <div class="about-info-main">
                <label class="about-info-main-lbl">{{$about['hood_three_'.$session]}}</label>
                <h2 class="about-info-main-h2">{{$about['hood_four_'.$session]}}</h2>

                <p class="about-info-main-p">
                    {!! $about['content_'.$session] !!}
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<!--home section-->



@endsection
