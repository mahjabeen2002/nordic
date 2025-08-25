@extends('frontend.layouts.layout')
@section("title")
<head>
<title>Login | BrainBattleAcademy</title>
<meta name="description" content="Login Page" />
<meta name="keywords" content="BrainBattleAcademy" />
</head>
@endsection
@section('content')
<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: 25px;
  position: relative;
  z-index: 2;
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

@if(Session::has('success'))
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
                    <h3 class="mb-30">Send Otp</h3>
                    <form class="login-form" action="{{ route('reset.password.post') }}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-box mb--30">
                            <input type="email" name="email" id="email_address"  placeholder="Enter Your  Email" />
                            @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                        </div>
                        <div class="input-box mb--30">
                            <input type="password" id="password" name="password" placeholder=" Enter Your Password" />
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon password"></span>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        </div>
                        <div class="input-box mb--30">
                            <input type="password" id="password-confirm"  name="password_confirmation"
                             placeholder=" Enter Confirm Password" />
                            <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon password-confirm"></span>
                            @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                        </div>
                        <button class="rn-btn edu-btn w-100 mb--30" name="submit" type="submit">
                            <span>Send</span>
                        </button>
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
                <form class="account-form" action="{{ route('reset.password.post') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <input type="email" name="email" id="email_address"  placeholder="Enter Your  Email" />
                            @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder=" Enter Your Password" />
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon password"></span>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                        <input type="password" id="password-confirm"  name="password_confirmation"
                        placeholder=" Enter Confirm Password" />
                       <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon password-confirm"></span>
                       @if ($errors->has('password_confirmation'))
                       <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                   @endif
                    </div>
                    <div class="form-group">
                        <button class="d-block custom-button"><span>Get Started Now</span></button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!-- ==========Login Section Section Ends Here========== -->




<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script>
    $(".password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
<script>
    $(".password-confirm").click(function() {
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