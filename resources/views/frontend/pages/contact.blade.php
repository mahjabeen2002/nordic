@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>Contact | Tech Scouts</title>
    <meta name="description" content="Contact Page" />
    <meta name="keywords" content="Tech Scouts, Contact" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Contact | Tech Scouts" />
    <meta property="og:description" content="Get in touch with Tech Scouts for more information or support." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="Contact | Tech Scouts" />
    <meta name="twitter:description" content="Get in touch with Tech Scouts for more information or support." />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Schema Markup (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "Contact | Tech Scouts",
        "description": "Get in touch with Tech Scouts for more information or support.",
        "url": "{{ url()->current() }}",
        "publisher": {
            "@type": "Organization",
            "name": "Tech Scouts",
            "logo": {
                "@type": "ImageObject",
                "url": "https://techscouts.se/Tech-Scouts-Logo1000x300.png"
            }
        }
    }
    </script>
</head>

@endsection
@section('content')
<!-- Page Header Section Start -->
<div class="page_header_default style_one">
    <div class="parallax_cover">
        <div class="simpleParallax"><img src="{{ asset('assets') }}/img/breadcrumb.jpg" alt="bg_image"
                 class="cover-parallax"></div>
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Contact Us
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="/">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->

<!-- Contact Section Start -->
<section class="contact-section">
    <!-- Spacing -->
    <div class="pd_top_90"></div>
    <!-- Spacing -->
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                <div class="contact_form_box_all type_one">
                    <div class="contact_form_box_inner">
                        <div class="contact_form_shortcode">
                            <form action="{{ URL::to('/contactuspost') }}" method="post" class="form-horizontal" id="contact-form">
                                @csrf
                                <div class="messages"></div>
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                               <label>Your Name<br /></label>
                                                <input type="text" name="name" id="name" placeholder="Your Name*" required="required" data-error="Enter Your Name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                               <label>Your Email<br /></label>
                                                <input type="text" name="email" id="email" placeholder="Email Address*" required="required" data-error="Enter Your Email Id">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                               <label>Contact No<br /></label>
                                                <input type="text" name="phone" placeholder="Contact No*" required="required">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                               <label>Your Message<br /></label>
                                                <textarea name="message" id="message" placeholder="Enter Your Message here" rows="3" required="required" data-error="Please, leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mg_top apbtn">
                                                <button class="theme_btn" type="submit">Get In Touch</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 pd_left_30">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <div class="before_title">Contact Info to</div>
                        <h2>Get in 
touch!</h2>
                        <p> We welcome the opportunity to discuss how we 
can support your organization’s IT strategy and 
operations. Whether your needs involve day-to
day IT management, service desk support, cloud 
transformation, or regulatory compliance, our 
team is ready to deliver..</p>
                    </div>
                </div>

                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="icon-placeholder"></span>
                        </div>
                        <div class="contnet">
                            <h3>Location</h3>
                            <p>
                                <a target="_blank" href="https://maps.app.goo.gl/s7bzYQttWBVKWe6RA?g_st=iw">
                                    
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Spacing -->
                <div class="pd_bottom_15"></div>
                <!-- Spacing -->
                
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contnet">
                            <h3>Phone</h3>
                            <p>
                                <a href="tel:46 767 091 141" target="_blank">+46 767 091 141</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Spacing -->
                <div class="pd_bottom_15"></div>
                <!-- Spacing -->
                
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="icon-email"></span>
                        </div>
                        <div class="contnet">
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:info@nordicithub.com" target="_blank">info@nordicithub.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Spacing -->
                <div class="pd_bottom_40"></div>
                <!-- Spacing -->
                
                <div class="social_media_v_one style_two">
                    <ul>
                        <li>
                            <a href="#"> <span class="fa fa-facebook"></span>
                                <small>facebook</small>
                            </a>
                        </li>
                        <li>
                            <a href=""> <span class="fa fa-linkedin"></span>
                                <small>linkedin</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Spacing -->
    <div class="pd_top_70"></div>
    <!-- Spacing -->
</section>
<!-- Contact Section End -->

<!-- Map Section Start -->
<section class="contact-map-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8120.160168953784!2d17.923472!3d59.41572699999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9ee0e3ca4f93%3A0xdc7e83afe5bf0c51!2sFinlandsgatan%2010%2C%20164%2074%20Kista%2C%20Sweden!5e0!3m2!1sen!2sus!4v1719211954444!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Spacing -->
    <div class="pd_top_90"></div>
    <!-- Spacing -->
</section>
<!-- Map Section End -->
@endsection