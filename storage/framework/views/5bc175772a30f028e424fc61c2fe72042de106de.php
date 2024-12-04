<header class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-start align-items-center d-md-none">
                <img src="<?php echo e(asset('assets/img/Logo.svg')); ?>" alt="Logo" class="img-fluid">
            </div>

            <div class="d-flex justify-content-end align-items-center">
                <button class="btn btn-outline-dark d-md-none border-0 text-white footer rounded-pill px-4 py-3 fs-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <div class="row justify-content-center align-items-center d-none d-md-flex">
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <nav class="d-flex justify-content-between w-100 fs-5">
                    <a href="<?php echo e(url('/')); ?>" class="fw-bold me-4 text-decoration-none text-color">ANASAYFA</a>
                    <a href="<?php echo e(url('about')); ?>" class="fw-bold me-4 text-decoration-none text-color">HAKKIMIZDA</a>
                    <a href="<?php echo e(url('reservation')); ?>" class="fw-bold me-4 text-decoration-none text-color">REZERVASYON</a>
                </nav>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <a href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('assets/img/Logo.svg')); ?>" alt="Logo" class="img-fluid">
                </a>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                <nav class="d-flex justify-content-between w-100 fs-5">
                    <a href="<?php echo e(url('foresthome')); ?>" class="fw-bold me-3 text-decoration-none text-color">ORMAN EVLERİ</a>
                    <a href="<?php echo e(url('gallery')); ?>" class="fw-bold me-3 text-decoration-none text-color">GALERİ</a>
                    <a href="<?php echo e(url('contact')); ?>" class="fw-bold me-3 text-decoration-none text-color">İLETİŞİM</a>

                    <div class="d-none d-md-flex">
                        <button class="btn btn-success footer rounded-circle fs-4 left-menu" data-bs-toggle="modal" data-bs-target="#overlayModal">
                            &#9776;
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Yan Menu (Overlay Modal) -->
    <div class="modal fade" id="overlayModal" tabindex="-1" role="dialog" aria-labelledby="overlayModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content text-white position-relative" style="background-color: #01654C; color: white;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="z-index: 0; opacity: 0.3;"></div>
                <div class="modal-header border-0">
                    <button type="button" class="btn-close position-relative" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="container">
                    <div class="row justify-content-center align-items-center d-none d-md-flex">
                        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                            <nav class="d-flex justify-content-between w-100 fs-5">
                                <a href="<?php echo e(url('/')); ?>" class="fw-bold me-3 text-decoration-none text-white">ANASAYFA</a>
                                <a href="<?php echo e(url('about')); ?>" class="fw-bold me-3 text-decoration-none text-white">HAKKIMIZDA</a>
                                <a href="<?php echo e(url('reservation')); ?>" class="fw-bold me-3 text-decoration-none text-white">REZERVASYON</a>
                            </nav>
                        </div>
                        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                            <img src="<?php echo e(asset('assets/img/Logo-2.svg')); ?>" alt="Logo" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                            <nav class="d-flex justify-content-between w-100 fs-5">
                                <a href="<?php echo e(url('foresthome')); ?>" class="fw-bold me-3 text-decoration-none text-white">ORMAN EVLERİ</a>
                                <a href="<?php echo e(url('gallery')); ?>" class="fw-bold me-3 text-decoration-none text-white">GALERİ</a>
                                <a href="<?php echo e(url('contact')); ?>" class="fw-bold me-3 text-decoration-none text-white">İLETİŞİM</a>
                            </nav>
                        </div>
                    </div>

                    <br><br><br><br>

                    <div class="modal-body d-flex mt-5">
                        <div class="col-3 d-flex justify-content-center">
                            <br>
                            <ul class="list-unstyled fs-5">
                                <h5 class="text-white fs-3">Site Haritası</h5>
                                <li><a href="<?php echo e(url('/')); ?>" class="text-white text-decoration-none">Anasayfa</a></li>
                                <li><a href="<?php echo e(url('about')); ?>" class="text-white text-decoration-none">Hakkımızda</a></li>
                                <li><a href="<?php echo e(url('reservation')); ?>" class="text-white text-decoration-none">Rezervasyon</a></li>
                                <li><a href="<?php echo e(url('foresthome')); ?>" class="text-white text-decoration-none">Orman Evleri</a></li>
                                <li><a href="<?php echo e(url('gallery')); ?>" class="text-white text-decoration-none">Galeri</a></li>
                                <li><a href="<?php echo e(url('contact')); ?>" class="text-white text-decoration-none">İletişim</a></li>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column align-items-start">
                            <ul class="list-unstyled fs-5">
                                <h5 class="text-white fs-3">Aktiviteler</h5>
                                <li><a href="<?php echo e(url('restaurant')); ?>" class="text-white text-decoration-none">Disko</a></li>
                                <li><a href="<?php echo e(url('restaurant')); ?>" class="text-white text-decoration-none">Gym Merkezi</a></li>
                                <li><a href="<?php echo e(url('restaurant')); ?>" class="text-white text-decoration-none">Kayak Merkezi</a></li>
                                <li><a href="<?php echo e(url('restaurant')); ?>" class="text-white text-decoration-none">Yüzme Havuzu</a></li>
                                <li><a href="<?php echo e(url('restaurant')); ?>" class="text-white text-decoration-none">Caffe & Restaurant</a></li>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column align-items-start">
                            <ul class="list-unstyled fs-5">
                                <h5 class="text-white fs-3">Karinna Hotel</h5>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">KING SUITE ODA</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">SENIOR SUIT ODA</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">JUNIOR SUIT ODA</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">ENGELLİ ODASI ODA</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">STANDART ODA</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">DELUXE STANDART ODA</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">DELUXE FAMILY SUITE ODA</a></li>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column align-items-start">
                            <ul class="list-unstyled fs-5">
                                <h5 class="text-white fs-3">Karinna Orman Evi</h5>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">KING ORMAN EVLERİ</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">SENIOR ORMAN EVLERİ</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">JUNIOR ORMAN EVLERİ</a></li>
                                <li><a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white text-decoration-none">ENGELLİ ORMAN EVLERİ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/guest/includes/header.blade.php ENDPATH**/ ?>