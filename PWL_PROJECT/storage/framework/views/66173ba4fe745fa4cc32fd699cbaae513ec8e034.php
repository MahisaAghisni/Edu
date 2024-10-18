<?php $__env->startSection('content'); ?>

<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="<?php echo e(route('home')); ?>">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Order</strong></div>
    </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Terimakasih!</h2>
            <p class="lead mb-5">transaksi anda saat ini masih pending harap melanjutkan ke menu pembayaran untuk segera booking lapangan</p>
            <p><a href="<?php echo e(route('order.index')); ?>" class="btn btn-sm btn-primary">Menu Pembayaran</a></p>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/customer/order/booking-success.blade.php ENDPATH**/ ?>