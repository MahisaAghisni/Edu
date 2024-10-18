
<?php $__env->startSection('content'); ?>
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Sewa Lapangan</a></strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <h2 style="color: black">Jenis Lapangan</h2>
            <div class="row mb-5">
                <div class="col-md-9 order-2">
                    <div class="row mb-5">
                        <?php $__currentLoopData = $arenas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arena): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <a href="">
                                        <img src="<?php echo e(asset('storage/' . $arena->images)); ?>" alt="Image placeholder"
                                            class="img-fluid" width="100%" style="height:200px">
                                    </a>
                                    <div class="block-4-text p-4">
                                        <h3 style="color: black"><?php echo e($arena->nama); ?></h3>
                                        <p class="mb-0"></p>
                                        <a href="<?php echo e(route('detail-lapangan', $arena->id)); ?>"
                                            class="btn btn-primary mt-2">Cek Detail</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\PWL_PROJECT\resources\views/customer/daftar-lap/index.blade.php ENDPATH**/ ?>