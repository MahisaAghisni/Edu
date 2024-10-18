<!DOCTYPE html>
<html lang="en">

<head>
    <title>Futsal Sport Centre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo e(asset('shopper')); ?>/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">

                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="index.html" class="js-logo-clone">Futsal Sport Center</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="top-right links">
                                <div class="site-top-icons">
                                    <ul>
                                        <?php if(Route::has('login')): ?>
                                            <?php if(auth()->guard()->check()): ?>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle" id="dropdownMenuButton"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="icon icon-person"></span>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="">Pengaturan Alamat</a>
                                                            <a class="dropdown-item" href="#">Pengaturan Akun</a>
                                                            <a class="dropdown-item" href="#">

                                                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                                    <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                                                                </a>

                                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>"
                                                                    method="POST" style="display: none;">
                                                                    <?php echo csrf_field(); ?>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <?php
                                                    $total_order = DB::table('bookings')
                                                        ->select(DB::raw('count(id) as jumlah'))
                                                        ->where('users_id', Auth::user()->id)
                                                        ->first();
                                                    ?>
                                                    <a href="<?php echo e(route('order.index')); ?>" class="site-cart">
                                                        <span class="icon icon-shopping_cart"></span>
                                                        <span class="count"><?php echo e($total_order->jumlah); ?></span>
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon icon-person"></span>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="<?php echo e(route('login')); ?>">Masuk</a>
                                                        <?php if(Route::has('register')): ?>
                                                            <a class="dropdown-item"
                                                                href="<?php echo e(route('register')); ?>">Daftar</a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                </div>
                                <?php endif; ?>
                                <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                        class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                </li>
                            </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <?php echo $__env->yieldContent('content'); ?>

        
    </div>

    <script src="<?php echo e(asset('shopper')); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/jquery-ui.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/aos.js"></script>
    <script src="<?php echo e(asset('shopper')); ?>/js/main.js"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\PWL_PROJECT\resources\views/customer/layouts/app.blade.php ENDPATH**/ ?>