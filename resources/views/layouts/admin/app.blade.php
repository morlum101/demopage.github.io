<!doctype html>
<html lang="en">

<head>
    <title>@yield('title', 'Admin | Dashboard')</title>
    @include('layouts.admin.styles')
    @yield('styles')
</head>

<body data-topbar="dark">
    {{--  Start Top Nav-bar --}}
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('img/logo/logo.png') }}" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img class="rounded-circle" src="{{ asset('img/logo/logo.png') }}" alt=""
                                    height="24"> <span class="logo-txt">Las Flores Flower Shop</span>
                            </span>
                        </a>

                        <a href="index" class="logo logo-light">
                            <span class="logo-sm">
                                <img class="rounded-circle" src="{{ asset('img/logo/logo.png') }}" alt=""
                                    height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="" alt="" height="24"> <span class="logo-txt">Las
                                    Flores</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-info" type="button"><i
                                    class="bx bx-search-alt align-middle"></i></button>
                        </div>
                    </form>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Dark Mode Toggler --}}
                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div>
                    {{--  End Dark Mode Toggler --}}

                    {{-- Notification --}}
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline"> Unread
                                            (3)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">2 new orders</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                    elit. Voluptate, eaque.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- End Notification --}}


                    {{-- Avatar --}}
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ auth()->user()->avatar_profile }}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ auth()->user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ route('profile.index') }}"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item"
                                onclick="confirm('Do you want to Logout?', '', 'Yes').then(res => res.isConfirmed ? $('#logout').submit() : false)">
                                <i class="fas fa-power-off me-1"></i>
                                <span>Logout</span>
                            </a>
                            <form action="{{ route('auth.logout') }}" method="post" id="logout">@csrf
                            </form>
                        </div>
                    </div>
                    {{-- End Avatar --}}

                </div>
            </div>
        </header>
        {{-- Left Sidebar Start --}}
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>
                        <li>
                            <a class="@if (Route::is('admin.dashboard.index*')) active @endif"
                                href="{{ route('admin.dashboard.index') }}">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="@if (Route::is('admin.categories.*')) active @endif"
                                href="{{ route('admin.categories.index') }}">
                                <i data-feather="tag"></i>
                                <span data-key="t-dashboard">Category</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a class="@if (Route::is('admin.patients.*')) active @endif"
                                href="{{ route('admin.patients.index') }}">
                                <i data-feather="users"></i>
                                <span data-key="t-dashboard">Patient Management</span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="truck"></i>
                                <span data-key="t-maps">Delivery Management</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.municipalities.index') }}">Municipality</a></li>
                                <li><a href="{{ route('admin.barangays.index') }}">Barangay</a></li>
                                <li><a href="javascript:void(0)">Deliveries</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.index') }}">
                                <i data-feather="layers"></i>
                                <span data-key="t-dashboard">Auth Management</span>
                            </a>
                        </li>
                        <li>
                            <a class="@if (Route::is('admin.activity_logs.index')) active @endif"
                                href="{{ route('admin.activity_logs.index') }}">
                                <i data-feather="activity"></i>
                                <span data-key="t-dashboard">Activity Logs</span>
                            </a>
                        </li>
                        <li class="menu-title" data-key="t-apps">Settings</li>
                        <li>
                            <a class="@if (Route::is('profile.index')) active @endif"
                                href="{{ route('profile.index') }}">
                                <i data-feather="user"></i>
                                <span data-key="t-dashboard">Profile</span>
                            </a>
                        </li>





                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        {{--  End Left Sidebar Start --}}

        {{-- Main Content --}}

        <div class="main-content">
            @include('layouts.admin.modal')
            {{-- Page Content --}}
            <div class="page-content">
                @yield('content')
            </div>
            {{-- End Page Content --}}

            {{-- Footer --}}
            @if (Route::is('admin.dashboard.index'))
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Las Flores Flower Shop <i class="fas fa-leaf ms-1"></i>
                            </div>
                            <div class="col-sm-6">
                                {{-- <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Terms of
                                        Service</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </footer>
            @endif
            {{-- End Fotter --}}
        </div>

        {{-- End Main Content --}}

    </div>
    {{-- End Top Navbar --}}



    @include('layouts.admin.scripts')
    <script src="{{ asset('assets/js/admin/script.js') }}"></script>
    @yield('script')
    @routes()
</body>

</html>
