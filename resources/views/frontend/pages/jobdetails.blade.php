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
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image    : url('{{ asset('assets') }}/img/careers-banner.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"> Job Detail</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="/" style="color:white">
                 Home
                    </a>
                </li>
                <li>
                    <i class="fal fa-minus"></i>
                </li>
                <li>
                    Job Detail
                </li>
            </ul>
        </div>
    </div>
</div>
<br>

    <section class="project-details pt-100 pb-100">
        <div class="container">
            <div class="project-details-thumb">
                <div class="shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
                <!--<img src="{{ asset('/uploads/jobs/' . $jobs->image) }}" style="width: 1200px;height: 650px;"-->
                <!--    alt="{{ $jobs->title }}" />-->
            </div>
            <br>
            <div class="project-details-content">
                <h3 class="title">{{ $jobs->title }}</h3>

                <p>
                    {!! html_entity_decode($jobs->details) !!}</p>
            </div>

            <div class="apply-section">
                <h3>How to Apply</h3>
                <p>If you are interested in this position, please apply by uploading your CV through the button below or
                    applying through LinkedIn.</p>

                <br>
                <div class="header-right" style="text-align: center">
                    <!-- LinkedIn Button -->
                
                    <a href="{{ url('auth/linkedin') }}" class="theme-btn mt-5">
                        <span class="mb-0">
                            <i class="fab fa-linkedin"></i> Apply with LinkedIn
                            <i class="fas fa-chevron-right"></i>
                        </span>
                     </a>
                </div>
                <br>
                <!-- Resume Upload Form -->
                <form action="{{ route('upload.resume', ['slug' => $jobs->slug]) }}" method="post"
                    enctype="multipart/form-data" class="apply-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="resume" class="form-label">Upload Resume:</label>
                            <input type="file" class="form-control" id="resume" name="cv">
                        </div>

                        <!-- Fields for LinkedIn Data -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ auth()->user()->name ?? '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ auth()->user()->email ?? '' }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                value="{{ $linkedinData['phone'] ?? '' }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">City:</label>
                            <input type="text" class="form-control" id="city" name="city"
                                value="{{ $linkedinData['city'] ?? '' }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Country:</label>
                            <input type="text" class="form-control" id="country" name="country"
                                value="{{ $linkedinData['country'] ?? '' }}">
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control descriptionid1" placeholder="Cover Letter" row="2" name="coverletter"></textarea>

                        </div>
                    </div>
                    <div class="header-right mt-3" style="text-align: center">
                        <!-- LinkedIn Button -->


                        <button class="theme-btn mt-5">
                            <span class="mb-0">
                                Submit
                                Application
                                <i class="fas fa-chevron-right"></i>
                            </span>
                         </button>
                        
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

  

    <!--<< Case Studies Section Start >>-->
  
   
@endsection
