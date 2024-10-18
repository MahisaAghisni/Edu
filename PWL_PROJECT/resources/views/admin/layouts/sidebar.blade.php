    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            {{-- logo --}}
            <a class="sidebar-brand brand-logo" href="index.html"><img
                    src="{{ asset('template/assets/images/auth/futsal.png') }}" width="100px" height="100px"
                    alt="logo" /></a>
            {{-- <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                    src="{{ asset('template/assets/images/logo-mini.svg') }}" alt="logo" /></a> --}}
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle "
                                src="{{ asset('template/assets/images/faces/face15.jpg') }}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    {{-- <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                        aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
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
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon">
                        <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">Kelola Transaksi</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('transaksi.belumDiBayar') }}">
                                Belum Di Bayar </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('transaksi.booking') }}">
                                Booking </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('transaksi.selesai') }}">
                                Selesai </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('transaksi.dibatalkan') }}">
                                Batal </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('admin.rekening') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Rekening</span>
                </a>
            </li>
            {{-- <li class="nav-item menu-items">
                <a class="nav-link"
                    href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
                    <span class="menu-icon">
                        <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Documentation</span>
                </a>
            </li> --}}
        </ul>
    </nav>
