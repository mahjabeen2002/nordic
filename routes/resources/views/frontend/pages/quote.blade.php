@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>Get A Quote | Grow Digital Care</title>
        <meta name="description" content="Get A Quote Page" />
        <meta name="keywords" content="Growdigitalcare" />
    </head>
@endsection
@section('content')
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"> Get In Touch</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="/">
                 Home
                    </a>
                </li>
                <li>
                    <i class="fal fa-minus"></i>
                </li>
                <li>
                   Get In Touch
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ./ Page Header -->


<section class="team-contact-area ">
    <div class="container">
        <div class="team-contact-wrapper">
            <div class="row">
             
                <div class="col-lg-12">
                    <div class="contact-box">
                        <div class="contact-title">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Need Help For Project!</h3>
                            <p class="wow fadeInUp" data-wow-delay=".5s">We are ready to help your next projects, let’s work together</p>
                        </div>
                        <div class="contact-form-items">
                            <form action="{{ route('quote.post') }}" method="post"  class="form-horizontal">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Name">
                                            <div class="icon">
                                                <i class="far fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <input type="text" name="company_name" id="company_name" placeholder="Company Name">
                                            <div class="icon">
                                                <i class="far fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email" placeholder="Email">
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <select class="form-control" name="services_id" id="pet-select">
                                                <option value="">Select Service</option>
                                                @foreach ($services as $fs)
                                                        <option value="{{ $fs->id }}">{{ $fs->id }}. {{ $fs->name }}</option>
                                                        @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="address" id="address" placeholder="Address">
                                            <div class="icon">
                                                <i class="far fa-address"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="contact_no" id="contact_no" placeholder="Contact No">
                                            <div class="icon">
                                                <i class="far fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <textarea name="comments" id="comments" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".4s">
                                        <button type="submit" class="theme-btn center d-block">
                                           <span>
                                            Send Us Messages
                                            <i class="fas fa-chevron-right"></i>
                                           </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
