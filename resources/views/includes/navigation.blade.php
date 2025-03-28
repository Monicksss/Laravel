<nav class="navbar top-navbar navbar-expand-md">
    <div class="navbar-header" data-logobg="skin6">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
            <i class="ti-menu ti-close"></i>
        </a>
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-brand">
            <!-- Logo icon -->
            <a href="{{ route('dashboard') }}">
                <b class="logo-icon">
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('images/logo-icon-nav.png') }}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{ asset('images/logo-icon-nav.png') }}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="{{ asset('images/logo-text-nav.png') }}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo text -->
                    <img src="{{ asset('images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Toggle which is visible on mobile only -->
        <!-- ============================================================== -->
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti-more"></i>
        </a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
            <!-- Additional Navbar Items Can Go Here -->
        </ul>
        <!-- ============================================================== -->
        <!-- Right side toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-right">
            <!-- ============================================================== -->
            <!-- User profile -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/users/admin-icn.png') }}" alt="user" class="rounded-circle"
                        width="35">

                    @php
                    $adminId = Auth::id();
                    $admin = $adminId ? \App\Models\Admin::find($adminId) : null;
                    @endphp

                    @if($admin)
                    <span class="ml-2 d-none d-lg-inline-block">
                        <span>Hello,</span>
                        <span class="text-dark">{{ $admin->username }}</span>
                        <i data-feather="chevron-down" class="svg-icon"></i>
                    </span>
                    @else
                    <span class="ml-2 d-none d-lg-inline-block">
                        <span>Hello, Admin</span>
                        <i data-feather="chevron-down" class="svg-icon"></i>
                    </span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                        My Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('settings') }}">
                        <i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                        Account Setting
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile -->
            <!-- ============================================================== -->
        </ul>
    </div>
</nav>