<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Hakkımızda Bilgilerini Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <?php if(session('status')): ?>
                                <div class="alert alert-primary" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            <?php endif; ?>

                            <div class="card-body">
                                <form method="post" action="<?php echo e(url('/admin/about/edit/' . $data->id)); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title Tr</label>
                                                <input type="text" name="title_tr" class="form-control"
                                                    value="<?php echo e($data['title_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Keywords Tr</label>
                                                <input type="text" name="keywords_tr" class="form-control"
                                                    value="<?php echo e($data['keywords_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Description Tr</label>
                                                <input type="text" name="description_tr" class="form-control"
                                                    value="<?php echo e($data['description_tr']); ?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="inputName">Başlık 1 Tr</label>
                                                <input type="text" name="hood_one_tr" class="form-control"
                                                    value="<?php echo e($data['hood_one_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 2 Tr</label>
                                                <input type="text" name="hood_two_tr" class="form-control"
                                                    value="<?php echo e($data['hood_two_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 3 Tr</label>
                                                <input type="text" name="hood_three_tr" class="form-control"
                                                    value="<?php echo e($data['hood_three_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 4 Tr</label>
                                                <input type="text" name="hood_four_tr" class="form-control"
                                                    value="<?php echo e($data['hood_four_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik Tr</label>
                                                <textarea class="content" cols="80" id="summernote1" name="content_tr" rows="10"><?php echo e($data['content_tr']); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Title En</label>
                                                <input type="text" name="title_en" class="form-control"
                                                    value="<?php echo e($data['title_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Keywords En</label>
                                                <input type="text" name="keywords_en" class="form-control"
                                                    value="<?php echo e($data['keywords_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Description En</label>
                                                <input type="text" name="description_en" class="form-control"
                                                    value="<?php echo e($data['description_en']); ?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="inputName">Başlık 1 En</label>
                                                <input type="text" name="hood_one_en" class="form-control"
                                                    value="<?php echo e($data['hood_one_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 2 En</label>
                                                <input type="text" name="hood_two_en" class="form-control"
                                                    value="<?php echo e($data['hood_two_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 3 En</label>
                                                <input type="text" name="hood_three_en" class="form-control"
                                                    value="<?php echo e($data['hood_three_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Başlık 4 En</label>
                                                <input type="text" name="hood_four_en" class="form-control"
                                                    value="<?php echo e($data['hood_four_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik En</label>
                                                <textarea class="content" cols="80" id="summernote2" name="content_en" rows="10"><?php echo e($data['content_en']); ?></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Resim Seçin</label>
                                        <input type="file" id="input-file-now" name="image" class="dropify">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo e(asset($data['image'])); ?>" style="height: 150px; width: 150px;">
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

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/about/index.blade.php ENDPATH**/ ?>