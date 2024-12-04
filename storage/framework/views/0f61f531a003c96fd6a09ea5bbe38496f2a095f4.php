<footer class="bg-dark text-white pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center text-md-start">
                <img src="<?php echo e(asset('assets/img/footer-logo2.svg')); ?>" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                <p><img class="me-2" src="<?php echo e(asset('assets/img/icon/Message.svg')); ?>" alt="">info@tkarinnahotel.com </p>
                <p><img class="me-2" src="<?php echo e(asset('assets/img/icon/Calling.svg')); ?>" alt="">+90 549 790 47 18 </p>
                <p><img class="me-2" src="<?php echo e(asset('assets/img/icon/Home.svg')); ?>" alt="">İkinci Gelişim Bölgesi Uludağ – Bursa</p>
                <p>
                    <a href="https://www.google.com/maps?q=Karinna+Hotel" target="_blank" style="color: white; text-decoration: none;">
                        <img class="me-2" src="<?php echo e(asset('assets/img/icon/global 1.svg')); ?>" alt="Harita Ikonu">Harita’da Görüntüle
                    </a>
                </p>
            </div>

            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center text-center">
                <h4 class="mt-5">Site Haritası</h4>
                <div class="row mt-5">
                    <div class="col-md-6 d-flex flex-column align-items-center ">
                        <a href="<?php echo e(url('about')); ?>" class="text-white mb-3 text-decoration-none">Hakkımızda</a>
                        <a href="<?php echo e(url('standart-deluxe-oda')); ?>" class="text-white mb-3 text-decoration-none">Odalar</a>
                        <a href="<?php echo e(url('services')); ?>" class="text-white mb-3 text-decoration-none">Servis</a>
                    </div>

                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <a href="<?php echo e(url('contact')); ?>" class="text-white mb-3 text-decoration-none">İletişim</a>
                        <a href="<?php echo e(url('gallery')); ?>" class="text-white mb-3 text-decoration-none">Galeri</a>
                        <a href="<?php echo e(url('foresthome')); ?>" class="text-white mb-3 text-decoration-none">Orman Evleri</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <h4 class="mt-2 ms-4">Temasa Geçelim</h4>
                <form action="your-mail-server-endpoint" method="POST" class="ms-4 d-flex align-items-center">
                    <div class="mb-3 flex-grow-1">
                        <input type="email" class="form-control rounded-0 mt-3" id="email" name="email" placeholder="E-posta adresinizi girin" required>
                    </div>
                    <button type="submit" class="btn btn-success footer rounded-0">Gönder</button>
                </form>
                <div class="ms-4 mt-4">
                    <p>
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fab fa-facebook me-4"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank">
                            <i class="fab fa-twitter me-4"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fab fa-instagram me-4"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank">
                            <i class="fab fa-youtube me-4"></i>
                        </a>
                        <a href="https://www.tripadvisor.com" target="_blank">
                            <img height="25" class="me-4 mb-1" src="<?php echo e(asset('assets/img/tripadvisor.svg')); ?>">
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <br><br><br>

        <hr>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <p>&#169; 2024 <a href="https://www.tecrubebilisim.com" target="_blank" class="text-white text-decoration-none">Tecrube Bilisim</a> – Tüm Hakları Gizlidir.</p>
                </div>
                <div class="col-md-3 text-center">
                    <p>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                        <i class="fas fa-star text-warning me-1"></i>
                    </p>
                </div>
                <div class="col-md-5 text-center">
                    <p><span class="me-4">Güvenlik Politikası</span><span class="me-4">Çerezler</span><span class="me-4">Aydınlatma Metni</span><span class="me-4">Bilgi Notu</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/guest/includes/footer.blade.php ENDPATH**/ ?>