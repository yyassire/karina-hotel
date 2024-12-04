<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Gorditas:wght@400;700&family=Manrope:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Karinna Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


</head>
<body>


@include('guest.includes.header')

<div class="container-fluid footer text-center text-white p-5 mt-4 ">

    <h1 class="p-3"> KARİNNA HOTEL</h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="/" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">Karinna Hotel</span>
    </p>
</div>


<div class="container-fluid">
    <div class="row ">
        <div class="col-md-5 d-flex justify-content-center align-items-center ">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1  mt-3">
                <div class="card-body">
                    <p class="  fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Karİnna Hotel</p>
                    <p class="  fs-6 fw-medium font-family-Barlow  m-0 px-3 py-2 ">İletişim Bilgileri</p>
                    <div class="m-0 px-3 py-2 mt-5">
                        <p><img class="me-2  " src="../assets/img/icon/Message-2.svg" alt="">info@tkarinnahotel.com </p>
                        <p><img class="me-2" src="../assets/img/icon/Call.svg" alt="">+90 549 790 47 18 </p>
                        <p><img class="me-2" src="../assets/img/icon/Home-2.svg" alt="">İkinci Gelişim Bölgesi Uludağ – Bursa</p>
                    </div>

                    <div class=" ms-5 mt-5 ">
                        <p>
                            <i class="fab fa-facebook me-5"></i>
                            <i class="fab fa-twitter me-5"></i>
                            <i class="fab fa-instagram me-5"></i>
                            <i class="fab fa-youtube me-5"></i>


                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-7 p-0">
            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/karinnahotel/3.png" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/karinnahotel/4.png" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/karinnahotel/6.png" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container my-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-start ">
            <p class="text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Tercİh Edilen ODaLar</p>

        </div>

        <div class="col-md-6">
            <p class="text-end text-color me-5 mt-5">
                <a href="/standart-deluxe-oda" class="text-decoration-none text-color">
                    Detaylı Gör<i class="fas fa-arrow-right ms-2"></i>
                </a>
            </p>

        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0">
                <img src="../assets/img/rooms/6.png" class="card-img-top" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda" class="text-decoration-none text-dark">
                            Standart Oda
                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
                        <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0">
                <img src="../assets/img/rooms/6.png" class="card-img-top" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda" class="text-decoration-none text-dark">
                            Standart Oda
                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
                        <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0">
                <img src="../assets/img/rooms/6.png" class="card-img-top" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda" class="text-decoration-none text-dark">
                            Standart Oda
                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
                        <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0">
                <img src="../assets/img/rooms/6.png" class="card-img-top" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda" class="text-decoration-none text-dark">
                            Standart Oda
                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
                        <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0">
                <img src="../assets/img/rooms/6.png" class="card-img-top" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda" class="text-decoration-none text-dark">
                            Standart Oda
                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
                        <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0">
                <img src="../assets/img/rooms/6.png" class="card-img-top" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda" class="text-decoration-none text-dark">
                            Standart Oda
                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
                        <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                    </p>
                </div>
            </div>
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
                <a href="#" class="text-decoration-none text-color mt-5">
                    Detaylı Gör<i class="fas fa-arrow-right ms-2"></i>
                </a>
            </p>

        </div>
    </div>
</div>


<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-12 col-md-4  d-flex align-items-center justify-content-center" >
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
                        <img src="../assets/img/karinnahotel/4.png" class="d-block w-100" alt="Restaurant Image">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
