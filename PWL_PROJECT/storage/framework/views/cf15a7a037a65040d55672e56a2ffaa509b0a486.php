

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('Rekening')); ?>

                </h6>
                <div class="ml-auto">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Tambah
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nama Bank</th>
                                <th>No Rekening</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($rekenings)): ?>
                            <?php $__currentLoopData = $rekenings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rekening): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($rekening->id); ?></td>
                                    <td><?php echo e($rekening->nama); ?></td>
                                    <td><?php echo e($rekening->nama_bank); ?></td>
                                    <td><?php echo e($rekening->no_rekening); ?></td>
                                    
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="<?php echo e(route('admin.rekening.edit', $rekening->id)); ?>" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"> Edit </i>
                                            </a>
                    
                                            <a href="<?php echo e(route('admin.rekening.destroy', $rekening->id)); ?>" class="btn btn-danger"
                                                style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                <i class="fa fa-trash">Delete</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="5" align="center">Tidak ada data</td>
                            </tr>
                            
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
    <!-- modal add data-->
    <?php echo $__env->make('admin.rekening.modal.addModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/rekening/index.blade.php ENDPATH**/ ?>