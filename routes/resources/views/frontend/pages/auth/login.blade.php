@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>Login | BrainBattleAcademy</title>
        <meta name="description" content="Login Page" />
        <meta name="keywords" content="BrainBattleAcademy" />
    </head>
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif


    {{-- <div class="main-wrapper">
        <div class="login-register-page-wrapper edu-section-gap bg-color-white">
            <div class="container checkout-page-style">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="login-form-box">
                            <h3 class="mb-30">Login</h3>
                            <form class="login-form" action="{{ route('login.process') }}" method="POST">
                                @csrf
                                <div class="input-box mb--30">
                                    <input type="email" name="email" placeholder="Enter Your  Email" />
                                    @error('email')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" name="password" placeholder=" Enter Your Password" />
                                    @error('password')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="comment-form-consent input-box mb--30">
                                    <input id="checkbox-1" type="checkbox" />
                                    <label for="checkbox-1">Remember Me</label>
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" name="submit" type="submit">
                                    <span>Login</span>
                                </button>
                                <div class="input-box">
                                    <a href="{{ route('forget.password.get') }}" class="lost-password">Lost your
                                        password?</a>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    
    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">kitton Login Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        Login
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Login Section Section Starts Here========== -->
    <div class="login-section padding-top padding-bottom">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">Login</h3>
                <form class="account-form" action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email">
                        @error('email')
                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                    @enderror
                    </div>
                              
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                        @error('password')
                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                    @enderror
                    </div>
                   
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                            <a href="{{ route('forget.password.get') }}">Forget Password?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="d-block custom-button"><span>Submit Now</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Don’t Have any Account? <a href="registration.html">Sign
                            Up</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Login With Social Media</h5>
                    <ul class="social-icons justify-content-center">
                        <li>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Login Section Section Ends Here========== -->


@endsection
