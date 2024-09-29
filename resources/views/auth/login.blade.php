@extends('layouts.main.app')

@section('title', 'Las Flores Flower Shop | Login')

@section('content')
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">

                {{-- start col --}}
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-end">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div
                                            class="carousel-indicators auth-carousel carousel-indicators-rounded justify-content-center mb-0">
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1">
                                                <img src="{{ asset('img/noimg.svg') }}"
                                                    class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                            </button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2">
                                                <img src="{{ asset('img/noimg.svg') }}"
                                                    class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                            </button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3">
                                                <img src="{{ asset('img/noimg.svg') }}"
                                                    class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                            </button>
                                        </div>
                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="testi-contain text-center text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                    <h4 class="mt-4 fw-medium lh-base text-white">“I recently ordered a
                                                        bouquet of flowers for a special occasion from Las Flores Flower
                                                        Shop, and I couldn't have been happier with the results! The flowers
                                                        were fresh, vibrant, and beautifully arranged. The customer service
                                                        was also exceptional - the staff was friendly and helpful in
                                                        answering all of my questions. Overall, I highly recommend Las
                                                        Flores Flower Shop for anyone in need of high-quality and stunning
                                                        flowers for any occasion. Keep up the great work!”
                                                    </h4>
                                                    <div class="mt-4 pt-1 pb-5 mb-5">
                                                        <h5 class="font-size-16 text-white">Richard Drews
                                                        </h5>
                                                        <p class="mb-0 text-white-50">Customer</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-center text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                    <h4 class="mt-4 fw-medium lh-base text-white">“I have been a loyal
                                                        customer of Las Flores Flower Shop for years, and I can confidently
                                                        say that they never disappoint. Whether I'm looking for a simple
                                                        bouquet for a friend or an elaborate floral arrangement for a
                                                        special event, they always exceed my expectations. The staff is
                                                        knowledgeable, friendly, and always willing to go the extra mile to
                                                        make sure I'm satisfied with my purchase. I highly recommend Las
                                                        Flores Flower Shop to anyone looking for exceptional flowers and
                                                        top-notch customer service.”</h4>
                                                    <div class="mt-4 pt-1 pb-5 mb-5">
                                                        <h5 class="font-size-16 text-white">Rosanna French
                                                        </h5>
                                                        <p class="mb-0 text-white-50">Customer</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-center text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                    <h4 class="mt-4 fw-medium lh-base text-white">“I had a fantastic
                                                        experience with Las Flores Flower Shop. From browsing their online
                                                        selection to placing my order and receiving the delivery, everything
                                                        was seamless and easy. The flowers were absolutely gorgeous and
                                                        smelled amazing. The recipient of the bouquet was over the moon with
                                                        joy. I was impressed with the attention to detail and quality of the
                                                        arrangement. I will definitely be a repeat customer and highly
                                                        recommend Las Flores Flower Shop to anyone looking for beautiful,
                                                        high-quality flowers delivered with exceptional service.”</h4>
                                                    <div class="mt-4 pt-1 pb-5 mb-5">
                                                        <h5 class="font-size-16 text-white">Ilse R. Eaton</h5>
                                                        <p class="mb-0 text-white-50">Customer
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end col --}}

                {{-- start col --}}
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="{{ url('/') }}" class="d-block auth-logo">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="">
                                        <h2 class="mb-0">Sign in</h2>
                                        <p class="text-muted mt-2">With your account, you'll be able to
                                            access your saved products, track your orders, and view your purchase history.
                                        </p>
                                    </div>
                                    @include('layouts.includes.alert')
                                    <form class="mt-4 pt-2" action="{{ route('auth.login') }}" method="POST">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', 'admin@gmail.com') }}" id="input-username"
                                                name="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="input-username">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                            <input type="password"
                                                class="form-control pe-5 @error('password') is-invalid @enderror"
                                                name="password" id="password-input" placeholder="Enter Password"
                                                value="test1234">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0"
                                                id="password-show">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col text-end">
                                                <a class="text-sm text-primary font-size-15"
                                                    href="{{ route('password.request') }}">Forgot
                                                    Password?</a>
                                            </div>

                                        </div>



                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </form>

                                    {{-- <div class="mt-4 pt-2 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
                                        </div>

                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()"
                                                    class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}

                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Don't have an account ? <a
                                                href="{{ route('auth.register') }}" class="text-primary fw-semibold">
                                                Create an account </a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                {{-- end col --}}

            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
@endsection
@section('script')
    <script>
        const password_field = document.getElementById('password-input');
        document.getElementById('password-show').addEventListener('click', function() {
            return password_field.getAttribute('type') == "password" ?
                password_field.setAttribute('type', 'text') :
                password_field.setAttribute('type', 'password')
        })

        $('#main_login_nav').addClass('active')
    </script>
@endsection
