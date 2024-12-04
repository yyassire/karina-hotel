<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Gorditas:wght@400;700&family=Manrope:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Karinna Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


</head>
<body>


<?php echo $__env->make('guest.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid footer text-center text-white p-5 mt-4 ">

    <h1 class="p-3"> HİZMETLERİMİZ</h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="/" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <a href="/about" class="text-decoration-none text-custom">
            Hakkımızda
        </a>
        <span class="text-dark">Hizmetlerimiz</span>
    </p>
</div>





<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/air-conditioner.svg" class="img-fluid d-block mx-auto" alt="Klima">
            <p class="mt-2">Klima</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/television-screen.svg" class="img-fluid d-block mx-auto" alt="Büyük Ekran Tv">
            <p class="mt-2">Büyük Ekran Tv</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/wifi.svg" class="img-fluid d-block mx-auto" alt="Wifi">
            <p class="mt-2">Wifi</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/key.svg" class="img-fluid d-block mx-auto" alt="Güvenlik">
            <p class="mt-2">Güvenlik</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/coffee-maker.svg" class="img-fluid d-block mx-auto" alt="Kahve Makinesi">
            <p class="mt-2">Kahve Makinesi</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/tissue-box.svg" class="img-fluid d-block mx-auto" alt="Mendil Kutusu">
            <p class="mt-2">Mendil Kutusu</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/hairdryer.svg" class="img-fluid d-block mx-auto" alt="Saç Kurutma">
            <p class="mt-2">Saç Kurutma</p>
        </div>

        <div class="col-md-3 col-6 mb-4">
            <img src="../assets/img/icon/parking.svg" class="img-fluid d-block mx-auto" alt="Ücretsiz Park">
            <p class="mt-2">Ücretsiz Park</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/services/1.png" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+2" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+3" class="d-block w-100" alt="Image 3">
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

        <div class="col-md-6 d-flex justify-content-center align-items-center" >
            <div class="text-center">
                <div class="card border-0 mb-3 ">
                    <div class="card-body text-center rounded-2 ">
                        <h5 class="card-title">
                            <img class="me-2" src="../assets/img/icon/4.svg" alt="">RESTAURANT
                        </h5>
                        <hr>
                        <p class="text-secondary fs-6 fw-medium font-family-Manrope  text-start m-0 px-3 py-2">Güne zengin kahvaltımızla başlayın, akşam yemeğinde <br>
                            ise özel lezzetlerimizle unutulmaz bir tatil deneyimi <br>yaşayın.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center" >
            <div class="text-center">
                <div class="card border-0 mb-3 ">
                    <div class="card-body text-center rounded-2 ">
                        <h5 class="card-title mb-0">
                            KRAL DAİRESİ   <img class=" ms-2 me-2" src="../assets/img/icon/5.svg" alt="">
                        </h5>
                        <hr>
                        <p class="text-end text-secondary fs-6 fw-medium font-family-Manrope  m-0 px-3 py-2">Şıklık ve konforun buluştuğu Kral Dairesi, lüks <br>
                            detaylarıyla eşsiz bir konaklama deneyimi sunuyor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/services/2.png" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+2" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+3" class="d-block w-100" alt="Image 3">
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
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/services/3.png" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+2" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+3" class="d-block w-100" alt="Image 3">
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

        <div class="col-md-6 d-flex justify-content-center align-items-center" >
            <div class="text-center">
                <div class="card border-0 mb-3 ">
                    <div class="card-body text-center rounded-2 ">
                        <h5 class="card-title ">
                            <img class="me-2" src="../assets/img/icon/6.svg" alt="">SPA & Masaj
                        </h5>
                        <hr>
                        <p class="text-secondary fs-6 fw-medium font-family-Manrope  m-0 px-3 py-2">Modern tasarımlı yüzme havuzumuzda serinleyin, <br>
                            keyifli vakit geçirin ve tatilinizi dinlendirici bir <br> deneyimle unutulmaz kılın.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center" >
            <div class="text-center">
                <div class="card border-0 mb-3 ">
                    <div class="card-body text-center rounded-2 ">
                        <h5 class="card-title">
                            Yüzme Havuzu  <img class="ms-2 me-2" src="../assets/img/icon/7.svg" alt="">
                        </h5>
                        <hr>
                        <p class="text-end text-secondary fs-6 fw-medium font-family-Manrope  m-0 px-3 py-2">Modern tasarımlı yüzme havuzumuzda serinleyin,<br>
                            keyifli vakit geçirin ve tatilinizi dinlendirici bir <br>deneyimle unutulmaz kılın.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/services/4.png" class="d-block w-100" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+2" class="d-block w-100" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/600x400?text=Image+3" class="d-block w-100" alt="Image 3">
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



<?php echo $__env->make('guest.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>

<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
<?php /**PATH C:\Projects\html\karina-hotel\resources\views/guest/services/index.blade.php ENDPATH**/ ?>