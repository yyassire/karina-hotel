<?php
    $amenities = [
        [
            'name' => 'Wifi',
            'icon' => 'fa-wifi',
        ],
        [
            'name' => 'TV',
            'icon' => 'fa-tv',
        ],
        [
            'name' => 'Klima',
            'icon' => 'fa-snowflake',
        ],
        [
            'name' => 'Evcil Hayvan',
            'icon' => 'fa-paw',
        ],
    ];
?>
<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Oda Ekle</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">
                                <form method="post" action="<?php echo e(route('admin.room.store')); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputName">Başlık Tr</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Oda İçerik Tr</label>
                                                <textarea class="content" cols="80" id="summernote1" name="description" rows="10"></textarea>
                                            </div>

                                        </div>
                                        
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputName">Başlık En</label>
                                                <input type="text" name="name_en" class="form-control">
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Oda İçerik En</label>
                                                <textarea class="content" cols="80" id="summernote2" name="description_en" rows="10"></textarea>
                                            </div>

                                        </div>
                                        

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Kapasite</label>
                                            <input name="capacity" required type="number" class="form-control">
                                            <small class="form-text text-muted">Odanın toplam konaklayabileceği kişi sayısı.</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label>Gecelik fiyat</label>
                                            <input name="price_per_night" required type="number" class="form-control">
                                            
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label>Oda Tipi</label>
                                            <select name="type" class="selectpicker" data-live-search="true" title='Oda Tipi'>
                                               <?php $__currentLoopData = ['single', 'double', 'suite', 'family', 'deluxe', 'forest']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($house_type); ?>"><?php echo e($house_type); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                             </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                        <label>Olanaklar</label>
                                        <select name="amenities[]" class="selectpicker" multiple data-live-search="true" title='Olanaklar'>
                                            <?php $__currentLoopData = $amenities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amenitie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($amenitie['name']); ?>"><?php echo e($amenitie['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                        </select>
                                   </div>
                                   <div class="form-group col-md-3">
                                    <label>cm2</label>
                                    <input name="size" required type="number" class="form-control">
                                    
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label>Odadaki oda sayısı</label>
                                    <select name="various_rooms_numb[]" class="selectpicker" multiple data-live-search="true" title='Odadaki oda sayısı'>
                                        <?php $__currentLoopData = [1,2,3,4,5,6]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room_numb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($room_numb); ?>"><?php echo e($room_numb); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                    </select>
                               </div>
                               <div class="form-group col-md-3">
                                <label>Odadaki banyo sayısı</label>
                                <select name="various_bath_numb[]" class="selectpicker" multiple data-live-search="true" title='Odadaki banyo sayısı'>
                                    <?php $__currentLoopData = [1,2,3,4,5,6]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room_bath): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($room_bath); ?>"><?php echo e($room_bath); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                </select>
                           </div>
                           <div class="form-group col-md-3">
                            <label>Tercİh Edilen Oda</label>
                            <select name="preferred_room" class="selectpicker" title="Tercih Edilen Oda">
                                <?php $__currentLoopData = [['name' => 'Evet', 'value' => true], ['name' => 'Hayır', 'value' => false]]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($resp['value']); ?>"><?php echo e($resp['name']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                            </select>
                       </div>
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Oda Temsili Resmi</label>
                                            <span style="color: red">*</span>
                                            <input type="file" id="input-file-now"  name="featured_image" class="dropify"
                                                >
                                                
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Oda Ek Resmi</label>
                                            <span style="color: red">*</span>
                                            
                                                <input type="file" id="input-file-now" name="images[]" class="dropify"  multiple>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-success">Kaydet</button>

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
            $('select').selectpicker();
            // Summernote
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
            $('#summernote4').summernote()
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/room/create.blade.php ENDPATH**/ ?>