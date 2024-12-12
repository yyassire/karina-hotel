<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="<?php echo e(asset('dashboard/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Yönetim Paneli</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 " style="display: grid; text-align: center;">
            <div class="image" style="padding-left: 0 !important;">
                <img src="/<?php echo e(\Illuminate\Support\Facades\Auth::user()->image); ?>"style="width: 75px; height: 75px;"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="    display: inline-block; padding: 5px 5px 0;">
                <a href="<?php echo e(route('admin.account.index')); ?>"
                    class="d-block"><?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/homepage" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p> 
                            Anasayfa Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/homepage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/slider/1" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anasayfa Header Slider</p>
                            </a>
                        </li>
                      <li class="nav-item">
                            <a href="/admin/slider/8" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anasayfa Mobil Slider</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/admin/about" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Hakkımızda Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.about.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/slider/2" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hakkımızda Slider</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('admin.room.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Odalar Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.room.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/tkd/edit/1" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Odalar Tkd</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/slider/3" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Odalar Slider</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Galeri Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/slider/4" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galeri Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/tkd/edit/2" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tkd Yönetimi</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="<?php echo e(route('admin.page.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Sayfalar Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.page.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/admin/blog" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Blog Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/blog" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('admin.contact.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            İletişim Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.contact.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="$" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Form Ve Mail Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/form" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Mail Yönetimi</p>
                            </a>
                        </li>

                    </ul>
                </li>



                <li class="nav-item">
                    <a href="<?php echo e(route('admin.footer.index')); ?>" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Footer Yönetimi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('admin.code.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kod Yönetimi
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="/admin/pdf" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Pdf Yönetimi
                        </p>
                    </a>
                </li>
              


                <li class="nav-item">
                    <a href="<?php echo e(route('admin.tkd.index')); ?>" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Tkd Yönetimi
                        </p>
                    </a>
                </li>

              <a href="#"> ---ORMAN EVLERİ --- </a>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Orman Evleri
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/ormanevleri-homepage" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Anasayfa Yönetimi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/slider/10" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Orman Anasayfa Slider</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/slider/11" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Orman Mobil Slider</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('admin.ormanevleri-room.index')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Orman Odalar Yönetimi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.ormanevleri-room.index')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sayfa Yönetimi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/slider/3" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Odalar Slider</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        İglo Ev
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/ormanevleri-iglo" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>İglo Sayfa Yönetimi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/slider/15" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>İglo Görsel</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/admin/slider/12" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Orman Galeri
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/service" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Hizmetlerİmİz
                    </p>
                </a>
            </li>


            <li class="nav-item">
                    <a href="<?php echo e(route('admin.contact.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            İletişim Yönetimi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.ormanevleri-contact.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sayfa Yönetimi</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>