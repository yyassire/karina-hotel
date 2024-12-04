<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Slider Galeri Yönetimi yes</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <?php if(session('status')): ?>
                <div class="alert alert-primary" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">

                        <form method="post" action="<?php echo e(route('admin.slider.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <input type="hidden" name="slider_id" value="<?php echo e($id); ?>">


                            <div class="form-group">
                                <label for="exampleInputPassword1">Resim Seçin</label><span style="color: red">*</span>
                                <input type="file" name="image[]" multiple id="input-file-now" class="dropify"
                                    required />
                                <span style="color: red">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div>
                         
                            <?php if($id == 4): ?>
                               
                            <div class="mb-5">
                                <select name="filters[]" class="selectpicker" multiple data-live-search="true" title='filtreleme etiketi'>
                                   <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($filter->id); ?>"><?php echo e($filter->name); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                 </select>
                           </div>
                            <?php endif; ?>
                          
                            <button type="submit" class="btn btn-primary btn-sm">Kaydet</button>
                            <a href="/admin/slider/destroy/<?php echo e($id); ?>" class="btn btn-danger btn-sm"
                                onclick="return confirm('Emin Misiniz ?')">Tümünü Sil</a>
                                
                        </form>




                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">No</th>
                                    <th style="width: 20%">
                                        Slider Galeri Resimleri
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="priority-list">
                                <?php ($i = 1); ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-priority="<?php echo e($val['id']); ?>">

                                        <td>
                                            <?php echo e($i++); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset($val['image'])); ?>" style="width: 150px;height: 150px;">
                                        </td>
                                        <td class="project-actions text-right">

                                            <a class="btn btn-danger btn-sm"
                                                href="<?php echo e(url('/admin/slider/delete/' . $val->id . '/' . $id)); ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Sil
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script type="text/javascript">

        $(function() {
            $('select').selectpicker();
            $("#priority-list").sortable({
                stop: setPriority
            });

            function setPriority() {
                $("#priority-list tr").each(function(i) {
                    var id = $(this).attr("data-priority");
                    //alert('Adı  => '+ id +'  İndex  =>  ' + i );
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo e(URL::route('admin.slider.ajaxdesk')); ?>",
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        },
                        data: {
                            'id': id,
                            'desk': i,
                        },
                    });
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/slider/index.blade.php ENDPATH**/ ?>