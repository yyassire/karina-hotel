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




<!--activite-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="gallery-content mb-5">

                <nav class="gallery-tab-menu-list">
                    <div class="mobil-gallery-list">
                        <label>HEPSİ <i class="bi bi-chevron-down"></i></label>
                    </div>
                    <div class="nav nav-tabs gallery-tab" id="nav-tab" role="tablist">
                      @foreach($details as $key=>$detail)
                        <button class="nav-link gallery-btn {{$key==0 ? 'active' : ''}}" id="nav-home-tab{{$detail->id}}" data-bs-toggle="tab"
                                data-bs-target="#nav-home{{$detail->id}}" type="button" role="tab" aria-controls="nav-home{{$detail->id}}"
                                aria-selected="true">{{$detail['hood_'.$session]}}</button>
                      @endforeach

                       
                    </div>
                </nav>


                <div class="container-fluid">
                    <div id="gallery">
                        <div id="image-gallery">
                            <div class="row">
                                <div class="tab-content" id="nav-tabContent">
                                  @php
                                  $count=0;
                                  @endphp
                                  @foreach($details as $key=>$detail)

                                    <div class="tab-pane fade {{$key==0 ? 'show active' : ''}}" id="nav-home{{$detail->id}}" role="tabpanel"
                                         aria-labelledby="nav-home-tab{{$detail->id}}" tabindex="{{$count++}}">
                                        <div class="row">
                                            <!--item-->
                                          @foreach(App\Models\Page_detail_gallery::where('page_detail_id',$detail->id)->get() as $image)
                                            <div class="col-6 col-md-4 image">
                                                <div class="img-wrapper">
                                                    <a class="pht" href="{{$image->image}}"><img src="{{$image->image}}"
                                                                                            class="img-responsive"></a>
                                                    <div class="img-overlay">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--item-->
                                          @endforeach

                                           
                                        </div>
                                      
                                    </div>
                                  @endforeach
                                
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>
<!--activite-->




@endsection
