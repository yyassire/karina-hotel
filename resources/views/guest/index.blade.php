<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-h1HdACFTHoj++o7mdO+z7gNe29wJlS9yM8OVmP8R3D0p7fkg8pZa5UMDOhdtjlH3z"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Gorditas:wght@400;700&family=Manrope:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <title>Karinna Hotel</title>
</head>
<body>

<div class="video-background">
    @foreach($titles as $title)
        <iframe
            src="{{ $title->video_url }}?autoplay=1&mute=1&loop=1&playlist={{ $title->video_url }}&controls=0&rel=0&modestbranding=1&iv_load_policy=3"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>
    @endforeach
</div>

@include('guest.includes.header')

<div class="container-hotel text-center text-white d-flex flex-column justify-content-end my-5" style="min-height: 55vh;">
    @foreach($titles as $title)
        <!-- Başlık ve Alt Başlık Türkçe Olarak Gösterilecek -->
        <h1 id="headline" class="fw-400 my-3 writing d position-relative hidden ">
            <img src="assets/img/Component.svg" class="img-fluid shadow-circle">
            {{ $title->title }} <br>
        </h1>
        <p id="paragraph" class="text-dark hidden mt-3">
            {{ $title->subtitle }}
        </p>
    @endforeach
</div>

<br>

<div class="container my-5 bg-white shadow">
    <h3 class="mb-4"></h3>

    <div class="form-group p-4 ">

        <div class="d-flex flex-wrap justify-content-between ">

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Hotel Tipi</h6>
                <select class="form-select border-0 focus-ring-0" id="mySelect" aria-label="Otel 1 Seçimi">
                    <option value="otel1" selected>Orman Evleri</option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5</option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Giriş</h6>
                <select class="form-select  border-0" id="mySelect" aria-label="Otel 2 Seçimi">
                    <option value="otel1" selected>24 Kasım 2024</option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5</option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Çıkış</h6>
                <select class="form-select border-0" id="otelSeç3" aria-label="Otel 3 Seçimi">
                    <option value="otel1" selected>25 Kasım 2024</option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5</option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Oda Tipi</h6>
                <select class="form-select border-0" id="otelSeç4" aria-label="Otel 4 Seçimi">
                    <option value="otel1" selected>King Orman Evi</option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5


                    </option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0 mt-2">

                <a href="/reservation"
                   class="btn btn-success footer w-100 d-flex align-items-center justify-content-center">
                    Bul
                    <i class="fas fa-arrow-up ms-2" style="transform: rotate(45deg);"></i>
                </a>


            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4 text-center p-4">
            <h3 class="fs-1"><span id="activity-count">1 </span>+</h3>
            <p class="text-center text-secondary fs-6 fw-semibold font-family-Barlow text-uppercase m-0 px-3 py-2">
                Aktiviteler</p>
        </div>

        <div class="col-12 col-md-4 text-center p-4">
            <h3 class="fs-1"><span id="room-count">1</span>+</h3>
            <p class="text-center text-secondary fs-6 fw-semibold font-family-Barlow text-uppercase m-0 px-3 py-2">
                Farklı Oda</p>
        </div>

        <div class="col-12 col-md-4 text-center p-4">
            <h3 class="fs-1"><span id="happy-customer-count">1</span>+</h3>
            <p class="text-center text-secondary fs-6 fw-semibold font-family-Barlow text-uppercase m-0 px-3 py-2">Mutlu
                Müşteri</p>
        </div>
    </div>
</div>


