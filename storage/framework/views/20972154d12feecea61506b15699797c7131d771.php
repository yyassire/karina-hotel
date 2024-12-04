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

<?php echo $__env->make('guest.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Header componentini dahil et -->

<div class="container-fluid footer text-center text-white p-5 mt-4 ">
    <h1 class="p-3"> İLETİŞİM</h1>
</div>

<div class="container">
    <p class="text-title ms-4 my-4">
        <a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-custom">
            <i class="fa fa-home me-2 text-custom"></i>Anasayfa
        </a>
        >
        <span class="text-dark">İletişim</span>
    </p>
</div>

<div class="container ">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="card align-items-start justify-content-start border-0 shadow-sm hover:shadow-lg hover:translate-y-1 footer text-white mt-3">
                <div class="card-body">
                    <p class="text-white fs-2 fw-semibold font-family-Barlow text-uppercase  m-0 px-3 py-2">Karİnna Hotel</p>
                    <p class="text-white fs-6 fw-medium font-family-Barlow  m-0 px-3 py-2 ">İletişim Bilgileri</p>
                    <div class="m-0 px-3 py-2">
                        <p><img class="me-2" src="<?php echo e(asset('assets/img/icon/Message.svg')); ?>" alt="">info@tkarinnahotel.com </p>
                        <p><img class="me-2" src="<?php echo e(asset('assets/img/icon/Calling.svg')); ?>" alt="">+90 549 790 47 18 </p>
                        <p><img class="me-2" src="<?php echo e(asset('assets/img/icon/Home.svg')); ?>" alt="">İkinci Gelişim Bölgesi Uludağ – Bursa</p>
                    </div>

                    <div class="ms-5">
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

        <div class="col-md-8 mb-3">
            <p class="text-black fs-3 fw-normal font-family-Manrope m-0 px-3 py-2 fw-bold ">Mesajınızı bırakın</p>
            <p class="text-secondary fs-6 fw-medium font-family-Barlow m-0 px-3 py-2">Bu formu kullanarak bizimle iletişime geçin, size en kısa sürede ulaşacağız.</p>
            <div class="p-4 rounded">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="firstName" placeholder="İsim" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="lastName" placeholder="Soyisim" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="tel" class="form-control" id="phone" placeholder="Telefon Numarası" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Mail Adresi" required>
                    </div>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" id="message" rows="4" placeholder="Mesajınız" required></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success footer border-0 w-100 rounded-0">Gönder</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12 mb-3">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps?q=Karinna%20Hotel%20Uluda%C4%9F%20Kirazl%C4%B1%20Uluda%C4%9F%202.%20B%C3%B6lge%2C%2016190%20Osmangazi%2FBursa%2C%20Türkiye&output=embed" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>

<?php echo $__env->make('guest.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- Footer componentini dahil et -->

<!-- Scripts -->
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/guest/contact/index.blade.php ENDPATH**/ ?>