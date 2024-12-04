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
    <h1 class="p-3"> GALERİ</h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">Galeri</span>
    </p>
</div>

<div class="container">
    <div class="d-flex flex-wrap justify-content-center mt-4">
        <span class="fs-4 text-dark mx-3 my-2" onclick="showCategory('all')" style="cursor: pointer;">Genel</span>
        <span class="fs-4 text-dark mx-3 my-2" onclick="showCategory('lobby')" style="cursor: pointer;">Otel Lobi</span>
        <span class="fs-4 text-dark mx-3 my-2" onclick="showCategory('rooms')" style="cursor: pointer;">Odalar</span>
        <span class="fs-4 text-dark mx-3 my-2" onclick="showCategory('forest')" style="cursor: pointer;">Orman Evleri</span>
        <span class="fs-4 text-dark mx-3 my-2" onclick="showCategory('spa')" style="cursor: pointer;">Spa&Massage</span>
        <span class="fs-4 text-dark mx-3 my-2" onclick="showCategory('pool')" style="cursor: pointer;">Havuz</span>
    </div>

    <div class="row mt-4 gallery-container">
        <div class="col-12 col-md-6 col-lg-4 gallery-item all">
            <img src="<?php echo e(asset('assets/img/gallery/1.png')); ?>" alt="Genel" class="img-fluid mb-4">
        </div>
        <div class="col-12 col-md-6 col-lg-4 gallery-item all">
            <img src="<?php echo e(asset('assets/img/gallery/2.png')); ?>" alt="Genel" class="img-fluid mb-4">
        </div>
        <div class="col-12 col-md-6 col-lg-4 gallery-item all">
            <img src="<?php echo e(asset('assets/img/gallery/3.png')); ?>" alt="Genel" class="img-fluid mb-4">
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item lobby">
            <img src="<?php echo e(asset('assets/img/gallery/4.png')); ?>" alt="Otel Lobi" class="img-fluid mb-4">
        </div>
        <div class="col-12 col-md-6 col-lg-4 gallery-item lobby">
            <img src="<?php echo e(asset('assets/img/gallery/2.png')); ?>" alt="Otel Lobi" class="img-fluid mb-4">
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item rooms">
            <img src="<?php echo e(asset('assets/img/gallery/6.png')); ?>" alt="Odalar" class="img-fluid mb-4">
        </div>
        <div class="col-12 col-md-6 col-lg-4 gallery-item rooms">
            <img src="<?php echo e(asset('assets/img/gallery/7.png')); ?>" alt="Odalar" class="img-fluid mb-4">
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item forest">
            <img src="<?php echo e(asset('assets/img/gallery/1.png')); ?>" alt="Orman Evleri" class="img-fluid mb-4">
        </div>
        <div class="col-12 col-md-6 col-lg-4 gallery-item forest">
            <img src="<?php echo e(asset('assets/img/gallery/2.png')); ?>" alt="Orman Evleri" class="img-fluid mb-4">
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item spa">
            <img src="<?php echo e(asset('assets/img/gallery/4.png')); ?>" alt="Spa&Massage" class="img-fluid mb-4">
        </div>
        <div class="col-12 col-md-6 col-lg-4 gallery-item spa">
            <img src="<?php echo e(asset('assets/img/gallery/2.png')); ?>" alt="Spa&Massage" class="img-fluid mb-4">
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item pool">
            <img src="<?php echo e(asset('assets/img/gallery/6.png')); ?>" alt="Havuz" class="img-fluid mb-4">
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
<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/guest/gallery/index.blade.php ENDPATH**/ ?>