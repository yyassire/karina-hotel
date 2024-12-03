@extends('layouts.app')

@php
    $menu=1;
    $count=0;
@endphp

@section('tkd')
<title>{{$tkd['title_'.$session]}}</title>
<meta name="keywords" content="{{$tkd['keywords_'.$session]}}">
<meta name="description" content="{{$tkd['description_'.$session]}}"/>
@endsection

@section('content')

<section class="about-page-banner">
    <img src="{{$sliders[0]['image']}}" alt="">
</section>



<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="room-title-info">
                <label class="room-title-info-lbl">{{$tkd['hood_one_'.$session]}}</label>
                <h2 class="room-title-info-h2">{{$tkd['hood_two_'.$session]}}</h2>
                <p class="room-title-info-p">
                    {!! $tkd['content_'.$session] !!}
                </p>
            </div>
        </div>
    </div>
</div>


<!--room-->

<section class="room-top-select mt-5 mb-5">
    <div class="room-select-main">
        <div class="awesome__thumbnails room-card-page">
            @foreach($rooms as $key=>$room)
            <div class="thumb {{$key==0 ? 'active' : ''}}" data-rel="{{$count++}}">
                <div class="room-img">
                    <img src="{{asset(App\Helper\mHelper::largeImage($room->image))}}" >
                </div>
                <label class="room-page-title">{{$room['room_name_'.$session]}}</label>
            </div>
            @endforeach
        </div>

    </div>

    <div class="slider-room-counter-main room-main-slider">
        <div class="row">
            <div class="col-12">
                <div class="awesome__slider">
                    <!--item-->
                    @foreach($rooms as $key=>$room)
                    <div class="room-slider-flex">
                        <div class="room-slider-text">
                            <label class="room-slider-text-lbl">@lang('language.odalar')</label>
                            <h2 class="room-slider-text-h2">{{$room['room_name_'.$session]}}</h2>
                            <div class="room-info-p">
                                <p class="info-room-p">
                                    {!! $room['content_'.$session] !!}
                                </p>

                            </div>
                            <div class="room-view-gallery">
                              <button class="btn btn-view-photo btn-picture" id="{{ $room->id }}"
                                      onclick="opportunity(id)">@lang('language.tumfotolar')
                              </button>
                           </div>
                        </div>
                        <div class="room-slider-right">
                            <img src="{{asset(App\Helper\mHelper::largeImage($room->image))}}">
                        </div>
                    </div>
                    @endforeach
                    <!--item-->
                </div>
            </div>
        </div>
    </div>

</section>

<!--room-->

<script>
        function opportunity(id) {
            var html = '';
            $.ajax({
                type: 'GET',
                url: '/room_ajax/' + id,
                datatype: 'json',
                beforSend: function() {
                    console.log('before');
                },
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {

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
