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
       <!--<< Breadcrumb Section Start >>-->
      <div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/careers-banner.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s"> Our Jobs</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/" style="color:white">
                        Home Page
                        </a>
                    </li>
                    <li>
                        <i class="fal fa-minus"></i>
                    </li>
                    <li>
                        Our Jobs
                    </li>
                </ul>
            </div>
        </div>
    </div>


     <!--<< Service Section Start >>-->
        <section class="service-section fix section-padding section-bg-2">
          
            <div class="container">
                <div class="service-wrapper-2">
                    <div class="row justify-content-between">
                       
                        <div class="col-lg-12 mt-5 mt-lg-0">
                           <div class="row g-4">
                                @foreach ($jobs as $jobs)
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="service-box-items-2">
                                      
                                        <div class="content">
                                            <h3>
                                                <a href="{{ route('jobdetail', ['slug' => $jobs->slug]) }}">{{ $jobs->title }}
                                            </h3>
                                             <a href="{{ route('jobdetail', ['slug' => $jobs->slug]) }}" class="link-btn">
                                <span>read more</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
