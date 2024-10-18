    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                    src="<?php echo e(asset('template/assets/images/logo-mini.svg')); ?>" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                    <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="text" class="form-control" placeholder="Search Lapangan Futsal">
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                            <img class="img-xs rounded-circle"
                                src="<?php echo e(asset('template/assets/images/faces/face15.jpg')); ?>" alt="">
                            <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo e(Auth::user()->name); ?></p>
                            <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Profile</h6>
                        
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout text-danger"></i> <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">Advanced settings</p>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>
<?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/admin/layouts/navbar.blade.php ENDPATH**/ ?>