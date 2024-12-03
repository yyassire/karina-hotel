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


@include('guest.includes.header')

<div class="container-fluid footer text-center text-white p-5 mt-4 ">

    <h1 class="p-3"> ÖDEME EKRANI</h1>
  </div>


<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="/" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <a href="/reservation" class="text-decoration-none text-custom">
            Rezervasyon
        </a>
        >
        <a href="/reservation-list" class="text-decoration-none text-custom">
            Liste
        </a>
        >
        <a href="/karinnahotel" class="text-decoration-none text-custom">
            Karinna Hotel
        </a>
        >
        <a href="/standart-deluxe-oda" class="text-decoration-none text-custom">
            Standart Oda
        </a>
        >
        <a href="/control-screen" class="text-decoration-none text-custom">
            Kontrol Ekranı
        </a>
        >
        <span class="text-dark">Ödeme  Ekranı</span>
    </p>
  </div>



<div class="container footer text-white p-3 my-4">
    <img class="me-3" src="../assets/img/icon/Ticket.svg" alt="">Kuponunuzu Uyguladınız mı? <a href="" class="ms-5 text-white">Kuponu uygula</a>

</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <form>
                <div class="mb-3">
                    <p class="m-0 py-2">
                        <span class="text-black fs-6 fw-medium font-family-Barlow">Ad</span>
                        <span class="text-danger fs-6 fw-medium font-family-Barlow"> *</span>
                    </p>
                    <div class="d-flex">
                        <input type="text" class="form-control me-2" id="firstName" placeholder="Ad">
                        <input type="text" class="form-control" id="lastName" placeholder="Soyad">
                    </div>
                </div>

                <div class="mb-3">
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 py-2">Şirket Adı(Opsiyonel)</p>
                    <input type="text" class="form-control" id="company" placeholder="Şirket Adı">
                </div>

                <div class="mb-3">
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 py-2">Ülke</p>
                    <input type="text" class="form-control" id="country" placeholder="Ülke">
                </div>

                <div class="mb-3">
                    <p class="m-0 py-2">
                        <span class="text-black fs-6 fw-medium font-family-Barlow">Sokak Adresi</span>
                        <span class="text-danger fs-6 fw-medium font-family-Barlow">*</span>
                    </p>
                    <input type="text" class="form-control" id="streetAddress" placeholder="Ev numarası ve sokak adı">
                    <input type="text" class="form-control mt-2" id="streetAddress2" placeholder="Ev numarası ve sokak adı">
                </div>

                <div class="mb-3">
                    <p class="m-0 py-2">
                        <span class="text-black fs-6 fw-medium font-family-Barlow">İlçe/Semt</span>
                        <span class="text-danger fs-6 fw-medium font-family-Barlow">*</span>
                    </p>
                    <div class="input-group">
                        <select class="form-control" id="district">
                            <option value="" selected disabled></option>
                            <option value="ilce1"> 1</option>
                            <option value="ilce2"> 2</option>
                            <option value="ilce3"> 3</option>
                            <option value="ilce4"> 4</option>
                        </select>
                        <span class="input-group-text bg-white">
                            <i class="fas fa-arrow-down"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-3">
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 py-2">Şehir</p>
                    <div class="input-group">
                        <select class="form-control" id="district">
                            <option value="" selected disabled></option>
                            <option value="ilce1"> 1</option>
                            <option value="ilce2"> 2</option>
                            <option value="ilce3"> 3</option>
                            <option value="ilce4"> 4</option>
                        </select>
                        <span class="input-group-text bg-white">
                            <i class="fas fa-arrow-down"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-3">
                    <p class="m-0 py-2">
                        <span class="text-black fs-6 fw-medium font-family-Barlow">Posta Kodu</span>
                        <span class="text-danger fs-6 fw-medium font-family-Barlow">*</span>
                    </p>
                    <input type="text" class="form-control" id="postalCode" placeholder="Posta Kodu">
                </div>

                <div class="mb-3">
                    <p class="m-0 py-2">
                        <span class="text-black fs-6 fw-medium font-family-Barlow">Telefon</span>
                        <span class="text-danger fs-6 fw-medium font-family-Barlow">*</span>
                    </p>
                    <input type="text" class="form-control" id="phone" placeholder="Telefon">
                </div>

                <div class="mb-3">
                    <p class="m-0 py-2">
                        <span class="text-black fs-6 fw-medium font-family-Barlow">Mail Adresi</span>
                        <span class="text-danger fs-6 fw-medium font-family-Barlow">*</span>
                    </p>
                    <input type="email" class="form-control" id="email" placeholder="Mail Adresi">
                </div>

                <div class="mb-3 mt-5">
                    <p class="text-black fs-2 fw-medium font-family-Barlow m-0 py-2">Ek Bilgiler</p>
                    <p class="text-black fs-6 fw-medium font-family-Barlow m-0 py-2">Ödeme notları (isteğe bağlı)</p>
                    <textarea class="form-control" id="additionalInfo" rows="4" placeholder="Lorem"></textarea>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center kup">
                    <h5 class="card-title mb-0">Rezervasyon Bilgileri</h5>
                    <h5 class="card-title mb-0 d-none d-md-block">Ana Toplam</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <div class="ms-3 mt-3">
                            <p><strong>Karinna Hotel</strong> <br>İkinci Gelişim Bölgesi Uludağ – Bursa</p>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mb-0">Oda:</p><strong>Standart Oda</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Tarih:</p><strong>22/7/2021 - 23/7/2021</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Yetişkin:</p><strong>2</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Çocuk:</p><strong>2</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Oda Sayısı:</p><strong>2</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Ekstra:</p><strong>Sabah Kahvaltısı</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mb-0"></p><strong>Gym ve Spa</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mb-0"></p><strong>Akşam Yemeği</strong>
                            <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Süre:</p><strong>5 Gün</strong>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 text-md-center ms-2 ms-md-0">
                        <h5 class="card-title mb-0 d-block d-md-none kup py-2 mt-3">Ana Toplam</h5>
                        <p class="mt-4"><strong>500 TL</strong></p>
                        <p class="text-secondary fs-6 fw-semibold font-family-Barlow mt-4 mb-0">Ekstra :</p><strong>2.500TL</strong>
                    </div>
                </div>

                <div class="ms-2 mt-4">
                    <div class="row d-flex">
                        <div class="col-6 col-md-6 mb-3 py-4">
                            <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Ana Toplam</p>
                            <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Toplam</p>
                            <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Vergi</p>
                            <p class="text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Ödenecek Tutar</p>
                        </div>

                        <div class="col-6 col-md-6 mb-3 py-4">
                            <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                            <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                            <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                            <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">52.500TL</p>
                            <span class="fs-6 text-secondary">2.625TL Vergi %20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="accordion" id="paymentAccordion">
                    <div class="accordion-item ">
                        <h2 class="accordion-header bg-secondary" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <input type="radio" name="paymentMethod" id="havale" class="form-check-input me-2"> Havale
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <input type="radio" name="paymentMethod" id="garanti" class="form-check-input me-2"> Garanti Bankası ile ödeme
                                <div class="ms-auto d-flex">
                                    <img src="../assets/img/icon/k-1.png" alt="Garanti" class="ms-2">
                                    <img src="../assets/img/icon/k-2.png" alt="Garanti" class="ms-2">
                                    <img src="../assets/img/icon/k-3.png" alt="Garanti" class="ms-2">
                                    <img src="../assets/img/icon/k-4.png" alt="Garanti" class="ms-2">
                                </div>
                            </button>

                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <input type="radio" name="paymentMethod" id="isBank" class="form-check-input me-2"> İş Bankası ile ödeme
                                <div class="ms-auto d-flex ">
                                    <img src="../assets/img/icon/k-1.png" alt="Garanti" class="ms-2">
                                    <img src="../assets/img/icon/k-2.png" alt="Garanti" class="ms-2">
                                    <img src="../assets/img/icon/k-3.png" alt="Garanti" class="ms-2">
                                    <img src="../assets/img/icon/k-4.png" alt="Garanti" class="ms-2">
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" py-5">
                <p class=" m-0 mb-3 "><span class="text-secondary fs-6 fw-medium font-family-Manrope">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </span><span class="text-success fs-6 fw-medium font-family-Manrope text-decoration-underline">Güvenlik Politikası</span></p>
                <input type="checkbox" id="terms" class="form-check-input"> <label for="terms">Şartları kabul ediyorum</label>
                <a href="/payment-screen" class="btn btn-success footer w-100 mt-3">
                    Ödemeyi Tamamla
                </a>
            </div>
        </div>
    </div>
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
