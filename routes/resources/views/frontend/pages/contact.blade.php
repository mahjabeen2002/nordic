@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>Contact | Grow Digital Care</title>
        <meta name="description" content="Contact Page" />
        <meta name="keywords" content="Growdigitalcare" />
    </head>
@endsection
@section('content')
<!--<< Breadcrumb Section Start >>-->
 <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="/">
                    Home Page
                    </a>
                </li>
                <li>
                    <i class="fal fa-minus"></i>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
</div>

<!--<< Contact Section Start >>-->
<section class="contact-main-area fix section-padding">
    <div class="container">
        <div class="contact-main-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title mb-2">
                            <span class="wow fadeInUp">Get In Touch</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h2>
                        </div>
                        <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                            Reach out to us for any inquiries, support, or feedback. We're here to help and look forward to connecting with you.
                        </p>
                        <div class="row g-4 mt-3">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="info-items">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Location</h5>
                                        <p><a target="_blank" href="https://maps.app.goo.gl/s7bzYQttWBVKWe6RA?g_st=iw">
                                         Finlandsgatan 10, 164 74 Kista, <br>Stockholm, Sweden 
                                         
                                       </a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                <div class="info-items">
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Phone</h5>
                                        <a href="tel:0046 (0) 12221116" target="_blank">0046 (0) 12221116 <br>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                <div class="info-items">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Email</h5> 
                                        <a class="link"href="mailto:info@techscouts.se" target="_blank">info@techscouts.se</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".9s">
                                <div class="info-items">
                                    <div class="icon">
                                        <i class="fad fa-share-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Social</h5>
                                        <div class="social-icon d-flex align-items-center">
                                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="https://www.linkedin.com/company/tech-scouts-sweden-ab/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-image wow fadeInUp" data-wow-delay=".4s">
                            <img src="assets/img/contact.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-form-items">
                        <div class="contact-title">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Fill Up The Form</h3>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form action="{{ URL::to('/contactuspost') }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name*">
                                        <div class="icon">
                                            <i class="fal fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email" placeholder="Email Address*">
                                        <div class="icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="email" placeholder="Contact No*">
                                        <div class="icon">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Enter Your Messege here"></textarea>
                                        <div class="icon">
                                            <i class="fal fa-edit"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                    <button type="submit" class="theme-btn">
                                        <span><i class="fal fa-paper-plane"></i>Get In Touch</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Map Section Start >>-->
<div class="map-section">
    <div class="google-map wow fadeInUp" data-wow-delay=".7s">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8120.160168953784!2d17.923472!3d59.41572699999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9ee0e3ca4f93%3A0xdc7e83afe5bf0c51!2sFinlandsgatan%2010%2C%20164%2074%20Kista%2C%20Sweden!5e0!3m2!1sen!2sus!4v1719211954444!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection
