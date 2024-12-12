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
    <link
        href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Gorditas:wght@400;700&family=Manrope:wght@200..800&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <title>Karinna Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


</head>
<body>


<?php echo $__env->make('guest.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid footer text-center text-white p-5 mt-4 ">

    <h1 class="p-3"> STANDART ODA</h1>
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
            <button class="btn btn-outline-success border-0 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#moreFilters" aria-expanded="false" aria-controls="moreFilters">
                Daha Fazla Filtrele
                <i class="fas fa-chevron-down ms-2"></i>
            </button>

            <div>
                <div class="d-flex align-items-center bg-light p-2 border rounded position-relative me-2">
                    <span>2 Yatak </span>
                    <button class="btn btn-sm btn-link position-absolute top-0 end-0 p-0" type="button"
                            aria-label="Close" onclick="this.parentElement.remove()">
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

                    priceRange.addEventListener('input', function () {
                        selectedPrice.textContent = ${priceRange.value}₺;
                    });
                </script>

                <div class="col-md-3 col-sm-6 mb-3">
                    <h6 class="mb-2 text-title ms-2">Yatak Tipi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bed" id="bed1">
                        <label class="form-check-label" for="bed1">1 Yatak</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="bed" id="bed2">
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
        <a href="http://localhost/karinna-hotel/reservation/" class="text-decoration-none text-custom">
            Rezervasyon
        </a>
        >
        <a href="reservation-list.html" class="text-decoration-none text-custom">
            Liste
        </a>
        >
        <a href="http://localhost/karinna-hotel/karinnahotel/" class="text-decoration-none text-custom">
            Karinna Hotel
        </a>
        >
        <span class="text-dark">Standart Oda



        </span>
    </p>
</div>

<?php
    $decoded_images = json_decode($room->images, true); 
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-7">
            <div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel">
                <!-- Featured Image -->
                <img src="<?php echo e(asset($room->featured_image)); ?>" class="img-fluid rounded-3" style="width: 100%;height: 520px;" alt="...">
                

                <p class="mt-5 mb-4 text-center fs-5 text-custom">
                    <img height="40" class="me-3 ms-5" src="../assets/img/icon/manager-1.svg" alt=""> <?php echo e($room->capacity); ?>

                    Kapasite
                    <img height="40" class="me-3 ms-5" src="../assets/img/icon/select-1.svg" alt=""> <?php echo e($room->size); ?>

                    cm<sup>2</sup>
                </p>
                <p class="mt-5 mb-4 text-center fs-5 text-custom">
                    
                <?php $__currentLoopData = $room->amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenitie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                    
                        

                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
                
                <p class="text-black fs-2 fw-semibold font-family-Barlow m-0 px-3 py-2">Genel Bakış</p>
                <p class="text-secondary fs-6 fw-medium font-family-Manrope m-0 px-3 py-2"><?php echo e($room->room_description); ?></p>
                <hr>
                <div class="container mt-5">
                    <div class="row">
                        <?php $__currentLoopData = $decoded_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $decoded_image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 mb-3 rounded-2">
                            <img src=" <?php echo e(asset($decoded_image)); ?>" alt="Fotoğraf 1" class="img-fluid">
                        </div>
     
                         
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <p class="fs-6 text-custom mt-3"><?php echo e($room->price_per_night); ?>TL/Gecelik</p>
            <p class="ms-3 text-black fs-1 fw-semibold font-family-Barlow text-uppercase m-0 px-3 py-2"><?php echo e($room->room_type); ?></p>
            <p class="text-secondary fs-6 fw-medium font-family-Manrope m-0 px-3 py-2"><?php echo e($room->room_summary); ?></p>
            <p class="text-black fs-6 fw-medium font-family-Barlow m-0 px-3 py-2 mt-4">Tutulacak Oda Adedi</p>
            <div class="d-flex mt-4 mb-5">
                <div class="btn-group me-4">
                    <select class="btn btn-outline-success dropdown-toggle" id="mySelect">
                        <option value="1" selected>Seçenekler</option>
                        <option value="2"> 1</option>
                        <option value="3"> 2</option>
                        <option value="4"> 3</option>
                        <option value="5"> 4</option>
                    </select>
                </div>
                <a href="#rezervasyon" class="btn btn-success footer">Rezervasyon Yap</a>
            </div>
            <br><br><br>

            <!-- Reservation Form -->
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header footer text-white text-center">
                        <h4>Rezervasyon Yap</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="checkin"
                                           class="form-label text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Giriş </label>
                                    <input type="date" class="form-control" id="checkin" name="checkin" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="checkout"
                                           class="form-label text-black fs-6 fw-semibold font-family-Barlow m-0 px-3 py-2">Çıkış </label>
                                    <input type="date" class="form-control" id="checkout" name="checkout" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="roomCount" class="form-label">Oda </label>
                                    <select class="form-control" id="roomCount" name="roomCount">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="bathroomCount" class="form-label">Banyo Sayısı</label>
                                    <select class="form-control" id="bathroomCount" name="bathroomCount">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <p class="text-black fs-6 fw-bold font-family-Barlow text-uppercase m-0 px-3 py-2">
                                    Ekstra ücret</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="roomService" class="form-label">Oda Servisi</label>
                                    <select class="form-control" id="roomService" name="roomService">
                                        <option value="yes">Evet</option>
                                        <option value="no">Hayır</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="adults" class="form-label">Yetişkin Sayısı</label>
                                    <select class="form-control" id="adults" name="adults">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="children" class="form-label">Çocuk Sayısı</label>
                                    <select class="form-control" id="children" name="children">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="beds" class="form-label">Yatak Sayısı</label>
                                    <select class="form-control" id="beds" name="beds">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Rezervasyon Yap</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-12 mb-4">
            <div class="card border-0 shadow">
                <img src="<?php echo e(asset($c_room->featured_image)); ?>" class="card-img-top img-fluid" style="height: 260px;" alt="Card image 1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/standart-deluxe-oda/<?php echo e($c_room->id); ?>" class="text-decoration-none text-dark">
                           <?php echo e($c_room->name); ?>

                        </a>
                        <i class="ms-5 fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </h5>
                    <p class="mt-2">
           
                        <img class="me-3 ms-3" src="../assets/img/icon/manager-1.svg" alt=""> <?php echo e($c_room->capacity); ?>

                        Kapasite
                        <img class="me-3 ms-3" src="../assets/img/icon/select-1.svg" alt=""> <?php echo e($c_room->size); ?>

                        cm<sup>2</sup>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

</html><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/guest/standart-deluxe-oda/index.blade.php ENDPATH**/ ?>