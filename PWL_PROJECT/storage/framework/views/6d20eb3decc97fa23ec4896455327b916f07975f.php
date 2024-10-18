<?php $__env->startSection('content'); ?>

    <body class="antialiased">
        <nav class="navbar navbar-light bg-primary d-flex justify-content-center">
            <a class="navbar-brand text-white" href="/">Booking Futsal</a>
        </nav>
        <div class="container my-5">

            <?php if(session()->has('message')): ?>
                <div class="alert alert-<?php echo e(session()->get('alert-type')); ?> alert-dismissible fade show" role="alert"
                    id="alert-message">
                    <?php echo e(session()->get('message')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('create booking')); ?></h1>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('booking.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama"><?php echo e(__('nama')); ?></label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="nama" id="nama" value="<?php echo e(old('nama')); ?>">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="date">pilih tanggal booking</label>
                                    <input type="date" class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="date" name="date" value="<?php echo e(old('date')); ?>" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_time"><?php echo e(__('Jam Mulai')); ?></label>
                                    <input type="time" class="form-control <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="start_time" name="start_time" value="<?php echo e(old('start_time')); ?>" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_time"><?php echo e(__('Jam Selesai')); ?></label>
                                    <input type="time" class="form-control <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="end_time" name="end_time" value="<?php echo e(old('end_time')); ?>" />
                                </div>
                                <input type="hidden" id="arenas_id" name="arenas_id" value="<?php echo e($arenas->id); ?>">

                                <button type="submit" class="btn btn-primary"><?php echo e(__('Booking')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/booking/index.blade.php ENDPATH**/ ?>