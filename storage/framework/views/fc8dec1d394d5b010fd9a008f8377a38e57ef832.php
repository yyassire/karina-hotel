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

    <h1 class="p-3"> REZERVASYON</h1>
</div>


<div class="container my-3 bg-white p-2 shadow">
    <div class="form-group p-4">

        <div class="d-flex flex-wrap justify-content-between">

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Hotel Tipi</h6>
                <select class="form-select border-0 focus-ring-0" id="mySelect" aria-label="Otel 1 Seçimi">
                    <option value="otel1" selected>Karinna Hotel</option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5</option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0">
                <h6 class="mb-0 text-title ms-2">Giriş</h6>
                <select class="form-select border-0" id="mySelect" aria-label="Otel 2 Seçimi">
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
                    <option value="otel1" selected>King Suit Odası</option>
                    <option value="otel2">Otel 2</option>
                    <option value="otel3">Otel 3</option>
                    <option value="otel4">Otel 4</option>
                    <option value="otel5">Otel 5</option>
                </select>
            </div>

            <div class="vr d-none d-sm-block"></div>

            <div class="mb-3 mb-sm-0 mt-2">
                <button class="btn btn-success w-100 w-sm-auto d-flex align-items-center justify-content-center">
                    Bul
                    <i class="fas fa-arrow-up ms-2" style="transform: rotate(45deg);"></i>
                </button>
            </div>
        </div>

        <div class="d-flex justify-content-start mb-3 mt-3">
            <button class="btn btn-outline-success border-0 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#moreFilters" aria-expanded="false" aria-controls="moreFilters">
                Daha Fazla Filtrele
                <i class="fas fa-chevron-down ms-2"></i>
            </button>

            <div>
                <div class="d-flex align-items-center bg-light p-2 border rounded position-relative me-2">
                    <span>2 Yatak </span>
                    <button class="btn btn-sm btn-link position-absolute top-0 end-0 p-0" type="button" aria-label="Close" onclick="this.parentElement.remove()">
                        <i class="fas fa-times text-success"></i>
                    </button>
                </div>
            </div>
            <div>
                <div class="d-flex align-items-center bg-light p-2 border rounded position-relative">
                    <span>2 Banyo</span>

                </div>
            </div>
        </div>




        <div class="collapse mt-4" id="moreFilters">
            <div class="row">
                <div class="mb-3">
                    <label for="priceRange" class="form-label">Fiyat Aralığı</label>
                    <input type="range" class="form-range" id="priceRange" min="0" max="1000" step="10" value="500">
                    <div class="d-flex justify-content-between">
                        <span>0₺</span>
                        <span id="selectedPrice">1000₺</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                    </div>
                </div>
                <script>
                    const priceRange = document.getElementById('priceRange');
                    const selectedPrice = document.getElementById('selectedPrice');
                    const maxPrice = document.getElementById('maxPrice');

                    priceRange.addEventListener('input', function() {
                        selectedPrice.textContent = `${priceRange.value}₺`;
                    });
                </script>

                <div class="col-md-3 col-sm-6 mb-3">
                    <h6 class="mb-2 text-title ms-2">Yatak Tipi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bed" id="bed1">
                        <label class="form-check-label" for="bed1">1 Yatak</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="bed" id="bed2">
                        <label class="form-check-label" for="bed2">2 Yatak</label>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3">
                    <h6 class="mb-2 text-title ms-2">Banyo</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom1">
                        <label class="form-check-label" for="bathroom1">1 Banyo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bathroom2">
                        <label class="form-check-label" for="bathroom2">2 Banyo</label>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3">
                    <h6 class="mb-2 text-title ms-2">Manzara</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="view1">
                        <label class="form-check-label" for="view1">Dağ Manzaralı</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="view2">
                        <label class="form-check-label" for="view2">Otel Avlusu</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="view3">
                        <label class="form-check-label" for="view3">Giriş Manzaralı</label>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-3">
                    <h6 class="mb-2 text-title ms-2">Oda Tipi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="roomType" id="room1" value="standard">
                        <label class="form-check-label" for="room1">Standart</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="roomType" id="room2" value="deluxe">
                        <label class="form-check-label" for="room2">Deluxe</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="roomType" id="room3" value="suite">
                        <label class="form-check-label" for="room3">Suit</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="roomType" id="room4" value="king">
                        <label class="form-check-label" for="room4">Kral</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="http://localhost/karinna-hotel/" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">Rezervasyon</span>
    </p>
</div>



<div class="container my-5">
    <div class="row">
        <div class="col-md-6 d-flex align-items-center justify-content-start ">
            <p class="text-black fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Aramanıza Uygun 4 ODa bulundu..</p>
        </div>

    </div>
</div>





<div class="container">


    <div class="container py-5">
        <div class="row bg-white rounded-4 custom-shadow">
            <div class="col-12 col-md-4 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="../assets/img/reception/2.png" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/reception/2.png" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/reception/2.png" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-12 p-4">
                        <h5 class="card-title text-custom fs-3">Standart Oda
                            <i class=" ms-5 fas fa-star text-warning me-1 fs-5"></i>
                            <i class="fas fa-star text-warning me-1 fs-5"></i>
                            <i class="fas fa-star text-warning me-1 fs-5"></i>
                            <i class="fas fa-star text-warning me-1 fs-5"></i>
                            <i class="fas fa-star text-warning me-1 fs-5"></i></h5>
                        <p class="mt-4 mb-4">
                            <img class="me-3 ms-3" src="../assets/img/icon/adoption-1.svg" alt="">2 Çocuk
                            <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> 2 Yetişkin
                            <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> 45 cm<sup>2</sup>
                        </p>
                        <hr>
                        <p class="text-secondary fs-6 fw-medium font-family-Manrope  m-0 px-3 py-2">Odamız, size rahat bir mekanda konfor yaşatmak, zihninizi ve bedeninizi
                            tazelemenize yardımcı olmak için tasarlanmış ve dekore edilmiştir.</p>

                        <div class="col-md-12">
                            <p class="text-end text-color me-5 mt-5">
                                <a href="/standart-deluxe-oda" class="text-decoration-none text-color">
                                    Detaylı Gör<i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container my-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link btn-success" href="#" aria-label="Previous">
                    <span aria-hidden="true">&lt;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link btn-success" href="#">1</a></li>
            <li class="page-item"><a class="page-link btn-success" href="#">2</a></li>
            <li class="page-item"><a class="page-link btn-success" href="#">3</a></li>
            <li class="page-item"><a class="page-link btn-success" href="#">4</a></li>
            <li class="page-item">
                <a class="page-link btn-success" href="#" aria-label="Next">
                    <span aria-hidden="true">&gt;</span>
                </a>
            </li>
        </ul>
    </nav>
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
<?php /**PATH C:\Projects\html\karina-hotel\resources\views/guest/reservation-list/index.blade.php ENDPATH**/ ?>