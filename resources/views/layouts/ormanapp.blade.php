<!doctype html>
@php
    $session = app()->getLocale();
    $languages = App\Models\Language::all();
    $contact = App\Models\Ormanevleri_contact::first();
    $footers = App\Models\Footer::all();
	$menuslider = App\Models\Slider::where('slider_id',10)->first();

    if (session()->has('lang')) {
        $currentLang = App\Models\Language::where('code', session()->get('lang'))->first();
    } else {
        $currentLang = App\Models\Language::where('is_default', 1)->first();
    }
    $pdfs = App\Models\Pdf::where('language_id', $currentLang['id'])->get();
@endphp
<html lang="{{ $session }}">

<head>
    <base href="{{ url('/') }}">

    <meta charset="utf-8">

    <link rel="icon" href="{{asset('front_assets/images/logo/karinnafavicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('tkd')
    <!--Css list-->
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/counter-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/room-card-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/datepicker-main.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/twitter-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/video.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/responsive.css') }}">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" integrity="sha512-DD6Lm09YDHzhW3K4eLJ9Y7sFrBwtCF+KuSWOLYFqKsZ6RX4ifCu9vWqM4R+Uy++aBWe6wD4csgQRzGKp5vP6tg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Jquery-->
    <script src="{{ asset('front_assets/js/jquery.js') }}"></script>

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WT2524GV');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
   
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT2524GV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
   
    <!--menu-->
    <nav class="navbar-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 col-md-2">
                    <div class="mobil-btn-logo">
                        <div class="mobil-menu-btn">
                            <button type="button" class="btn btn-menu mobil-d-none" id="mobilBusiness">
                                <i class="bi bi-list"></i>
                            </button>
                        </div>
                        <a href="{{$session}}/ormanevleri">
                            <div class="logo-nav">
                                <picture>
                                    <source media="(max-width:768px)"
                                        srcset="{{ asset($contact->logo) }}">
                                    <img src="{{ asset($contact->logo) }}" class="nav-logo-img"
                                        alt="Washington Resort Hotel">
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8 menu-mobil-d-none">
                    <div class="menu-list">
                        <ul class="menu-list-ul">
                            <li><a href="{{$session}}/ormanevleri#@if($session =='tr')hakkimizda @elseif($session=='en')about-us @endif">@lang('language.hakkimizda2')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')orman-evleri @elseif($session=='en')forest-homes @endif">@lang('language.ormanevleri')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')mons-1750-restoran @elseif($session=='en')mons-1750-restaurant @endif">@lang('language.mons')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')galeri @elseif($session=='en')gallery @endif">@lang('language.galeri2')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')iletisim @elseif($session=='en')contact @endif">@lang('language.iletisim2')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 col-md-2">
                    <div class="language-mobile">
                        <ul class="language-mobile-ul">
                            <li>
                                <div class="dropdown">
                                    <button class="btn language-btn" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-caret-down-fill"></i>{{ strtoupper($session) }}
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach ($languages as $language)
                                            <li><a class="dropdown-item"
                                                    href="/changelanguage/{{ $language->code }}">{{ strtoupper($language->name) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="btn btn-menu btn-mobil-d-none" id="bussinessBtn"><i
                                        class="bi bi-list"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--menu-->

    <!--home banner-->
    <section>

        @yield('content')
        <!--footer main-->
        <footer class="footer-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="/">
                            <div class="footer-logo text-end">
                                <img src="{{ asset($contact->sub_logo) }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 text-start">
                        <div class="footer-address">
                            <label class="footer-address-lbl">KARİNNA ORMAN EVLER</label>
                            <label class="footer-address-lbl2">{{ $contact->address }}</label>
                            <a href="tel:{{ $contact->phone }}" class="footer-address-a">Ph. {{ $contact->phone }}</a>
                            <label class="footer-address-lbl3">@lang('language.bizitakipedin')</label>
                            <ul class="footer-address-ul">
                                @if ($contact['whatsapp'] != null)
                                    <li><a href="https://wa.me/{{ $contact->whatsapp }}" target="_blank"><i
                                                class="bi bi-whatsapp"></i></a></li>
                                @endif
                                @if ($contact['instagram'] != null)
                                    <li><a href="{{ $contact->instagram }}" target="_blank"><i
                                                class="bi bi-instagram"></i></a></li>
                                @endif
                                @if ($contact['facebook'] != null)
                                    <li><a href="{{ $contact->facebook }}" target="_blank"><i
                                                class="bi bi-facebook"></i></a></li>
                                @endif
                                @if ($contact['twitter'] != null)
                                    <li><a href="{{ $contact->twitter }}" target="_blank"><i
                                                class="bi bi-twitter"></i></a></li>
                                @endif
                                @if ($contact['youtube'] != null)
                                    <li><a href="{{ $contact->youtube }}" target="_blank"><i
                                                class="bi bi-youtube"></i></a></li>
                                @endif
                              	@if ($contact['linkedin'] != null)
                                    <li><a href="{{ $contact->linkedin }}" target="_blank"><i
                                         	class="bi bi-linkedin"></i></a></li>
                                @endif
                                @if ($contact['tripadvisor'] != null)
                                    <li><a href="{{ $contact->tripadvisor }}" target="_blank"><i
                                           		class="fa fa-tripadvisor"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="row mobil-hide">
                            <div class="col-12 col-md-6">
                                <div class="footer-menu-list">
                                    <ul class="footer-menu-list-ul">
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="footer-menu-list">
                                    <ul class="footer-menu-list-ul">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-desing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="desing-company">
                            <label class="desing-company-lbl">{{ $contact->copyright }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer main-->



        @if ($menu == 0)
            <!--home menu top-->
            <section class="nav-home-menu">
                <img src="{{ asset($menuslider->image) }}" alt="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <a href="/">
                                <div class="home-nav-logo">
                                    <img src="{{ asset($contact->sub_logo) }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <div class="menu-button-hide">
                                <button class="btn btn-menu-hide"><i class="bi bi-list"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="home-menu-left">
                                <ul class="home-menu-left-ul">
                            <li><a href="{{$session}}/ormanevleri#@if($session =='tr')hakkimizda @elseif($session=='en')about-us @endif">@lang('language.hakkimizda2')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')orman-evleri @elseif($session=='en')forest-homes @endif">@lang('language.ormanevleri')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')iglo-evleri @elseif($session=='en')igloo-houses @endif">@lang('language.igloevleri')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')galeri @elseif($session=='en')gallery @endif">@lang('language.galeri2')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')iletisim @elseif($session=='en')contact @endif">@lang('language.iletisim2')</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="home-menu-right">
                                <div class="home-menu-fallow">
                                    <label class="home-menu-fallow-lbl">@lang('language.bizitakipedin')</label>
                                    <ul class="footer-address-ul mt-2">
                                        @if ($contact['whatsapp'] != null)
                                            <li><a href="https://wa.me/{{ $contact->whatsapp }}" target="_blank"><i
                                                        class="bi bi-whatsapp"></i></a></li>
                                        @endif
                                        @if ($contact['instagram'] != null)
                                            <li><a href="{{ $contact->instagram }}" target="_blank"><i
                                                        class="bi bi-instagram"></i></a></li>
                                        @endif
                                        @if ($contact['facebook'] != null)
                                            <li><a href="{{ $contact->facebook }}" target="_blank"><i
                                                        class="bi bi-facebook"></i></a></li>
                                        @endif
                                        @if ($contact['twitter'] != null)
                                            <li><a href="{{ $contact->twitter }}" target="_blank"><i
                                                        class="bi bi-twitter"></i></a></li>
                                        @endif
                                        @if ($contact['youtube'] != null)
                                            <li><a href="{{ $contact->youtube }}" target="_blank"><i
                                                        class="bi bi-youtube"></i></a></li>
                                        @endif
                                      	@if ($contact['linkedin'] != null)
                                            <li><a href="{{ $contact->linkedin }}" target="_blank"><i
                                                        class="bi bi-linkedin"></i></a></li>
                                        @endif
                                      	@if ($contact['tripadvisor'] != null)
                                            <li><a href="{{ $contact->tripadvisor }}" target="_blank"><i
                                                        class="fa fa-tripadvisor"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--home menu top-->
        @elseif ($menu == 1)
            <!--business page menu-->
            <div class="business-page-menu">
                <img src="{{ asset('/images/slider/830-slider-img.jpg') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="business-menu-logo">
                                <img src="{{ asset($contact->sub_logo) }}">
                            </div>">

                            </a>
                        </div>
                        <div class="col-6">
                            <div class="business-menu-btn">
                                <button class="btn btn-menu-hide" id="btnBuussines"><i
                                        class="bi bi-list"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="home-menu-left business-menu-left">
                                <ul class="home-menu-left-ul">
                            <li><a href="{{$session}}/ormanevleri#@if($session =='tr')hakkimizda @elseif($session=='en')about-us @endif">@lang('language.hakkimizda2')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')orman-evleri @elseif($session=='en')forest-homes @endif">@lang('language.ormanevleri')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')iglo-evleri @elseif($session=='en')igloo-houses @endif">@lang('language.igloevleri')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')galeri @elseif($session=='en')gallery @endif">@lang('language.galeri2')</a></li>
                            <li><a href="{{$session}}/ormanevleri/@if($session =='tr')iletisim @elseif($session=='en')contact @endif">@lang('language.iletisim2')</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="home-menu-right business-menu-right">
                                <ul class="home-menu-right-ul">
                                </ul>
                                <div class="home-menu-fallow">
                                    <label class="home-menu-fallow-lbl">@lang('language.bizitakipedin')</label>
                                    <ul class="footer-address-ul mt-2">
                                        @if ($contact['whatsapp'] != null)
                                            <li><a href="https://wa.me/{{ $contact->whatsapp }}"><i
                                                        class="bi bi-whatsapp"></i></a></li>
                                        @endif
                                        @if ($contact['instagram'] != null)
                                            <li><a href="{{ $contact->instagram }}" target="_blank"><i
                                                        class="bi bi-instagram"></i></a></li>
                                        @endif
                                        @if ($contact['facebook'] != null)
                                            <li><a href="{{ $contact->facebook }}" target="_blank"><i
                                                        class="bi bi-facebook"></i></a></li>
                                        @endif
                                        @if ($contact['twitter'] != null)
                                            <li><a href="{{ $contact->twitter }}" target="_blank"><i
                                                        class="bi bi-twitter"></i></a></li>
                                        @endif
                                        @if ($contact['youtube'] != null)
                                            <li><a href="{{ $contact->youtube }}" target="_blank"><i
                                                        class="bi bi-youtube"></i></a></li>
                                        @endif
                                      	@if($contact['linkedin']!=null)<li><a href="{{$contact->linkedin}}" target="_blank"><i class="bi bi-linkedin"></i></a></li>@endif
                              			@if($contact['tripadvisor']!=null)<li><a href="{{$contact->tripadvisor}}" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>@endif
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--business page menu-->
        @endif

        <!--widget main-->
        <div class="widget-content">
            <!--call nov-->
            <div class="call-now-content">
                <a target="_blank" href="tel:{{ $contact->phone }}">
                    <div class="call-nov-link">
                        <label class="call-nov-link-a">{{ $contact->phone }}</label>
                    </div>
                    <div class="call-nov-icon">
                        <img src="/front_assets/images/phone.svg" />
                    </div>
                </a>
            </div>
            <!--call nov-->


            <!--whatsapp-->

            <div class="whatsapp-content">
                <a target="_blank" href="https://wa.me/{{ $contact->whatsapp }}">
                    <div class="whatsapp-link">
                        <label class="whatsap-link-a">{{ $contact->whatsapp }}</label>
                    </div>
                    <div class="whatsapp-icon">
                        <img src="/front_assets/images/whatsapp.svg" />
                    </div>
                </a>
            </div>
            <!--whatsapp-->


            <!--reservation link-->

            <!--<div class="reservation-content">
                <a target="_blank" href="https://karinnahotel.platformeva.com/" target="_blank">
                    <div class="reservation-link">
                        <label class="reservation-link-a">@lang('language.rezervasyonyap')</label>
                    </div>
                    <div class="reservation-icon">
                        <img src="/front_assets/images/bell.svg" />
                    </div>
                </a> 
            </div>-->

            <!--reservation link-->
        </div>
        <!--widget main-->





        <!--Mobil widget start-->
        <div class="alt_buton_v2">
            <!--<div class="sizi_arayalim">
                <a target="_blank" href="https://karinnahotel.platformeva.com/" class="sizi_arayalim_btn sizi-arayalim">
                    <div class="img"><img src="/front_assets/images/sizi_arayalim.png" /></div>
                     <span>@lang('language.rezervasyonyap')</span>
                   
                </a>
            </div> -->
            <div class="wp">
                <a target="_blank" href="https://wa.me/{{ $contact->whatsapp }}" id="wp_footer">
                    <div class="img"><img src="/front_assets/images/contact2.png" /></div>
                    <span>WhatsApp</span>
                </a>
            </div>
            <div class="hemen_ara">
                <a target="_blank" href="tel:{{ $contact->phone }}" class="hemen_ara_footer" id="hemen_ara_footer">
                    <div class="img"><img src="/front_assets/images/hemen_ara.png" /></div>
                    <span><span>@lang('language.hemenara')</span></span>
                </a>
            </div>
        </div>
        <!--Mobil widget End-->
  
  		<style>
        .widget-content2 {
            position: fixed;
            left: 10px;
            top: 51.5%;
            z-index: 99;
          }
          
          .geri-don-link{
              height: 45px;
              border-left: 5px solid #00624b;
              box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
              margin: 10px 0px;
              position: relative;
              right: -18px;
              width: 0;
              text-align: center;
              overflow: hidden;
              -webkit-transition: all 0.5s ease;
              -moz-transition: all 0.5s ease;
              -o-transition: all 0.5s ease;
              transition: all 0.5s ease;
              background-color: white;
          }
          
          .geri-don-icon{
              height: 60px;
              width: 60px;
              background: white;
              border-radius: 50%;
              padding: 13px;
              box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
              position: relative;
              z-index: 3;
              background-color: #00624b;
          }
          
          .geri-don a {
              display: flex;
              justify-content: end;
              cursor: pointer;
          }
          @media only screen and (max-width: 600px) {
          .widget-content2 {
            top:82.5%;
            }
          }
  		</style>
  
  		<div class="widget-content2">
            <!--call nov-->
            <div class="geri-don">
                <a href="/">
                    <div class="geri-don-link">
                        <label class="geri-don-link-a">@if($session == 'tr')Karinna Geri Dön @elseif($session == 'en')Go Back to Karinna @endif</label>
                    </div>
                  <div class="geri-don-icon">
                        <img src="/front_assets/images/geri-don-karinna.png" />
                    </div>
                </a>
            </div>
  		<div>
          
        <script src="{{ asset('front_assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('front_assets/js/main.js') }}"></script>
        <script src="{{ asset('front_assets/js/counter-slider.js') }}"></script>
        <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front_assets/js/room-card-slider.js') }}"></script>
        <script src="{{ asset('front_assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('front_assets/js/datepicker-moment.js') }}"></script>
        <script src="{{ asset('front_assets/js/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('front_assets/js/script.js') }}"></script>

</body>

</html>
