@extends('frontend.layouts.layout')

@section('title')

<head>
    <title>{{ $jobs->title }} | Tech Scouts</title>
    <meta name="description" content="{{ html_entity_decode($jobs->meta_description) }}" />
    <meta name="keywords" content="{{ $jobs->meta_keyword }}" />
    <meta property="og:image" content="{{ asset('/uploads/jobs/' . $jobs->image) }}" />
    <meta property="og:url" content="{{ url('/jobdetail/' . $jobs->slug) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="{{ html_entity_decode($jobs->meta_description) }}" />
    <meta property="og:title" content="{{ $jobs->title }}" />
    <meta property="og:site_name" content="Tech Scouts">

    <!-- Job Posting Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "JobPosting",
      "title": "{{ $jobs->title }}",
      "description": "{{ html_entity_decode($jobs->meta_description) }}",
      "identifier": {
        "@type": "PropertyValue",
        "name": "Tech Scouts",
        "value": "{{ $jobs->slug }}"
      },
      "datePosted": "{{ $jobs->created_at->toDateString() }}",
      "hiringOrganization": {
        "@type": "Organization",
        "name": "Tech Scouts",
        "sameAs": "https://techscouts.se"
      },
      "jobLocation": {
        "@type": "Place",
        "name": "{{ $jobs->location ?? 'N/A' }}",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "{{ $jobs->location ?? 'N/A' }}",
          "addressCountry": "SE"
        }
      },
      "employmentType": "{{ $jobs->employment_type ?? 'Full-time' }}",
      "salaryCurrency": "SEK",
      "baseSalary": {
        "@type": "MonetaryAmount",
        "value": {
          "@type": "QuantitativeValue",
          "value": "{{ $jobs->salary ?? '0' }}",
          "unitText": "YEAR"
        }
      },
      "url": "{{ url('/jobdetail/' . $jobs->slug) }}",
      "image": "{{ asset('/uploads/jobs/' . $jobs->image) }}"
    }
    </script>
</head>

@endsection

<style>
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .btn {
        border: 2px solid gray;
        color: gray;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
    }

    .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    .upload-cv-label {
        margin-right: 20px;
    }

    .apply-form {
        margin-top: 20px;
    }
</style>


