<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Penyewaan Lapangan Futsal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/vendors/css/vendor.bundle.base.css')); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/vendors/jvectormap/jquery-jvectormap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/vendors/owl-carousel-2/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/vendors/owl-carousel-2/owl.theme.default.min.css')); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('template/assets/css/style.css')); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('template/assets/images/favicon.png')); ?>" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('template/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('template/assets/vendors/chart.js/Chart.min.j')); ?>s"></script>
    <script src="<?php echo e(asset('template/assets/vendors/progressbar.js/progressbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/vendors/jvectormap/jquery-jvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/vendors/owl-carousel-2/owl.carousel.min.js')); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('template/assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/js/misc.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('template/assets/js/todolist.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo e(asset('template/assets/js/dashboard.js')); ?>"></script>
    <!-- End custom js for this page -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/layouts/main.blade.php ENDPATH**/ ?>