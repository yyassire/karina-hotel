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
                                <form method="post" action="<?php echo e(url('/admin/ormanevleri-homepage/edit/' . $data->id)); ?>"
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
                                                <label for="inputName">Slider İçerik 1 Tr</label>
                                                <input type="text" name="slider_text_one_tr" class="form-control" value="<?php echo e($data['slider_text_one_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Slider İçerik 2 Tr</label>
                                                <input type="text" name="slider_text_two_tr" class="form-control" value="<?php echo e($data['slider_text_two_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Slider İçerik Tr</label>
                                                <textarea class="content" cols="80" id="summernote9" name="slider_text_three_tr" rows="10"><?php echo e($data['slider_text_three_tr']); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Hakkımızda Başlık 1 Tr</label>
                                                <input type="text" name="about_one_tr" class="form-control"
                                                    value="<?php echo e($data['about_one_tr']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Hakkımızda Başlık 2 Tr</label>
                                                <input type="text" name="about_two_tr" class="form-control"
                                                    value="<?php echo e($data['about_two_tr']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hakkımızda İçerik Tr</label>
                                                <textarea class="content summernote" cols="80" name="about_content_tr" rows="10"><?php echo e($data['about_content_tr']); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Oda Başlık 1 Tr</label>
                                                <input type="text" name="room_one_tr" class="form-control"
                                                    value="<?php echo e($data['room_one_tr']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda Başlık 2 Tr</label>
                                                <input type="text" name="room_two_tr" class="form-control"
                                                    value="<?php echo e($data['room_two_tr']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda İçerik Tr</label>
                                                <input type="text" name="room_content_tr" class="form-control"
                                                    value="<?php echo e($data['room_content_tr']); ?>">
                                            </div>

                                               <div class="form-group">
                                                <label for="inputName">İglo Başlık 1 Tr</label>
                                                <input type="text" name="iglo_hood_tr" class="form-control"
                                                    value="<?php echo e($data['iglo_hood_tr']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İglo İçerik Tr</label>
                                                <textarea class="content summernote" cols="80" name="iglo_content_tr" rows="10"><?php echo e($data['iglo_content_tr']); ?></textarea>
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
                                                <label for="inputName">Slider İçerik 1 En</label>
                                                <input type="text" name="slider_text_one_en" class="form-control" value="<?php echo e($data['slider_text_one_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Slider İçerik 2 En</label>
                                                <input type="text" name="slider_text_two_en" class="form-control" value="<?php echo e($data['slider_text_two_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Slider İçerik En</label>
                                                <textarea class="content" cols="80" id="summernote10" name="slider_text_three_en" rows="10"><?php echo e($data['slider_text_three_en']); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Hakkımızda Başlık 1 En</label>
                                                <input type="text" name="about_one_en" class="form-control"
                                                    value="<?php echo e($data['about_one_en']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Hakkımızda Başlık 2 En</label>
                                                <input type="text" name="about_two_en" class="form-control"
                                                    value="<?php echo e($data['about_two_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Hakkımızda İçerik En</label>
                                                <textarea class="content summernote" cols="80" name="about_content_en" rows="10"><?php echo e($data['about_content_en']); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">Oda Başlık 1 En</label>
                                                <input type="text" name="room_one_en" class="form-control"
                                                    value="<?php echo e($data['room_one_en']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda Başlık 2 En</label>
                                                <input type="text" name="room_two_en" class="form-control"
                                                    value="<?php echo e($data['room_two_en']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Oda İçerik En</label>
                                                <input type="text" name="room_content_en" class="form-control"
                                                    value="<?php echo e($data['room_content_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">İglo Başlık 1 En</label>
                                                <input type="text" name="iglo_hood_en" class="form-control"
                                                    value="<?php echo e($data['iglo_hood_en']); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İglo İçerik En</label>
                                                <textarea class="content summernote" cols="80" name="iglo_content_en" rows="10"><?php echo e($data['iglo_content_en']); ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Video Url</label>
                                        <input type="text" name="video_url" class="form-control"
                                            value="<?php echo e($data['video_url']); ?>">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/ormanevleri-homepage/index.blade.php ENDPATH**/ ?>