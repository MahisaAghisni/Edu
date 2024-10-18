

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    <?php echo e(__('Jenis')); ?>

                </h6>
                <div class="ml-auto">
                    <a href="<?php echo e(route('jenis.create')); ?>" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text"> New Jenis </span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama </th>
                                <th> Deskrpisi </th>
                                <th> Gambar </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $jenisLap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($jenis->nama); ?></td>
                                    <td><?php echo e($jenis->deskripsi); ?></td>
                                    <td><img src="<?php echo e(asset('storage/' . $jenis->images)); ?>" alt=""></td>
                                    
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="<?php echo e(route('jenis.edit', $jenis->id)); ?>" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"> Edit </i>
                                            </a>
                                            <form action="/admin/jenis/<?php echo e($jenis->id); ?>" class="d-inline"
                                                method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-danger"
                                                    style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                                                    <i class="fa fa-trash"> Delete </i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Content Row -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/jenis/index.blade.php ENDPATH**/ ?>