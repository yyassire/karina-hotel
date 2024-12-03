@extends('layouts.app')

@php
    $menu=1;
@endphp

@section('tkd')
<title>{{$footer['title_'.$session]}}</title>
<meta name="keywords" content="{{$footer['keywords_'.$session]}}">
<meta name="description" content="{{$footer['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="{{asset(App\Helper\mHelper::largeImage($footer->image))}}">

</section>


<!--home section-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="about-content-title">
                <label class="about-content-title-lbl">{{$footer['hood_one_'.$session]}}</label>
                <h2 class="about-content-title-h2">{{$footer['hood_two_'.$session]}}</h2>
            </div>
        </div>
    </div>

    <div class="row mobil-change mb-5">


        <div class="col-12">
            <div class="about-info-main">
                <h2 class="about-info-main-h2">{{$footer['hood_three_'.$session]}}</h2>

                <p class="about-info-main-p">
                    {!! $footer['content_'.$session] !!}
                </p>
            </div>
        </div>
    </div>
</div>

<!--home section-->



@endsection
