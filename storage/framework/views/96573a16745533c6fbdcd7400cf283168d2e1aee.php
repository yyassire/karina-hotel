<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>İletişim Form Yönetim Sayfası</h1>
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
                    
                  
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">No</th>
                                <th>
                                    İsim
                                </th>
                                <th>
                                    Soyisim
                                </th>
                                <th>
                                    Telefon
                                </th>
                                <th>
                                    Mail Adresi
                                </th>
                                
                                
                                <th>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="priority-list">
                            <?php ($i=1); ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-priority="<?php echo e($val['id']); ?>">

                                <td>
                                    <?php echo e($i++); ?>

                                </td>
                                <td>
                                    <a>
                                        <?php echo e($val['name']); ?>

                                    </a>
                                </td>
                                <td>
                                    <a>
                                        <?php echo e($val['surname']); ?>

                                    </a>
                                </td>
                                <td>
                                    <a>
                                        <?php echo e($val['phone']); ?>

                                    </a>
                                </td>
                                <td>
                                    <a>
                                        <?php echo e($val['email']); ?>

                                    </a>
                                </td>
                                
                                
                                <td class="project-actions text-right">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Silmek İstediğinize Emin Misiniz ?')" href="<?php echo e(route('admin.form.delete',['id'=>$val['id']])); ?>">
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/form/index.blade.php ENDPATH**/ ?>