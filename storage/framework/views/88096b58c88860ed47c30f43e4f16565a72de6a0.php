<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(session('status')): ?>
                            <div class="alert alert-primary" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">İletişim Bilgilerini Düzenle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post" action="<?php echo e(url('/admin/ormanevleri-contact/edit/' . $data->id)); ?>"
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
                                                <label for="inputName">Alt Başlık 1 Tr</label>
                                                <input type="text" name="sub_hood_one_tr" class="form-control"
                                                    value="<?php echo e($data['sub_hood_one_tr']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik 1 Tr</label>
                                                <textarea class="content" cols="80" id="summernote1" name="content_one_tr" rows="10"><?php echo e($data['content_one_tr']); ?></textarea>
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
                                                <label for="inputName">Alt Başlık 1 En</label>
                                                <input type="text" name="sub_hood_one_en" class="form-control"
                                                    value="<?php echo e($data['sub_hood_one_en']); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">İçerik 1 En</label>
                                                <textarea class="content" cols="80" id="summernote2" name="content_one_en" rows="10"><?php echo e($data['content_one_en']); ?></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputName">Facebook</label>
                                        <input type="text" name="facebook" class="form-control"
                                            value="<?php echo e($data['facebook']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Twitter</label>
                                        <input type="text" name="twitter" class="form-control"
                                            value="<?php echo e($data['twitter']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">İnstagram</label>
                                        <input type="text" name="instagram" class="form-control"
                                            value="<?php echo e($data['instagram']); ?>">
                                    </div>
                                  
                                  	<div class="form-group">
                                        <label for="inputName">LinkedIn</label>
                                        <input type="text" name="linkedin" class="form-control"
                                            value="<?php echo e($data['linkedin']); ?>">
                                    </div>
                                  
                                  <div class="form-group">
                                        <label for="inputName">TripAdvisor</label>
                                        <input type="text" name="tripadvisor" class="form-control"
                                            value="<?php echo e($data['tripadvisor']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Youtube</label>
                                        <input type="text" name="youtube" class="form-control"
                                            value="<?php echo e($data['youtube']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Google</label>
                                        <input type="text" name="google" class="form-control"
                                            value="<?php echo e($data['google']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Telefon</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="<?php echo e($data['phone']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">WhatsApp</label>
                                        <input type="text" name="whatsapp" class="form-control"
                                            value="<?php echo e($data['whatsapp']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Fax</label>
                                        <input type="text" name="fax" class="form-control"
                                            value="<?php echo e($data['fax']); ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputName">Çağrı Merkezi</label>
                                        <input type="text" name="call_center" class="form-control"
                                            value="<?php echo e($data['call_center']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">E-mail</label>
                                        <input type="text" name="email" class="form-control"
                                            value="<?php echo e($data['email']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Harita Kodu</label>
                                        <input type="text" name="map_code" class="form-control"
                                            value="<?php echo e($data['map_code']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Adres</label>
                                        <input type="text" name="address" class="form-control"
                                            value="<?php echo e($data['address']); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Copyright</label>
                                        <input type="text" name="copyright" class="form-control"
                                            value="<?php echo e($data['copyright']); ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">İletişim Sayfası İçin Resim Seçin</label>
                                        <input type="file" id="input-file-now" name="image" class="dropify">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo e(asset($data['image'])); ?>" style="height: 150px; width: 150px;">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Üst Logo Seçin</label>
                                        <input type="file" id="input-file-now" name="logo" class="dropify">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo e(asset($data['logo'])); ?>" style="height: 150px; width: 150px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alt Logo Seçin</label>
                                        <input type="file" id="input-file-now" name="sub_logo" class="dropify">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo e(asset($data['sub_logo'])); ?>" style="height: 150px; width: 150px;">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/ormanevleri-contact/index.blade.php ENDPATH**/ ?>