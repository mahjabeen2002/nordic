@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>Our Jobs | Tech Scouts</title>
    <meta name="description" content="Explore job opportunities at Tech Scouts, a leading software company." />
    <meta name="keywords" content="Tech Scouts, Job Opportunities, Software Company, Careers" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Our Jobs | Tech Scouts" />
    <meta property="og:description" content="Explore job opportunities at Tech Scouts, a leading software company." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="Our Jobs | Tech Scouts" />
    <meta name="twitter:description" content="Explore job opportunities at Tech Scouts, a leading software company." />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Schema Markup (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Our Jobs | Tech Scouts",
        "url": "{{ url()->current() }}",
        "description": "Explore job opportunities at Tech Scouts, a leading software company.",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        }
    }
    </script>
</head>

@endsection
@section('content')

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
                          Career
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Career</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->


   <!-- Start Jobs Section -->
<section class="job-section" >
    <!-- Spacing -->
    <div class="pd_top_90"></div>
    <!-- Spacing -->

    <div class="container">
        <div class="row grid_layout">
            @foreach ($jobs as $job)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 grid_box d-flex">
                <div class="news_box style_one blog_classic has_images w-100" style="min-height: 400px; display: flex; flex-direction: column;">
                    <div class="image img_hover-1" style="width:100%;height:100%;" >
                        <a href="{{ route('jobdetail', ['slug' => $job->slug]) }}">
                            <img src="{{ asset('/uploads/jobs/' . $job->image) }}" alt="{{ $job->title }}"
                                 style="width: 100%; height: 250px; object-fit: cover;">
                        </a>
                        <a class="arrow" href="{{ route('jobdetail', ['slug' => $job->slug]) }}">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                    <div class="content_box">
                        <div class="date">
                            <span class="date_in_number">{{ $job->created_at->format('d') }}</span>
                            <span class="date_in_month">{{ $job->created_at->format('M') }}</span>
                        </div>

                        <h2 class="title">
                            <a href="{{ route('jobdetail', ['slug' => $job->slug]) }}">{{ $job->title }}</a>
                        </h2>

                        <a href="{{ route('jobdetail', ['slug' => $job->slug]) }}" class="read-more-link">
                            View Details <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>

    <!-- Spacing -->
    <div class="pd_bottom_90"></div>
    <!-- Spacing -->
</section>
<!-- End Jobs Section -->
@endsection
