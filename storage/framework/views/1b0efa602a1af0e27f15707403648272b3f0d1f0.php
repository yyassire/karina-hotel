<!doctype html>
<?php
$session = app()->getLocale();
$languages = App\Models\Language::all();
$contact = App\Models\Contact::first();
$facility = App\Models\Page::where('category','firsatlar')->first();
$restaurant = App\Models\Page::where('category','restoran')->first();
$pool = App\Models\Page::where('category','havuz')->first();
$menuslider = App\Models\Slider::where('slider_id', 1)->first();
$spa = App\Models\Page::where('category','spa')->first();
$activity = App\Models\Page::where('category','aktivite')->first();
$meeting = App\Models\Page::where('category','toplanti')->first();
$footers = App\Models\Footer::all();
if (session()->has('lang')) {
$currentLang = App\Models\Language::where('code', session()->get('lang'))->first();
} else {
$currentLang = App\Models\Language::where('is_default', 1)->first();
}
$pdfs = App\Models\Pdf::where('language_id',$currentLang['id'])->get();
?>
<html lang="<?php echo e($session); ?>">

<head>
    <base href="<?php echo e(url('/')); ?>">
	<link rel="icon" type="image/x-icon" href="<?php echo e(asset('front_assets/images/logo/karinnafavicon.png')); ?>">
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $__env->yieldContent('tkd'); ?>
    <!--Css list-->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/main.css?v=4')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/counter-slider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/room-card-slider.css?v=1')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/gallery.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/datepicker-main.css')); ?>">
   	<link rel="stylesheet" href="<?php echo e(asset('front_assets/css/twitter-bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/video.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/responsive.css')); ?>">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" integrity="sha512-EaaldggZt4DPKMYBa143vxXQqLq5LE29DG/0OoVenoyxDrAScYrcYcHIuxYO9YNTIQMgD8c8gIUU8FQw7WpXSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Jquery-->
    <script src="<?php echo e(asset('front_assets/js/jquery.js')); ?>"></script>

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WT2524GV');</script>
    <!-- End Google Tag Manager -->

    <script src="https://extensions.woxxtravel.com/"></script>
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT2524GV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!--menu-->
    <nav class="navbar-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 col-md-2">
                    <div class="mobil-btn-logo">
                        <div class="mobil-menu-btn">
                            <button type="button" class="btn btn-menu mobil-d-none" id="mobilBusiness">
                                <i class="bi bi-list"></i>
                            </button>
                        </div>
                        <a href="/<?php echo e($session); ?>">
                            <div class="logo-nav">
                                <picture>
                                    <source media="(max-width:768px)" srcset="<?php echo e(asset($contact->logo)); ?>">
                                    <img src="<?php echo e(asset($contact->logo)); ?>" class="nav-logo-img" alt="Karinna Hotel">
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8 menu-mobil-d-none">
                    <div class="menu-list">
                        <ul class="menu-list-ul">
                            <li><a href="<?php echo e($session); ?>/"><?php echo app('translator')->get('language.anasayfa'); ?></a></li>
                            <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>hakkimizda <?php elseif($session=='en'): ?>about <?php endif; ?>"><?php echo app('translator')->get('language.hakkimizda'); ?></a></li>
                            <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                            <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                            <li><a href="<?php echo e($session); ?>/ormanevleri"><?php if($session =='tr'): ?>ORMAN EVLERİ <?php elseif($session=='en'): ?>FOREST HOUSES <?php endif; ?></a></li>
                            <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>galeri <?php elseif($session=='en'): ?>gallery <?php endif; ?>"><?php echo app('translator')->get('language.galeri'); ?></a></li>
                            <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>iletisim <?php elseif($session=='en'): ?>contact <?php endif; ?>"><?php echo app('translator')->get('language.iletisim'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 col-md-2">
                    <div class="language-mobile">
                        <ul class="language-mobile-ul">
                            <li>
                                <div class="dropdown">
                                    <button class="btn language-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-caret-down-fill"></i><?php echo e(strtoupper($session)); ?>

                                    </button>
                                    <ul class="dropdown-menu">
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a class="dropdown-item" href="/changelanguage/<?php echo e($language->code); ?>"><?php echo e(strtoupper($language->name)); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="btn btn-menu btn-mobil-d-none" id="bussinessBtn"><i class="bi bi-list"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--menu-->

    <!--home banner-->
    <section>

        <?php echo $__env->yieldContent('content'); ?>
        <!--footer main-->
        <footer class="footer-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <a href="/">
                            <div class="footer-logo">
                                <img src="<?php echo e(asset($contact->sub_logo)); ?>" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="footer-address">
                            <label class="footer-address-lbl">KARINNA HOTEL</label>
                            <label class="footer-address-lbl2"><?php echo e($contact->address); ?></label>
                            <a href="tel:<?php echo e($contact->phone); ?>" class="footer-address-a">Ph. <?php echo e($contact->phone); ?></a>
                            <label class="footer-address-lbl3"><?php echo app('translator')->get('language.bizitakipedin'); ?></label>
                            <ul class="footer-address-ul">
                                <?php if($contact['whatsapp']!=null): ?><li><a href="https://wa.me/<?php echo e($contact->whatsapp); ?>" target="_blank" ><i class="bi bi-whatsapp"></i></a></li><?php endif; ?>
                                <?php if($contact['instagram']!=null): ?><li><a href="<?php echo e($contact->instagram); ?>" target="_blank"><i class="bi bi-instagram"></i></a></li><?php endif; ?>
                                <?php if($contact['facebook']!=null): ?><li><a href="<?php echo e($contact->facebook); ?>" target="_blank"><i class="bi bi-facebook"></i></a></li><?php endif; ?>
                                <?php if($contact['twitter']!=null): ?><li><a href="<?php echo e($contact->twitter); ?>" target="_blank"><i class="bi bi-twitter"></i></a></li><?php endif; ?>
                                <?php if($contact['youtube']!=null): ?><li><a href="<?php echo e($contact->youtube); ?>" target="_blank"><i class="bi bi-youtube"></i></a></li><?php endif; ?>
                              	<?php if($contact['linkedin']!=null): ?><li><a href="<?php echo e($contact->linkedin); ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li><?php endif; ?>
                              	<?php if($contact['tripadvisor']!=null): ?><li><a href="<?php echo e($contact->tripadvisor); ?>" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li><?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mobil-footer-label">
                            <label class="mobil-foter-btn"><?php echo app('translator')->get('language.digersecenekler'); ?></label>
                        </div>
                        <div class="row mobil-hide">
                            <div class="col-12 col-md-6">
                                <div class="footer-menu-list">
                                    <ul class="footer-menu-list-ul">
                            			<li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>hakkimizda <?php elseif($session=='en'): ?>about <?php endif; ?>"><?php echo app('translator')->get('language.hakkimizda'); ?></a></li>
                                      	<li><a href="<?php echo e($session); ?>/ormanevleri"><?php if($session =='tr'): ?>ORMAN EVLERİ <?php elseif($session=='en'): ?>FOREST HOUSES <?php endif; ?></a></li>
                                        <li><a href="<?php echo e($session); ?>/<?php if($session=='tr'): ?>odalar <?php elseif($session=='en'): ?>rooms <?php endif; ?>"><?php echo app('translator')->get('language.odalar'); ?></a></li>
                                        <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($activity['selflink_'.$session]); ?>/<?php echo e($activity->id); ?>"><?php echo app('translator')->get('language.aktiviteler'); ?></a></li><?php endif; ?>
                                        <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($activity['selflink_'.$session]); ?>/<?php echo e($activity->id); ?>"><?php echo app('translator')->get('language.aktiviteler'); ?></a></li><?php endif; ?>
                                        <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($spa['selflink_'.$session]); ?>/<?php echo e($spa->id); ?>"><?php echo app('translator')->get('language.spa'); ?></a></li><?php endif; ?>
                                        <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($spa['selflink_'.$session]); ?>/<?php echo e($spa->id); ?>"><?php echo app('translator')->get('language.spa'); ?></a></li><?php endif; ?>
                                        <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($restaurant['selflink_'.$session]); ?>/<?php echo e($restaurant->id); ?>"><?php echo app('translator')->get('language.restorant'); ?></a></li><?php endif; ?>
                                        <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($restaurant['selflink_'.$session]); ?>/<?php echo e($restaurant->id); ?>"><?php echo app('translator')->get('language.restorant'); ?></a></li><?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="footer-menu-list">
                                    <ul class="footer-menu-list-ul">
                                        <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                                        <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                                        <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>galeri <?php elseif($session=='en'): ?>gallery <?php endif; ?>"><?php echo app('translator')->get('language.galeri'); ?></a></li>
                                        <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>iletisim <?php elseif($session=='en'): ?>contact <?php endif; ?>"><?php echo app('translator')->get('language.iletisim'); ?></a></li>
                                        <?php if(isset($pdfs)): ?>
                                        <?php $__currentLoopData = $pdfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($session); ?>/pdf/<?php echo e($pdf->id); ?>" target="_blank"><?php echo e($pdf->name); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-desing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="desing-company">
                            <label class="desing-company-lbl"><?php echo e($contact->copyright); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer main-->



        <?php if($menu == 0): ?>
        <!--home menu top-->
        <section class="nav-home-menu">
            <img src="<?php echo e(asset($menuslider->image)); ?>" alt="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <a href="/">
                            <div class="home-nav-logo">
                                <img src="<?php echo e(asset($contact->sub_logo)); ?>" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="menu-button-hide">
                            <button class="btn btn-menu-hide"><i class="bi bi-list"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="home-menu-left">
                            <ul class="home-menu-left-ul">
                                <li><a href="<?php echo e($session); ?>/"><?php echo app('translator')->get('language.anasayfa'); ?></a></li>
                              	<li><a href="<?php echo e($session); ?>/ormanevleri"><?php if($session =='tr'): ?>ORMAN EVLERİ <?php elseif($session=='en'): ?>FOREST HOUSES <?php endif; ?></a></li>
                                <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>galeri <?php elseif($session=='en'): ?>gallery <?php endif; ?>"><?php echo app('translator')->get('language.galeri'); ?></a></li>
                                <li><a href="<?php echo e($session); ?>/<?php if($session=='tr'): ?>odalar <?php elseif($session=='en'): ?>rooms <?php endif; ?>"><?php echo app('translator')->get('language.odalar'); ?></a></li>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($restaurant['selflink_'.$session]); ?>/<?php echo e($restaurant->id); ?>"><?php echo app('translator')->get('language.restorant'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($restaurant['selflink_'.$session]); ?>/<?php echo e($restaurant->id); ?>"><?php echo app('translator')->get('language.restorant'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($pool['selflink_'.$session]); ?>/<?php echo e($pool->id); ?>"><?php echo app('translator')->get('language.havuz'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($pool['selflink_'.$session]); ?>/<?php echo e($pool->id); ?>"><?php echo app('translator')->get('language.havuz'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($spa['selflink_'.$session]); ?>/<?php echo e($spa->id); ?>"><?php echo app('translator')->get('language.spa'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($spa['selflink_'.$session]); ?>/<?php echo e($spa->id); ?>"><?php echo app('translator')->get('language.spa'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($activity['selflink_'.$session]); ?>/<?php echo e($activity->id); ?>"><?php echo app('translator')->get('language.aktiviteler'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($activity['selflink_'.$session]); ?>/<?php echo e($activity->id); ?>"><?php echo app('translator')->get('language.aktiviteler'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($meeting['selflink_'.$session]); ?>/<?php echo e($meeting->id); ?>"><?php echo app('translator')->get('language.toplanti'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($meeting['selflink_'.$session]); ?>/<?php echo e($meeting->id); ?>"><?php echo app('translator')->get('language.toplanti'); ?></a></li><?php endif; ?>



                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="home-menu-right">
                            <ul class="home-menu-right-ul">
                                <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>iletisim <?php elseif($session=='en'): ?>contact <?php endif; ?>"><?php echo app('translator')->get('language.iletisim'); ?></a></li>
                                <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>hakkimizda <?php elseif($session=='en'): ?>about <?php endif; ?>"><?php echo app('translator')->get('language.hakkimizda'); ?></a></li>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                               	<?php if(isset($pdfs)): ?>
                                <?php $__currentLoopData = $pdfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($session); ?>/pdf/<?php echo e($pdf->id); ?>" target="_blank"><?php echo e($pdf->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                            <div class="home-menu-fallow">
                                <label class="home-menu-fallow-lbl"><?php echo app('translator')->get('language.bizitakipedin'); ?></label>
                                <ul class="footer-address-ul mt-2">
                                    <?php if($contact['whatsapp']!=null): ?><li><a thref="https://wa.me/<?php echo e($contact->whatsapp); ?>" target="_blank"><i class="bi bi-whatsapp"></i></a></li><?php endif; ?>
                                    <?php if($contact['instagram']!=null): ?><li><a href="<?php echo e($contact->instagram); ?>" target="_blank"><i class="bi bi-instagram"></i></a></li><?php endif; ?>
                                    <?php if($contact['facebook']!=null): ?><li><a href="<?php echo e($contact->facebook); ?>" target="_blank"><i class="bi bi-facebook"></i></a></li><?php endif; ?>
                                    <?php if($contact['twitter']!=null): ?><li><a href="<?php echo e($contact->twitter); ?>" target="_blank"><i class="bi bi-twitter"></i></a></li><?php endif; ?>
                                    <?php if($contact['youtube']!=null): ?><li><a href="<?php echo e($contact->youtube); ?>" target="_blank"><i class="bi bi-youtube"></i></a></li><?php endif; ?>
                                  	<?php if($contact['linkedin']!=null): ?><li><a href="<?php echo e($contact->linkedin); ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li><?php endif; ?>
                              		<?php if($contact['tripadvisor']!=null): ?><li><a href="<?php echo e($contact->tripadvisor); ?>" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li><?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home menu top-->
        <?php elseif($menu ==1): ?>
        <!--business page menu-->
        <div class="business-page-menu">
            <img src="<?php echo e(asset('/images/slider/575-slider-1-1.jpg')); ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="business-menu-logo">
                            <img src="<?php echo e(asset($contact->sub_logo)); ?>">
                        </div>">

                        </a>
                    </div>
                    <div class="col-6">
                        <div class="business-menu-btn">
                            <button class="btn btn-menu-hide" id="btnBuussines"><i class="bi bi-list"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="home-menu-left business-menu-left">
                            <ul class="home-menu-left-ul">
                                <li><a href="<?php echo e($session); ?>/"><?php echo app('translator')->get('language.anasayfa'); ?></a></li>
                                <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>galeri <?php elseif($session=='en'): ?>gallery <?php endif; ?>"><?php echo app('translator')->get('language.galeri'); ?></a></li>
                                <li><a href="<?php echo e($session); ?>/<?php if($session=='tr'): ?>odalar <?php elseif($session=='en'): ?>rooms <?php endif; ?>"><?php echo app('translator')->get('language.odalar'); ?></a></li>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($restaurant['selflink_'.$session]); ?>/<?php echo e($restaurant->id); ?>"><?php echo app('translator')->get('language.restorant'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($restaurant['selflink_'.$session]); ?>/<?php echo e($restaurant->id); ?>"><?php echo app('translator')->get('language.restorant'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($pool['selflink_'.$session]); ?>/<?php echo e($pool->id); ?>"><?php echo app('translator')->get('language.havuz'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($pool['selflink_'.$session]); ?>/<?php echo e($pool->id); ?>"><?php echo app('translator')->get('language.havuz'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($spa['selflink_'.$session]); ?>/<?php echo e($spa->id); ?>"><?php echo app('translator')->get('language.spa'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($spa['selflink_'.$session]); ?>/<?php echo e($spa->id); ?>"><?php echo app('translator')->get('language.spa'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($activity['selflink_'.$session]); ?>/<?php echo e($activity->id); ?>"><?php echo app('translator')->get('language.aktiviteler'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($activity['selflink_'.$session]); ?>/<?php echo e($activity->id); ?>"><?php echo app('translator')->get('language.aktiviteler'); ?></a></li><?php endif; ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($meeting['selflink_'.$session]); ?>/<?php echo e($meeting->id); ?>"><?php echo app('translator')->get('language.toplanti'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($meeting['selflink_'.$session]); ?>/<?php echo e($meeting->id); ?>"><?php echo app('translator')->get('language.toplanti'); ?></a></li><?php endif; ?>



                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="home-menu-right business-menu-right">
                            <ul class="home-menu-right-ul">
                                <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>iletisim <?php elseif($session=='en'): ?>contact <?php endif; ?>"><?php echo app('translator')->get('language.iletisim'); ?></a></li>
                                <li><a href="<?php echo e($session); ?>/<?php if($session =='tr'): ?>hakkimizda <?php elseif($session=='en'): ?>about <?php endif; ?>"><?php echo app('translator')->get('language.hakkimizda'); ?></a></li>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/sayfalar/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/pages/<?php echo e($facility['selflink_'.$session]); ?>/<?php echo e($facility->id); ?>"><?php echo app('translator')->get('language.firsatlar'); ?></a></li><?php endif; ?>
                                <?php $__currentLoopData = $footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($session=='tr'): ?><li><a href="<?php echo e($session); ?>/kurumsal/<?php echo e($footer['selflink_'.$session]); ?>/<?php echo e($footer->id); ?>"><?php echo e($footer['hood_one_'.$session]); ?></a></li><?php endif; ?>
                                <?php if($session=='en'): ?><li><a href="<?php echo e($session); ?>/corporate/<?php echo e($footer['selflink_'.$session]); ?>/<?php echo e($footer->id); ?>"><?php echo e($footer['hood_one_'.$session]); ?></a></li><?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($pdfs)): ?>
                                <?php $__currentLoopData = $pdfs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($session); ?>/pdf/<?php echo e($pdf->id); ?>" target="_blank"><?php echo e($pdf->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </ul>
                            <div class="home-menu-fallow">
                                <label class="home-menu-fallow-lbl"><?php echo app('translator')->get('language.bizitakipedin'); ?></label>
                                <ul class="footer-address-ul mt-2">
                                    <?php if($contact['whatsapp']!=null): ?><li><a href="https://wa.me/<?php echo e($contact->whatsapp); ?>"><i class="bi bi-whatsapp"></i></a></li><?php endif; ?>
                                    <?php if($contact['instagram']!=null): ?><li><a href="<?php echo e($contact->instagram); ?>" target="_blank"><i class="bi bi-instagram"></i></a></li><?php endif; ?>
                                    <?php if($contact['facebook']!=null): ?><li><a href="<?php echo e($contact->facebook); ?>" target="_blank"><i class="bi bi-facebook"></i></a></li><?php endif; ?>
                                    <?php if($contact['twitter']!=null): ?><li><a href="<?php echo e($contact->twitter); ?>" target="_blank"><i class="bi bi-twitter"></i></a></li><?php endif; ?>
                                    <?php if($contact['youtube']!=null): ?><li><a href="<?php echo e($contact->youtube); ?>" target="_blank"><i class="bi bi-youtube"></i></a></li><?php endif; ?>
                                  	<?php if($contact['linkedin']!=null): ?><li><a href="<?php echo e($contact->linkedin); ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li><?php endif; ?>
                              		<?php if($contact['tripadvisor']!=null): ?><li><a href="<?php echo e($contact->tripadvisor); ?>" target="_blank"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li><?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--business page menu-->
        <?php endif; ?>

        <!--widget main-->
        <div class="widget-content">
            <!--call nov-->
            <div class="call-now-content">
                <a target="_blank" href="tel:<?php echo e($contact->phone); ?>">
                    <div class="call-nov-link">
                        <label class="call-nov-link-a"><?php echo e($contact->phone); ?></label>
                    </div>
                    <div class="call-nov-icon">
                        <img src="/front_assets/images/phone.svg" />
                    </div>
                </a>
            </div>
            <!--call nov-->


            <!--whatsapp-->

            <div class="whatsapp-content">
                <a target="_blank" href="https://wa.me/<?php echo e($contact->whatsapp); ?>">
                    <div class="whatsapp-link">
                        <label class="whatsap-link-a"><?php echo e($contact->whatsapp); ?></label>
                    </div>
                    <div class="whatsapp-icon">
                        <img src="/front_assets/images/whatsapp.svg" />
                    </div>
                </a>
            </div>
            <!--whatsapp-->



        </div>
        <!--widget main-->





        <!--Mobil widget start-->
        <div class="alt_buton_v2">
            <!-- <div class="sizi_arayalim">
                <a target="_blank" href="https://karinnahotel.platformeva.com/" class="sizi_arayalim_btn sizi-arayalim">
                    <div class="img"><img src="/front_assets/images/sizi_arayalim.png" /></div>
                    <span><?php echo app('translator')->get('language.rezervasyonyap'); ?></span>  
                </a>
            </div> -->
            <div class="wp">
                <a target="_blank" href="https://wa.me/<?php echo e($contact->whatsapp); ?>" id="wp_footer">
                    <div class="img"><img src="/front_assets/images/contact2.png" /></div>
                    <span>WhatsApp</span>
                </a>
            </div>
            <div class="hemen_ara">
                <a target="_blank" href="tel:<?php echo e($contact->phone); ?>" class="hemen_ara_footer" id="hemen_ara_footer">
                    <div class="img"><img src="/front_assets/images/hemen_ara.png" /></div>
                    <span><span><?php echo app('translator')->get('language.hemenara'); ?></span></span>
                </a>
            </div>
        </div>
        <!--Mobil widget End-->

        <script src="<?php echo e(asset('front_assets/js/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/main.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/counter-slider.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/room-card-slider.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/lightbox.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/datepicker-moment.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/daterangepicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front_assets/js/script.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Projects\html\karina-hotel\resources\views/layouts/app.blade.php ENDPATH**/ ?>