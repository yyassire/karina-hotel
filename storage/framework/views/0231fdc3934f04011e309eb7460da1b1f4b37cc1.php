
<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Anasayfa Bilgilerini Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post"
                                    enctype="multipart/form-data" action="<?php echo e(route('admin.homepage.update', ['id' => $data?->id])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputTitleTr">Title TR</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo e($data?->title); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputSubtitleTr">Subtitle TR</label>
                                                <input type="text" name="subtitle" class="form-control" value="<?php echo e($data?->subtitle); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputTitleEn">Title EN</label>
                                                <input type="text" name="title_en" class="form-control" value="<?php echo e($data?->title_en); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputSubtitleEn">Subtitle EN</label>
                                                <input type="text" name="subtitle_en" class="form-control" value="<?php echo e($data?->subtitle_en); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputVideoUrl">Video URL</label>
                                        <input type="text" name="video_url" class="form-control" value="<?php echo e($data?->video_url); ?>">
                                    </div>

                                    <button type="submit" class="btn btn-success">Güncelle</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $(function() {
            // Summernote
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()
            $('#summernote5').summernote()
            $('#summernote6').summernote()
            $('#summernote7').summernote()
            $('#summernote8').summernote()
            $('#summernote9').summernote()
            $('#summernote10').summernote()
            $('#summernote11').summernote()
            $('#summernote12').summernote()
            $('.summernote').summernote()

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/homepage/index.blade.php ENDPATH**/ ?>