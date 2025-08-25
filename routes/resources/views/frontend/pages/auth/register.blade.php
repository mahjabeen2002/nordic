@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>Register | BrainBattleAcademy</title>
        <meta name="description" content="Media Center Page" />
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




    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">kittons Register Now</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        Register Now
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
                <h3 class="title">Register Now</h3>
                <form class="account-form" action="{{ route('register.process') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                        <input type="file" placeholder="Profile Image" name="profile_image" style="  padding: 15px;">
                   
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" />
                        @error('name')
                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                        @error('email')
                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" />
                        @error('password')
                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone_number" placeholder="WhatsApp  Number"
                            value="{{ old('phone_number') }}" />
                        @error('phone_number')
                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="number" name="age" placeholder="Age" value="{{ old('age') }}" />
                        @error('age')
                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea name="address" placeholder="Address">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="d-block custom-button" name="submit" type="submit"><span>Register</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Are you a member? <a href="login.html">Login</a></span>
                    <span class="or"><span>or</span></span>
                    <h5 class="subtitle">Register With Social Media</h5>
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
