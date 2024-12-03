@extends('layouts.ormanapp')

@php
    $menu=1;
    $count=0;
@endphp

@section('tkd')
<title>{{$iglo['title_'.$session]}}</title>
<meta name="keywords" content="{{$iglo['keywords_'.$session]}}">
<meta name="description" content="{{$iglo['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="{{$sliders[0]['image']}}" alt="">
</section>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="room-title-info orman-room-mobile">
                <label class="room-title-info-lbl">{{$iglo['iglo_hood_one_'.$session]}}</label>
                <h2 class="room-title-info-h2">{{$iglo['iglo_hood_two_'.$session]}}</h2>
                <p class="room-title-info-p">
                    {!! $iglo['iglo_content_'.$session] !!}
                </p>
            </div>
        </div>
    </div>
</div>


@endsection