@section('content')
<style>
    :root {
        --primary-color: #009c9d;
        --secondary-color: #175CFF;
        --dark-color: #1a1d2b;
        --light-color: #f8f9fa;
        --gray-color: #6c757d;
        --border-color: #eaeaea;
    }

    .career-detail-section {
        padding: 80px 0;
        background-color: #f9fafb;
    }

    .job-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .job-header h1 {
        font-size: 36px;
        color: var(--dark-color);
        margin-bottom: 20px;
        font-weight: 700;
    }

    .job-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .job-content {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.05);
        margin-bottom: 40px;
    }

    .job-content h3 {
        font-size: 28px;
        color: var(--dark-color);
        margin-bottom: 25px;
        font-weight: 600;
    }

    .job-content p {
        margin-bottom: 20px;
        font-size: 17px;
        color: #555;
    }

    .share-section {
        text-align: center;
        margin: 40px 0;
    }

    .share-section h4 {
        font-size: 20px;
        margin-bottom: 20px;
        color: var(--dark-color);
        font-weight: 500;
    }

    .social-share {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        transition: all 0.3s;
        text-decoration: none;
    }

    .social-btn:hover {
        transform: translateY(-3px);
    }

    .facebook { background-color: #3b5998; }
    .twitter { background-color: #1da1f2; }
    .whatsapp { background-color: #25d366; }
    .linkedin { background-color: #0077b5; }

    .apply-section {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.05);
        margin-top: 30px;
    }

    .apply-section h3 {
        font-size: 24px;
        color: var(--dark-color);
        margin-bottom: 20px;
        font-weight: 600;
        text-align: center;
    }

    .apply-section p {
        text-align: center;
        margin-bottom: 30px;
        color: #555;
        font-size: 17px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        margin: 30px 0;
    }

    .btn-linkedin {
        background-color: var(--secondary-color);
        color: white;
        padding: 14px 32px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-linkedin:hover {
        background-color: #0d4bd3;
        color: white;
        transform: translateY(-2px);
    }

    .apply-form .title_all_box {
        text-align: center;
        margin-bottom: 40px;
    }

    .apply-form .title_all_box h2 {
        font-size: 28px;
        color: var(--dark-color);
        margin-bottom: 15px;
        font-weight: 700;
    }

    .apply-form .title_all_box p {
        color: var(--gray-color);
        max-width: 700px;
        margin: 0 auto;
        font-size: 17px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: var(--dark-color);
    }

    .form-control {
        width: 100%;
        padding: 14px 15px;
        border: 1px solid var(--border-color);
        border-radius: 5px;
        font-size: 16px;
        transition: all 0.3s;
        background-color: #f8f9fa;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(0, 156, 157, 0.1);
        background-color: white;
    }

    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }

    .btn-submit {
        background-color: var(--secondary-color);
        color: white;
        border: none;
        padding: 14px 30px;
        font-size: 17px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s;
        display: block;
        margin: 30px auto 0;
        width: 250px;
    }

    .btn-submit:hover {
        background-color: #0d4bd3;
        transform: translateY(-2px);
    }

    .speak-btn {
        background-color: var(--primary-color);
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s;
        margin-bottom: 20px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .speak-btn:hover {
        background-color: #008080;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .form-col {
        padding: 0 15px;
        width: 100%;
    }

    @media (min-width: 768px) {
        .form-col {
            width: 50%;
        }

        .form-col.full {
            width: 100%;
        }
    }

    .divider {
        text-align: center;
        margin: 30px 0;
        position: relative;
    }

    .divider:before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;
        background-color: var(--border-color);
        z-index: 1;
    }

    .divider span {
        position: relative;
        display: inline-block;
        padding: 0 20px;
        background: white;
        z-index: 2;
        color: var(--gray-color);
        font-size: 16px;
    }

    .required:after {
        content: " *";
        color: #e74c3c;
    }

    .page_header_default {
        position: relative;
        padding: 120px 0 80px;
        background: linear-gradient(135deg, #1a1d2b 0%, #2c3e50 100%);
        color: white;
        text-align: center;
        overflow: hidden;
    }

    .page_header_content {
        position: relative;
        z-index: 2;
    }

    .banner_title_inner .title_page {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .breadcrumbs {
        display: inline-block;
    }

    .breadcrumbs ul {
        display: flex;
        list-style: none;
        justify-content: center;
    }

    .breadcrumbs li {
        margin: 0 5px;
        font-size: 16px;
    }

    .breadcrumbs li a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: all 0.3s;
    }

    .breadcrumbs li a:hover {
        color: var(--primary-color);
    }

    .breadcrumbs li.active {
        color: var(--primary-color);
    }
</style>

   <!-- Start Page Header -->
<div class="page_header_default style_one" >
    <div class="parallax_cover">
        <img src="{{ asset('assets') }}/images/page-header-default.jpg" alt="Media Center Background" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                          Career Details
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="/careers">Careers</a></li>
                            <li class="active">{{ $jobs->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->





<!-- Career Detail Section -->
<section class="career-detail-section">
    <div class="container">
        <div class="job-header">
            <h1>{{ $jobs->title }}</h1>
            <p>Join our team to build cutting-edge digital solutions for clients worldwide</p>
        </div>

        <img src="{{ asset('/uploads/jobs/' . $jobs->image) }}" alt="{{ $jobs->title }}" class="job-image">

        <button class="speak-btn" onclick="speakText('en')">
            <i class="fas fa-headphones"></i> Listen to this page
        </button>

        <div class="job-content">
            <h3>About the Position</h3>
            {!! html_entity_decode($jobs->details) !!}
        </div>

        <div class="share-section">
            <h4>Share this opportunity:</h4>
            <div class="social-share">
                <?php
                $url = urlencode("http://growdigitalcare.com/jobdetail/$jobs->slug");
                ?>
                <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ $url }}" class="social-btn facebook" title="Share on Facebook">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
                </a>

                <a target="_blank" href="https://twitter.com/share?url={{ $url }}" class="social-btn twitter" title="Tweet on Twitter">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
</svg>
                </a>


                <a href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('hi hello'); ?> {{ $url }}" target="_blank" title="Share on Whatsapp" class="social-btn whatsapp">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
                </a>
                <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}" class="social-btn linkedin" title="Share on LinkedIn">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin " viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
</svg>
                </a>
            </div>
        </div>

        <div class="apply-section">
            <h3>How to Apply</h3>
            <p>If you are interested in this position, please apply by uploading your CV through the button below or applying through LinkedIn.</p>

            <div class="btn-container">
                <a href="{{ url('auth/linkedin') }}" class="btn-linkedin">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
</svg>  Apply with LinkedIn
                </a>
            </div>

            <div class="divider">
                <span>OR</span>
            </div>

            <div class="apply-form">
                <div class="title_all_box">
                    <h2>Submit Your Application</h2>
                    <p>Fill out the form below to apply directly for this position</p>
                </div>

                <form action="{{ route('upload.resume', ['slug' => $jobs->slug]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="name" class="required">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                       placeholder="Your full name" required
                                       value="{{ auth()->user()->name ?? '' }}">
                            </div>
                        </div>

                        <div class="form-col">
                            <div class="form-group">
                                <label for="email" class="required">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Your email address" required
                                       value="{{ auth()->user()->email ?? '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="phone" class="required">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control"
                                       placeholder="Your phone number" required
                                       value="{{ $linkedinData['phone'] ?? '' }}">
                            </div>
                        </div>

                        <div class="form-col">
                            <div class="form-group">
                                <label for="resume" class="required">Upload Resume</label>
                                <input type="file" id="resume" name="cv" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="city" class="required">City</label>
                                <input type="text" id="city" name="city" class="form-control"
                                       placeholder="Your city" required
                                       value="{{ $linkedinData['city'] ?? '' }}">
                            </div>
                        </div>

                        <div class="form-col">
                            <div class="form-group">
                                <label for="country" class="required">Country</label>
                                <input type="text" id="country" name="country" class="form-control"
                                       placeholder="Your country" required
                                       value="{{ $linkedinData['country'] ?? '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col full">
                            <div class="form-group">
                                <label for="coverletter">Cover Letter</label>
                                <textarea id="coverletter" name="coverletter" class="form-control"
                                          placeholder="Tell us why you're a great fit for this position..."></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Text-to-speech functionality
    function speakText(lang) {
        const content = document.querySelector('.job-content').innerText;
        const utterance = new SpeechSynthesisUtterance(content);
        utterance.lang = lang;
        utterance.rate = 1;
        utterance.pitch = 1;
        speechSynthesis.speak(utterance);
    }
</script>
@endsection
