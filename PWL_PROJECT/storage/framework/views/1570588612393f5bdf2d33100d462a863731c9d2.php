

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create jenis')); ?></h1>
                    <a href="/admin/jenis" class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('Go Back')); ?></a>
                </div>
            </div>
            <div class="card-body">
                <form action="/admin/jenis/<?php echo e($jenis->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo e($jenis->nama); ?>" aria-
                            describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"> Deskripsi </label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                            value="<?php echo e($jenis->deskripsi); ?>" aria- describedby="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="images"> Gambar </label>
                        <input type="file" class="form-control" required="required" name="images"
                            value="<?php echo e($jenis->images); ?>">
                        <img width="150px" src="<?php echo e(asset('storage/' . $jenis->images)); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Save </button>
                </form>
            </div>
        </div>


        <!-- Content Row -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/jenis/edit.blade.php ENDPATH**/ ?>