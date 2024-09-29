@extends('layouts.main.app')

@section('title', 'Las Flores Flower Shop | Register')

@section('content')

    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                {{-- start col --}}
                <div class="col-lg-7 col-md-7">
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
                <div class="col-lg-5 col-md-5">
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
                                        <h2 class="mb-0">Create Account</h2>
                                        <p class="text-muted mt-2">Registration is quick, easy, and free. Simply fill out
                                            the form below and start exploring the world of flowers today. We can't wait to
                                            share our passion for flowers with you!</p>
                                    </div>
                                    @include('layouts.includes.alert')
                                    <form class="needs-validation mt-4 pt-2 row" novalidate method="POST"
                                        action="{{ route('auth.register') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-6">
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" value="{{ old('first_name') }}" required>
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label>First Name</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="users"></i>
                                                </div>
                                            </div>
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text"
                                                    class="form-control @error('middle_name') is-invalid @enderror"
                                                    name="middle_name" value="{{ old('middle_name') }}" required>
                                                @error('middle_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label>Middle Name</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="users"></i>
                                                </div>
                                            </div>
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    name="last_name" value="{{ old('last_name') }}" required>
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label>Last Name</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="users"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <select class="form-select @error('gender') is-invalid @enderror"
                                                    name="gender" value="{{ old('gender') }}" id="input-gender"
                                                    required>

                                                    <option value=""></option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>

                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-gender">Gender</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="date"
                                                    class="form-control @error('birth_date') is-invalid @enderror"
                                                    name="birth_date" value="{{ old('birth_date') }}"
                                                    id="input-birth_date" required>
                                                @error('birth_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-birth_date">Birth Date</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="calendar"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}" id="input-address"
                                                    placeholder="Enter Complete Address" required>
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-address">Address</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="map"></i>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-floating form-floating-custom mb-4">
                                                <select class="form-select @error('barangay_id') is-invalid @enderror"
                                                    name="barangay_id" value="{{ old('barangay_id') }}"
                                                    id="input-barangay" required>

                                                    <option value=""></option>

                                                    @foreach ($municipalities as $municipality)
                                                        <optgroup label="[{{ $municipality->name }}]"></optgroup>
                                                        @foreach ($municipality->barangays as $barangay)
                                                            <option value="{{ $barangay->id }}">{{ $barangay->name }}
                                                            </option>
                                                        @endforeach
                                                    @endforeach

                                                </select>
                                                @error('barangay_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-barangay">Barangay</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="map"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="number" min="0"
                                                    class="form-control @error('contact') is-invalid @enderror"
                                                    name="contact" value="{{ old('contact') }}" id="input-contact"
                                                    placeholder="Ex. 09659312005" required>
                                                @error('contact')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-contact">Contact</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="phone"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" id="input-email"
                                                    placeholder="Enter Email" required>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-email">Email</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" id="input-password" placeholder="Enter Password"
                                                    required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="input-password">Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    name="password_confirmation" id="input-password"
                                                    placeholder="Enter Password" required>

                                                <label for="input-password">Confirm Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="mb-4 d-flex justify-content-center">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" name="terms_of_service"
                                                    value="" id="tos" checked>
                                                <label class="form-check-label text-sm" for="tos">
                                                    I have read the Terms of Service
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>
                                    </form>

                                    {{-- <div class="mt-4 pt-2 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
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
                                        <p class="text-muted mb-0">Already have an account ? <a
                                                href="{{ url('login') }}" class="text-primary fw-semibold"> Login </a>
                                        </p>
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
