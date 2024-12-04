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
@include('guest.includes.header') <!-- Blade include -->

<div class="container-fluid footer text-center text-white p-5 mt-4 ">
    <h1 class="p-3"> KONTROL EKRANI</h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="{{ url('/') }}" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <a href="{{ url('reservation') }}" class="text-decoration-none text-custom">
            >Rezervasyon
        </a>
        >
        <a href="{{ url('reservation-list') }}" class="text-decoration-none text-custom">
            Liste
        </a>
        >
        <a href="{{ url('karinnahotel') }}" class="text-decoration-none text-custom">
            Karinna Hotel
        </a>
        >
        <a href="{{ url('standart-deluxe-oda') }}" class="text-decoration-none text-custom">
            Standart Oda
        </a>
        >
        <span class="text-dark">Kontrol Ekranı</span>
    </p>
</div>

<div class="container my-5">
    <form>
        <div class="card">
            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                <h5 class="card-title mb-0">Rezervasyon Bilgileri</h5>
                <h5 class="card-title text-start mb-0">Oda</h5>
                <h5 class="card-title mb-0">Fiyat</h5>
                <h5 class="card-title mb-0">Süre</h5>
                <h5 class="card-title mb-0">Ara Toplam</h5>
            </div>
            <div class="card-body" id="reservationCard">
                <div class="row mb-3">
                    <div class="col-12 col-md-3">
                        <button type="button" class="btn-close me-3" aria-label="Close" onclick="closeCard()"></button>
                        <img src="{{ asset('assets/img/karinnahotel/8.png') }}" class="img-fluid" alt="Oda Resmi">
                    </div>
                    <div class="col-12 col-md-3">
                        <p><strong>Oda:</strong> Standart Oda</p>
                        <p><strong>Günler:</strong> 22/7/2021 - 23/7/2021</p>
                        <p><strong>Yetişkin:</strong> 2</p>
                        <p><strong>Çocuk:</strong> 1</p>
                        <p><strong>Oda Sayısı:</strong> 1</p>
                        <p><strong>Ekstra:</strong> Oda Kahvaltı</p>
                    </div>
                    <div class="col-6 col-md-2 text-center d-none d-md-block">
                        <p><strong>10.500 TL/gün</strong></p>
                    </div>

                    <div class="col-6 col-md-2 text-center d-none d-md-block">
                        <p><strong>5 gün</strong></p>
                    </div>

                    <div class="col-6 col-md-2 text-center d-none d-md-block">
                        <p><strong>500 TL</strong></p>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 col-md-2 text-start d-block d-md-none">
                            <p><strong>10.500 TL/gün</strong></p>
                        </div>

                        <div class="col-12 col-md-2 text-start d-block d-md-none">
                            <p><strong>5 gün</strong></p>
                        </div>

                        <div class="col-12 col-md-2 text-start d-block d-md-none">
                            <p><strong>500 TL</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container my-5 bg-light ">
    <form>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="couponCode" class="form-label mt-3">Kupon Kodu</label>
                <input type="text" class="form-control" id="couponCode" placeholder="Kupon kodunu girin">
            </div>

            <div class="col-md-7 mb-3 d-flex align-items-end">
                <button type="button" class="btn btn-secondary ">Kuponu Uygula</button>
            </div>
            <div class="col-md-2 mb-3 d-flex align-items-end">
                <button type="button" class="btn btn-secondary ">Fiyatı Güncelle</button>
            </div>
        </div>
    </form>
</div>

<div class="container mt-5">
    <div class="row">

        <div class="col-md-7 mb-3">

        </div>

        <div class="col-12 col-md-5 mb-3 vh-100">
            <div class="row">
                <h4 class="mb-3">Toplam Hesaplama</h4>

                <div class="col-6 mb-3 kup py-4">
                    <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Ana Toplam</p>
                    <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Toplam</p>
                    <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Vergi</p>
                    <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Ödenecek Tutar</p>
                </div>

                <div class="col-6 mb-3 py-4">
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                </div>
            </div>

            <a href="payment-screen" class="btn btn-success footer w-100">
                Ödeme Ekranı <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>

    </div>
</div>

@include('guest.includes.footer') <!-- Blade include -->

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{ asset('assets/js/flatpickr.js') }}"></script>
</body>
</html>
