<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Gorditas:wght@400;700&family=Manrope:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Karinna Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>

<!-- Header Include -->
@include('guest.includes.header')

<div class="container-fluid footer text-center text-white p-5 mt-4 ">
    <h1 class="p-3"> HAKKIMIZDA</h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="{{ url('/') }}" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">Hakkımızda</span>
    </p>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 mb-4">
            <p class="text-black fs-1 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">"Karların İçinde sıcak bir kaçış"</p>
        </div>
        <div class="col-md-6 mb-4">
            <p class="text-dark fs-6 fw-medium font-family-Manrope  m-0 px-3 py-2">Türkiye’nin en popüler kayak merkezi Uludağ’ın zirvesinde
                yer alan Karinna Hotel Convention Center & SPA seçkin mimarisi ve üstün hizmet anlayışıyla Uludağ keyfini sınırsızca misafirlerine yaşatıyor.</p>
        </div>
    </div>
</div>

<div class="container-sm">
    <div class="swiffy-slider slider-item-reveal slider-nav-round slider-item-ratio slider-item-ratio-32x9" id="slider1">
        <ul class="slider-container" style="width: 100%;">
            <li><img src="{{ asset('assets/img/karinnahotel/9.jpg') }}" loading="lazy" alt="..." class="img-fluid w-100"></li>
            <li><img src="{{ asset('assets/img/karinnahotel/9.jpg') }}" loading="lazy" alt="..." class="img-fluid w-100"></li>
            <li><img src="{{ asset('assets/img/karinnahotel/9.jpg') }}" loading="lazy" alt="..." class="img-fluid w-100"></li>
            <li><img src="{{ asset('assets/img/karinnahotel/9.jpg') }}" loading="lazy" alt="..." class="img-fluid w-100"></li>
        </ul>
        <button type="button" class="slider-nav" aria-label="Go left"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        <div class="slider-indicators slider-indicators-square d-none d-md-flex">
            <button class="" aria-label="Go to slide"></button>
            <button aria-label="Go to slide" class=""></button>
            <button aria-label="Go to slide" class="active"></button>
            <button aria-label="Go to slide" class=""></button>
        </div>
        <div class="slider-indicators slider-indicators-sm slider-indicators-dark slider-indicators-round d-md-none slider-indicators-highlight">
            <button class="" aria-label="Go to slide"></button>
            <button aria-label="Go to slide" class=""></button>
            <button aria-label="Go to slide" class="active"></button>
            <button aria-label="Go to slide" class=""></button>
        </div>
    </div>
</div>

<div class="container my-5">
    <p class="text-center text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Neden bizi seçmelisiniz?</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-12 mb-4">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1">
                <img height="30" src="{{ asset('assets/img/icon/diamond.svg') }}" class="ms-3" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Lüks Olanaklar</h5>
                    <p class="card-text">Otelimiz için güvenilir saygın markaların lüks olanaklarını seçtik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1">
                <img height="30" src="{{ asset('assets/img/icon/point.svg') }}" class="ms-3" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">En iyi konum</h5>
                    <p class="card-text">Karinna'nın konumu mükemmel ve çok merkezi olduğundan taşınmaya uygundur.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12 mb-4">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1">
                <img height="30" src="{{ asset('assets/img/icon/offer.svg') }}" class="ms-3" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Özel Teklifler</h5>
                    <p class="card-text">
                        Müşterilerin para tasarrufu yapmalarına ve özel avantajlar elde etmelerine yardımcı teklifler sunulur.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12 mb-4">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1">
                <img height="30" src="{{ asset('assets/img/icon/mobile-payment.svg') }}" class="ms-3" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Çevrimiçi Ödeme</h5>
                    <p class="card-text">Evde kalın ve çek veya kart kullanmadan çevrimiçi ödeme alın.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12 mb-4">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1">
                <img height="30" src="{{ asset('assets/img/icon/housekeeper.svg') }}" class="ms-3" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Güler yüzlü personel</h5>
                    <p class="card-text">
                        Personelimiz yardımsever olup, müşterilerin sorularını memnuniyetle yanıtlar.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Include -->
@include('guest.includes.footer')

</body>

<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