<div class="container d-flex justify-content-center align-items-center  ">
    <div class="card mb-3 shadow border-0">
        <div class="row g-0">
            <div class="col-md-6">
                <a href="/gallery">
                    <img src="assets/img/karinnahotel/3.png" class="img-fluid rounded-start" alt="...">
                </a>
            </div>

            <div class="col-md-6">
                <div class="card-body ">
                    <p class="text-black fs-1 fw-semibold font-family-Barlow  m-0 px-3 py-2">Karinna Otel, Bir<br/>konaklamadan
                        daha <br>fazlası</p>
                    <p class="text-dark fs-6 fw-medium font-family-Manrope  m-0 px-3 py-2">Türkiye’nin en popüler kayak
                        merkezi Uludağ’ın <br>
                        zirvesinde yer alan Karinna Hotel Convention <br> Center & SPA seçkin mimarisi ve üstün hizmet
                        <br>anlayışıyla Uludağ keyfini sınırsızca misafirlerine <br> yaşatıyor.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-start ">
            <p class="text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Tercİh Edilen
                ODaLar</p>

        </div>

        <div class="col-md-6">
            <p class="text-end text-color me-5">
                <a href="/standart-deluxe-oda" class="text-decoration-none text-color">
                    Detaylı Gör<i class="fas fa-arrow-right ms-2"></i>
                </a>
            </p>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 text-center text-md-start">
            <div class="position-relative">
                <a href="/standart-deluxe-oda">
                    {{-- <img src="assets/img/rooms/1.png" class="img-fluid" alt="Resim Sol"> --}}
                    <img src="{{$rooms[0]->featured_image}}" class="img-fluid rounded-3" alt="Resim Sol"
                         style="width: 100%">
                </a>
                <a href="/standart-deluxe-oda">
                    <h3 class="position-absolute start-0 text-white bg-opacity-50 px-3 py-2 rounded-2"
                        style="bottom: 50px;">
                        {{$rooms[0]->name}}
                    </h3>
                </a>
                <p class="position-absolute bottom-0 start-0 text-white bg-white bg-opacity-10 px-3 py-2 px-1 rounded-2">
                    <img class="me-2" src="assets/img/icon/1.svg" alt="">2 Çocuk
                    <img class="me-2 ms-3" src="assets/img/icon/2.svg" alt=""> {{$rooms[0]->capacity}} kapasite
                    <img class="me-2 ms-3" src="assets/img/icon/3.svg" alt=""> {{$rooms[0]->size}} cm<sup>2</sup>
                </p>
            </div>
        </div>


        <div class="col-12 col-md-6">
            @if (null !== $rooms  && count($rooms) > 0)

                <div class="row">
                    @php
                        // check if rooms count is less than 5
                        $roomsCount = count($rooms) < 5 ? count($rooms) : 5;

                    @endphp
                    @for ($i = 1;  $i < $roomsCount ; $i++)
                        <div class="col-6 col-md-6 text-center text-md-start">
                            <div class="position-relative">
                                <a href="/standart-deluxe-oda">
                                    <img src="{{$rooms[$i]->featured_image}}" class="img-fluid" alt="Resim Sol">
                                </a>
                                <a href="/standart-deluxe-oda">
                                    <h3 class="position-absolute start-0 text-white bg-opacity-50 px-3 py-2 rounded-2  title-room">
                                        {{$rooms[$i]->name}}
                                    </h3>
                                </a>
                                <p class="position-absolute bottom-0 start-0 text-white bg-white bg-opacity-10 py-1 px-2 rounded-2 small d-none d-md-block">
                                    <img class="me-1 ms-2" src="assets/img/icon/1.svg" alt="">2 Çocuk
                                    <img class="me-1 ms-2" src="assets/img/icon/2.svg" alt=""> {{$rooms[$i]->capacity}}
                                    kapasite
                                    <img class="me-1 ms-2" src="assets/img/icon/3.svg" alt=""> {{$rooms[$i]->size}} cm
                                    cm<sup>2</sup>
                                </p>

                            </div>
                        </div>
                    @endfor


                    {{-- <div class="col-6 col-md-6 text-center text-md-start">
                        <div class="position-relative">
                            <a href="/standart-deluxe-oda">
                                <img src="assets/img/rooms/2.png" class="img-fluid" alt="Resim Sol">
                            </a>
                            <a href="/standart-deluxe-oda">
                                <h3 class="position-absolute start-0 text-white bg-opacity-50 px-3 py-2 rounded-2  title-room" >
                                    Deluxe Suit Odası
                                </h3>
                            </a>
                            <p class="position-absolute bottom-0 start-0 text-white bg-white bg-opacity-10 py-1 px-2 rounded-2 small d-none d-md-block">
                                <img class="me-1 ms-2" src="assets/img/icon/1.svg" alt="">2 Çocuk
                                <img class="me-1 ms-2" src="assets/img/icon/2.svg" alt=""> 2 Yetişkin
                                <img class="me-1 ms-2" src="assets/img/icon/3.svg" alt=""> 35 cm<sup>2</sup>
                            </p>

                        </div>
                    </div> --}}

                    {{-- <div class="col-6 col-md-6 text-center text-md-start mt-4">
                        <div class="position-relative">
                            <a href="/standart-deluxe-oda">
                                <img src="assets/img/rooms/2.png" class="img-fluid" alt="Resim Sol">
                            </a>
                            <a href="/standart-deluxe-oda">
                                <h3 class="position-absolute start-0 text-white bg-opacity-50 px-3 py-2 rounded-2  title-room" >
                                    Deluxe Suit Odası
                                </h3>
                            </a>
                            <p class="position-absolute bottom-0 start-0 text-white bg-white bg-opacity-10 py-1 px-2 rounded-2 small d-none d-md-block">
                                <img class="me-1 ms-2" src="assets/img/icon/1.svg" alt="">2 Çocuk
                                <img class="me-1 ms-2" src="assets/img/icon/2.svg" alt=""> 2 Yetişkin
                                <img class="me-1 ms-2" src="assets/img/icon/3.svg" alt=""> 35 cm<sup>2</sup>
                            </p>

                        </div>
                    </div> --}}

                    {{-- <div class="col-6 col-md-6 text-center text-md-start mt-4">
                        <div class="position-relative">
                            <a href="/standart-deluxe-oda">
                                <img src="assets/img/rooms/2.png" class="img-fluid" alt="Resim Sol">
                            </a>
                            <a href="/standart-deluxe-oda">
                                <h3 class="position-absolute start-0 text-white bg-opacity-50 px-3 py-2 rounded-2  title-room" >
                                    Deluxe Suit Odası
                                </h3>
                            </a>
                            <p class="position-absolute bottom-0 start-0 text-white bg-white bg-opacity-10 py-1 px-2 rounded-2 small d-none d-md-block">
                                <img class="me-1 ms-2" src="assets/img/icon/1.svg" alt="">2 Çocuk
                                <img class="me-1 ms-2" src="assets/img/icon/2.svg" alt=""> 2 Yetişkin
                                <img class="me-1 ms-2" src="assets/img/icon/3.svg" alt=""> 35 cm<sup>2</sup>
                            </p>

                        </div>
                    </div> --}}

                </div>
            @endif
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-start ">
            <p class="text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Hizmetlerİmİz</p>

        </div>

        <div class="col-md-6">
            <p class="text-end text-color me-5">
                <a href="/services" class="text-decoration-none text-color mt-5">
                    Detaylı Gör<i class="fas fa-arrow-right ms-2"></i>
                </a>
            </p>

        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4  d-flex flex-wrap justify-content-center">
            <div>
                <div class="card card-1 border-0 mb-3" onclick="showImage('restaurant')" style="cursor: pointer;">
                    <div class="card-body text-center rounded-2">
                        <h5 class="card-title">
                            <img class="me-2" src="assets/img/icon/4.svg" alt="">RESTAURANT
                        </h5>
                    </div>
                </div>

                <div class="card card-1 mb-3 border-0" onclick="showImage('room')" style="cursor: pointer;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">
                            <img class="me-2" src="assets/img/icon/5.svg" alt="">En Yeni Odalar
                        </h5>
                        <span class="card-text mt-n2">Lüks</span>
                    </div>
                </div>

                <div class="card card-1 mb-3 border-0" onclick="showImage('spa')" style="cursor: pointer;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <img class="me-2" src="assets/img/icon/6.svg" alt="">SPA & Masaj
                        </h5>
                        <span class="card-text mt-n2">Devamlı Açık</span>
                    </div>
                </div>

                <div class="card card-1 mb-3 border-0" onclick="showImage('pool')" style="cursor: pointer;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <img class="me-2" src="assets/img/icon/7.svg" alt="">Yüzme Havuzu
                        </h5>
                        <span class="card-text mt-n2">Devamlı Açık</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-7">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="carouselImages">
                    <div class="carousel-item active">
                        <img src="assets/img/karinnahotel/4.png" class="d-block w-100" alt="Restaurant Image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-start ">
            <p class="text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Manzaralar</p>

        </div>

        <div class="col-md-6">
            <p class="text-end text-color me-5 mt-5">
                <a href="/gallery" class="text-decoration-none text-color">
                    Detaylı Gör<i class="fas fa-arrow-right ms-2"></i>
                </a>
            </p>

        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <a href="/foresthome">
                    <img src="assets/img/karinnahotel/5.png" class="img-fluid" alt="Resim 3">
                </a>
                <p class="text-center mt-2">Orman Evleri</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <a href="/restaurant">
                    <img src="assets/img/karinnahotel/6.png" class="img-fluid" alt="Resim 1">
                </a>
                <p class="text-center mt-2">Mons Restaurant</p>
            </div>
            <div class="mb-3">
                <a href="/gallery">
                    <img src="assets/img/karinnahotel/7.png" class="img-fluid" alt="Resim 2">
                </a>
                <p class="text-center mt-2">Karinna Hotel-Gece Kulübü</p>
            </div>
        </div>
    </div>

</div>


@include('guest.includes.footer')


</body>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
