@extends('layouts.app')

@php
    $menu=1;
@endphp

@section('tkd')
<title>{{$contact['title_'.$session]}}</title>
<meta name="keywords" content="{{$contact['keywords_'.$session]}}">
<meta name="description" content="{{$contact['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="/{{$contact->image}}" alt="">
</section>


<!--contact page-->
<section class="contact-section">
    <img class="home-page-img" src="/front_assets/images/shadow3.png">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact-page-title">
                <label class="contact-page-title-lbl">{{$contact['hood_one_'.$session]}}</label>
                <h2 class="contact-page-title-h2">{{$contact['sub_hood_one_'.$session]}}</h2>
            </div>
            <h2 class="contact-page-paragraph">{!! $contact['content_one_'.$session] !!}</h2>

        </div>
    </div>

    <div class="row contact-form-change">
        <div class="col-12 col-md-6">
            <div class="map-content my-5">
                <iframe
                        src="{{$contact->map_code}}"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="contact-form my-5">


                <h2 class="contact-form-h2">@lang('language.iletisimformu')</h2>
                <form action="/form/add" method="POST" class="form-main-content">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="input-form">
                                <input type="text" class="form-control" placeholder="@lang('language.ad')" name="name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-form">
                                <input type="text" class="form-control" placeholder="@lang('language.soyad')" name="surname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-form">
                                <input type="text" class="form-control" placeholder="@lang('language.telefonnumaraniz')" name="phone">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-form">
                                <input type="text" class="form-control" placeholder="@lang('language.email')" name="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-form">
                                <textarea class="form-control" id="" rows="3" placeholder="@lang('language.konu')" name="subject"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-check checkbox-input">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            @lang('language.kvkk')
                        </label>
                    </div>
                    <div class="form-button-content">
                        <button type="submit" class="btn btn-form">@lang('language.gonder')</button>
                    </div>
                </form>
                <div class="contact-info-main">
                    <div class="contact-info-main-title my-4">
                        <label>@lang('language.iletisim')</label>
                    </div>

                    <div class="reservation-phone">
                        <label>@lang('language.rezervasyontel') :</label>
                        <a href="tel:{{$contact->call_center}}">{{$contact->call_center}}</a>
                        <label>@lang('language.tesistel') :</label>
                        <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                        <label>@lang('language.adres') :</label>
                        <p>{{$contact->address}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>


@endsection
