<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $session = app()->getLocale();
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yönetim Paneli | Woxx Tech</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/fontawesome-free/css/all.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('dashboard/dist/css/ionicons.min.css')); ?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/summernote/summernote-bs4.min.css')); ?>">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <link rel="stylesheet" href="<?php echo e(asset('dashboard/dist/css/dropify.min.css')); ?>">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Preloader -->

<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo e(asset('front_assets/images/woxx.png')); ?>" alt="Woxx Technology" height="100" width="100">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <?php if(isset($pdf)): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle lng-ling " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <b>Listelemek İstediğiniz Dili Seçiniz</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php $__currentLoopData = App\Models\Language::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a class="dropdown-item" href="/changelanguage/<?php echo e($language['code']); ?>"><?php echo e($language['name']); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
      <?php endif; ?>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>" role="button" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <b><?php echo e(__('Logout')); ?></b>
            </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
              <?php echo csrf_field(); ?>
          </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<footer class="main-footer">
    <strong>Copyright &copy; 2019-2022 <a href="http://www.woxxmedia.com">Woxx Technology</a>.</strong>
    All rights reserved.

</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('dashboard/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('dashboard/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('dashboard/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>
<!-- daterangepicker -->
<script src="<?php echo e(asset('dashboard/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('dashboard/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dashboard/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dashboard/dist/js/demo.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('dashboard/dist/js/pages/dashboard.js')); ?>"></script>

<script src="<?php echo e(asset('dashboard/dist/js/dropify.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/dist/js/dropify.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/dist/js/bootstrap.min.js')); ?>"></script>


</body>
</html>

<?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/layouts/admin.blade.php ENDPATH**/ ?>