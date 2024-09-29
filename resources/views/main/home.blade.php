@extends('layouts.main.app')

@section('content')
    {{-- Section 1 --}}
    <section class="bg-primary">
        <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselControls" data-bs-slide-to="0" class="active" aria-current="true">
                </li>
                <li data-bs-target="#carouselControls" data-bs-slide-to="1">
                </li>
                <li data-bs-target="#carouselControls" data-bs-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active carousel-item-start" id="carousel-item-1">
                    <img class="d-block w-100" src="{{ asset('img/main/section-1/1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item carousel-item-next carousel-item-start" id="carousel-item-2">
                    <img class="d-block w-100" src="{{ asset('img/main/section-1/2.png') }}" alt="First slide">

                </div>
                <div class="carousel-item" id="carousel-item-3">
                    <img class="d-block w-100" src="{{ asset('img/main/section-1/3.png') }}" alt="First slide">

                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="javascript:void(0)" role="button"
                data-bs-target="#carouselControls" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="javascript:void(0)" role="button"
                data-bs-target="#carouselControls" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </section>
    {{-- End Section 1 --}}


    {{-- Section 2 --}}
    <section class="py-2 py-md-5">
        <div class="container text-center">
            <h1 class="mb-4 text-primary font-weight-bold">How to start ?</h1>
            <p class="card-text">Let us help you with our 3 simple steps procedure.</p>
            <br><br>
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="card shadow-sm border-white w-100">
                        <div class="card-body d-flex and flex-column">
                            <p class="text-center text-primary card-title"> Step 1 </p>
                            <p class="text-center text-primary card-text">Login / Sign up</p>
                            <p class="card-text">
                                Signing up is quick and easy - simply fill out the form below with your information, and
                                you'll be on your way to exploring our online selection of beautiful blooms.
                            </p>
                        </div>
                        <img class=" card-img-bottom" src="{{ asset('img/main/section-2/1.svg') }}" alt="authentication">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 shadow-sm border-white">
                        <div class="card-body">
                            <p class="text-center text-primary card-title"> Step 2 </p>
                            <p class="text-center text-primary card-text">Add item</p>
                            <p class="card-text">Simply order your item from your cart and wait for Las Flores Flower Shop
                                to confirm
                                your order transaction.</p>
                        </div>
                        <img class=" card-img-bottom" src="{{ asset('img/main/section-2/2.svg') }}" alt="add_item">
                    </div>
                    @guest
                        <a class="btn btn-lg btn-primary text-white d-none d-sm-block" href="/register">Shop Now <i
                                class="fas fa-shopping-bag ml-1"></i></a>
                    @endguest
                </div>
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="card shadow-sm border-white w-100">
                        <div class="card-body d-flex and flex-column">
                            <p class="text-center text-primary card-title"> Step 3 </p>
                            <p class="text-center text-primary card-text">Pick Up</p>
                            <p class="card-text">Once Las Flores Flower Shop has confirmed your order, you will receive an
                                order update
                                from your request.
                                <span><q>Very easy </q></span>
                            </p>
                        </div>
                        <img class=" card-img-bottom" src="{{ asset('img/main/section-2/3.svg') }}" alt="puckup">
                    </div>
                </div>
            </div>
        </div>
        <center>
            <hr class="w-75">
        </center>
    </section>
    {{-- End Section 2 --}}

    {{-- Section 3 --}}
    <section class="bg-white py-5">
        <div class="container">
            <h1 class="d-md-block text-dark"> Our Shop
                <a class="float-end h3 font-weight-normal" href="#">View All</a>
            </h1>
            <br>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/1.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product One
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/2.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product Two
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/3.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product Three
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/2.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product Four
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/1.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product One
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/2.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product Two
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/3.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product Three
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 d-flex align-self-stretch ">
                    <div class="card w-100 card-shadow-none hoverable">
                        <img class="card-img-top" src="{{ asset('img/flowers/2.png') }}" width="120" title="Rose"
                            alt="product">
                        <div class="card-body d-flex and flex-column">
                            <a class="card-text text-center mb-2" href="javascript:void(0)" title="Rose">
                                Sample Product Four
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <hr class="w-75">
        </center>
    </section>
    {{-- End Section 3 --}}


    {{-- Section 4 --}}
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('img/main/section-3/contact.svg') }}" alt="contact">
                </div>
                <div class="col-md-6 py-0 py-md-5 pl-md-5">
                    <h1 class="mb-2 font-weight-normal text-primary">Get in Touch</h1>
                    <p>
                        We'd love to hear from you and assist with any questions or concerns you may
                        have. Fill out the form below and we'll get back to you soon.
                    </p>
                    <br>
                    <form action="#" class="ftco-animate fadeInUp ftco-animated">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"
                                        spellcheck="false"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary py-3 px-5">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Section 4 --}}

    {{-- Section 5 --}}
    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15466.602966748627!2d121.4416818!3d14.2735792!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397fd69dc45d553%3A0x202871d65cd6d7db!2sLas%20Flores%20de%20Pagsanjan%20Flowershop!5e0!3m2!1sen!2sph!4v1681545920417!5m2!1sen!2sph"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    {{-- Section 5 --}}
@endsection
