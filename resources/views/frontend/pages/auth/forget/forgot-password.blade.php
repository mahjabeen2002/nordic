@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>Request Otp | BrainBattleAcademy</title>
        <meta name="description" content="Login Page" />
        <meta name="keywords" content="BrainBattleAcademy" />
    </head>
@endsection
@section('content')
    
    
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
                @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
                <h3 class="title">Send Verification Mail</h3>
                
                <form class="account-form" action="{{ route('forget.password.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" id="email_address" class="form-control" name="email"
                        placeholder="Enter Your  Email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    </div>
                              
                
                    <div class="form-group">
                        <button class="d-block custom-button"><span>Submit Now</span></button>
                    </div>
                </form>
              
            </div>
        </div>
    </div>
    <!-- ==========Login Section Section Ends Here========== -->



    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endsection
