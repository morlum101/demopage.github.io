<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Las Flores Flower Shop')</title>
    @include('layouts.main.styles')
    <style>
        input:focus,
        textarea:focus {
            border: 2px groove #e66767 !important;
        }
    </style>
</head>

<body data-topbar="dark">

    @if (!Route::is('auth.login') && !Route::is('auth.register') && !Route::is('password.*'))
        {{-- Nav --}}
        <nav class="navbar navbar-standard navbar-expand-lg navbar-dark navbar-glass-shadow d-none d-lg-block"
            style="background-image: none; background-color: #ea8685; transition: none 0s ease 0s;">
            <div class="container">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link text-white"
                            href="mailto: flowershop.lasflores@gmail.com"><small> <i
                                    class="fas fa-envelope me-2 text-white"></i>
                                hubahib.rickssie15@gmail.com</small></a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="tel:+639761177391"><small> <i
                                    class="fas fa-phone me-2 text-white"></i> +639517147237 </small></a></li>

                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.facebook.com/your-facebook-username" target="_blank">
                            <small><i class="fab fa-facebook"></i></small></a></li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.instagram.com/" target="_blank"><small><i class="fab fa-instagram"></i></small></a></li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://x.com/i/flow/login" target="_blank"><small><i class="fab fa-twitter"></i></small></a></li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.youtube.com/@PaoLUL_" target="_blank"><small><i class="fab fa-youtube"></i></small></a></li>
                </ul>


            </div>
        </nav>
        {{-- Nav --}}
        <!-- Navbar -->
        <nav id="navbar-main"
            class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg bg-primary py-2 navbar-dark">
            <div class="container">
                <a class="" href="/">
                    <img class="img-fluid rounded-circle" src="{{ asset('img/logo/logo.png') }}" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            {{-- <div class="col-6 collapse-brand">
                                <a href="/">
                                    <img class="img-fluid" src="{{ asset('img/logo/logo.png') }}">
                                </a>
                            </div> --}}
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item me-3">
                            <a href="/" class="nav-link">
                                <span class="nav-link-inner--text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="javascript:void(0)" class="nav-link">
                                <span class="nav-link-inner--text">About</span>
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="javascript:void(0)" class="nav-link">
                                <span class="nav-link-inner--text">Products</span>
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a href="javascript:void(0)" class="nav-link">
                                <span class="nav-link-inner--text">Services</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <span class="nav-link-inner--text">Contact Us</span>
                            </a>
                        </li>

                    </ul>
                    <hr class="d-lg-none" />
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('auth.login') }}" class="nav-link" id="main_login_nav">
                                    <span class="nav-link-inner--text">Login</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('auth.register') }}" class="nav-link" id="main_register_nav">
                                    <span class="nav-link-inner--text">Register</span>
                                </a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img src="{{ handleNullAvatar(auth()->user()->avatar_profile) }}"
                                                class="avatar rounded-circle" alt="Image placeholder">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Settings</h6>
                                    </div>
                                    @if (auth()->user()->hasRole('admin'))
                                        <a href="{{ route('admin.dashboard.index') }}" class="dropdown-item">
                                            <i class="ni ni-tv-2"></i>
                                            <span>Dashboard</span>
                                        </a>
                                        <a href="{{ route('profile.index') }}" class="dropdown-item">
                                            <i class="ni ni-single-02"></i>
                                            <span>Profile</span>
                                        </a>
                                    @else
                                        <a href="{{ route('profile.index') }}" class="dropdown-item">
                                            <i class="ni ni-single-02"></i>
                                            <span>Profile</span>
                                        </a>
                                    @endif

                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"
                                        onclick="confirm('Do you want to Logout?', '', 'Yes').then(res => res.isConfirmed ? $('#logout').submit() : false)">
                                        <i class="fas fa-power-off"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form action="{{ route('auth.logout') }}" method="post" id="logout">@csrf</form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    @endif

    @yield('content')

    @if (!Route::is('auth.login') && !Route::is('auth.register') && !Route::is('password.*'))
        @include('layouts.main.footer')
    @endif

    @include('layouts.main.scripts')
    @yield('script')
</body>

</html>
