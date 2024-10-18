    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            
            <a class="sidebar-brand brand-logo" href="index.html"><img
                    src="<?php echo e(asset('template/assets/images/auth/futsal.png')); ?>" width="100px" height="100px"
                    alt="logo" /></a>
            
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle "
                                src="<?php echo e(asset('template/assets/images/faces/face15.jpg')); ?>" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal"><?php echo e(Auth::user()->name); ?></h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    
                    
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="index.html">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Kelola Penyewaan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="/admin/arena">Arena</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/admin/jenis">Jenis</a></li>
                    </ul>
                </div>
            </li>
            
            
            
        </ul>
    </nav>
<?php /**PATH C:\xampp\htdocs\PWL_PROJECT\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>