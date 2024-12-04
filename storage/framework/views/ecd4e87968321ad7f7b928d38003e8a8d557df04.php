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

<?php echo $__env->make('guest.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Blade include -->

<div class="container-fluid footer text-center text-white p-5 mt-4">
    <h1 class="p-3"> KARİNNA ORMAN EVLERİ </h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">Karinna Orman Evleri</span>
    </p>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4"></h2>
    <div class="row g-4 mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/1.jpg')); ?>" class="card-img-top" alt="Resim 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/2.jpg')); ?>" class="card-img-top" alt="Resim 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/3.jpg')); ?>" class="card-img-top" alt="Resim 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/4.jpg')); ?>" class="card-img-top" alt="Resim 4">
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/5.jpg')); ?>" class="card-img-top" alt="Resim 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/6.jpg')); ?>" class="card-img-top" alt="Resim 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/7.jpg')); ?>" class="card-img-top" alt="Resim 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/8.jpg')); ?>" class="card-img-top" alt="Resim 4">
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/9.jpg')); ?>" class="card-img-top" alt="Resim 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/10.jpg')); ?>" class="card-img-top" alt="Resim 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/11.jpg')); ?>" class="card-img-top" alt="Resim 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/12.jpg')); ?>" class="card-img-top" alt="Resim 4">
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/13.jpg')); ?>" class="card-img-top" alt="Resim 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/14.jpg')); ?>" class="card-img-top" alt="Resim 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/15.jpg')); ?>" class="card-img-top" alt="Resim 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/16.jpg')); ?>" class="card-img-top" alt="Resim 4">
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/17.jpg')); ?>" class="card-img-top" alt="Resim 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/18.jpg')); ?>" class="card-img-top" alt="Resim 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/19.jpg')); ?>" class="card-img-top" alt="Resim 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/forest/20.jpg')); ?>" class="card-img-top" alt="Resim 4">
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('guest.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Blade include -->

</body>

<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/guest/foresthome/index.blade.php ENDPATH**/ ?>