@extends('layouts.app')

@php
    $menu=1;
@endphp

@section('tkd')
<title>{{$tkd['title_'.$session]}}</title>
<meta name="keywords" content="{{$tkd['keywords_'.$session]}}">
<meta name="description" content="{{$tkd['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="{{asset($sliders[0]['image'])}}" alt="">
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="gallery-title">
                    <label class="gallery-title-lbl">{{$tkd['hood_one_'.$session]}}</label>
                    <h2 class="gallery-title-h2">{{$tkd['hood_two_'.$session]}}</h2>
                    <p class="gallery-title-p">
                        {!! $tkd['content_'.$session] !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="gallery-content mb-5">




                    <div class="container-fluid">
                        <div id="gallery">
                            <div id="image-gallery">
                                <div class="row">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane gallery-tab-panel fade show active" id="nav-home1" role="tabpanel"
                                            aria-labelledby="nav-home-tab1" tabindex="0">
                                            <div class="row">
                                                <!--item-->
                                                @foreach($sliders as $slider)
                                                <div class="col-6 col-md-4 image">
                                                    <div class="img-wrapper">
                                                        <a class="pht" href="{{asset($slider->image)}}"><img src="{{asset($slider->image)}}"
                                                                class="img-responsive"></a>
                                                        <div class="img-overlay">
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
                        </div>
                    </div>



                <div class="gallery-show-button mt-3">
                    <button class="btn gallery-button">
                        @if($session == 'tr')TÜM FOTOĞRAFLAR
                        @elseif($session == 'en')ALL PHOTOS
                        @endif
                    </button>
                </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
