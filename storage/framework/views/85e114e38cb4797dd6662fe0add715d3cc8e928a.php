<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Oda Yönetimi</h1>
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
                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.ormanevleri-room.create')); ?>">
                            <i class="fas fa-plus"></i>
                            Yeni Oda Ekle
                        </a>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">No</th>
                                    <th style="width: 20%">
                                        Odalar
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
                                            <a>
                                                <?php echo e($val['room_name_tr']); ?>

                                            </a>
                                            <br />
                                        </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-warning btn-sm"
                                                href="<?php echo e(url('/admin/ormanevleri-room_gallery/' . $val->id)); ?>">
                                                <i class="fas fa-plus">
                                                </i>
                                                Galeri
                                            </a>


                                            <a class="btn btn-success btn-sm"
                                                href="<?php echo e(url('/admin/ormanevleri-room/edit/' . $val->id)); ?>">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Düzenle
                                            </a>
                                            <a class="btn btn-danger btn-sm"
                                                href="<?php echo e(url('/admin/ormanevleri-room/delete/' . $val->id)); ?>"
                                                onclick="return confirm('Silmek İstediğinizden Emin Misiniz ?')">
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
            $("#priority-list").sortable({
                stop: setPriority
            });

            function setPriority() {
                $("#priority-list tr").each(function(i) {
                    var id = $(this).attr("data-priority");
                    //alert('Adı  => '+ id +'  İndex  =>  ' + i );
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo e(URL::route('admin.ormanevleri-room.ajaxdesk')); ?>",
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\karinnahotel.com\resources\views/admin/ormanevleri-room/index.blade.php ENDPATH**/ ?>