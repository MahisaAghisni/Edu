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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create arena')); ?></h1>
                    <a href="/admin/arena" class="btn btn-primary btn-sm shadow-sm"><?php echo e(__('Go Back')); ?></a>
                </div>
            </div>
            <div class="card-body">
                <form action="/admin/arena/<?php echo e($arena->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input type="text" name="nama" class="form-control" id="nama"
                            value="<?php echo e($arena->nama); ?>" aria- describedby="nama">
                    </div>
                    <label for="exampleFormControlSelect1"> Jenis Arena </label>
                    <select class="form-control" id="jenis_id" name="jenis_id">
                        <?php $__currentLoopData = $jenisLap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($jenis->id); ?>">
                                <?php echo e($arena->jenis_id ? '' : ''); ?><?php echo e($jenis->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="form-group">
                        <label for="price"> Harga </label>
                        <input type="price" name="price" class="form-control" id="price"
                            value="<?php echo e($arena->price); ?>" aria- describedby="price">
                    </div>
                    <div class="form-group">
                        <label for="image"> Gambar </label>
                        <input type="file" class="form-control" required="required" name="image"
                            value="<?php echo e($arena->image); ?>">
                        <img width="150px" src="<?php echo e(asset('storage/' . $arena->image)); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Save </button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\PWL_PROJECT\resources\views/admin/arenas/edit.blade.php ENDPATH**/ ?>