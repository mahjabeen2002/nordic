@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>Get A Quote | Tech Scouts</title>
    <meta name="description" content="Get a quote for your project with Tech Scouts. We offer tailored solutions for all your tech needs." />
    <meta name="keywords" content="Tech Scouts, Get a Quote, Custom Solutions, Technology Services" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Get A Quote | Tech Scouts" />
    <meta property="og:description" content="Get a quote for your project with Tech Scouts. We offer tailored solutions for all your tech needs." />
    <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta property="og:url" content="https://techscouts.se/get-a-quote" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:title" content="Get A Quote | Tech Scouts" />
    <meta name="twitter:description" content="Get a quote for your project with Tech Scouts. We offer tailored solutions for all your tech needs." />
    <meta name="twitter:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Get A Quote | Tech Scouts",
      "description": "Get a quote for your project with Tech Scouts. We offer tailored solutions for all your tech needs.",
      "url": "https://techscouts.se/get-a-quote",
      "image": "https://techscouts.se/Tech-Scouts-Logo1000x300.png",
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
<!-- Page Header Section -->
<div class="page_header_default style_one">
    <div class="parallax_cover">
        <div class="simpleParallax">
            <img src="{{ asset('assets') }}/img/breadcrumb.jpg" alt="bg_image" class="cover-parallax">
        </div>
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">Get A Quote</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="/">Home</a></li>
                            <li class="active">Get A Quote</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quote Form Section -->
<section class="contact-section">
    <div class="pd_top_90"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-4">
                <h2 class="section-title">Need Help For Project!</h2>
                <p class="section-subtitle">We are ready to help your next projects, let’s work together</p>
            </div>
            <div class="col-md-12">
                <div class="contact_form_box_all type_one">
                    <div class="contact_form_box_inner">
                        <div class="contact_form_shortcode">
                            <form action="{{ route('quote.post') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" name="name" placeholder="Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Service</label>
                                            <select name="services_id" required>
                                                <option value="">Select Service</option>
                                                @foreach ($services as $fs)
                                                    <option value="{{ $fs->id }}">{{ $fs->id }}. {{ $fs->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" name="contact_no" placeholder="Contact No*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea name="comments" rows="4" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="theme_btn">Send Us Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pd_bottom_90"></div>
</section>
@endsection
