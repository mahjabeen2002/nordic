@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>Service | Tech Scouts</title>
    <meta name="description" content="Explore the range of services offered by Tech Scouts, from custom software development to tech consulting. Get in touch for tailored solutions." />
    <meta name="keywords" content="Tech Scouts, Software Development, Tech Consulting, Custom Solutions, IT Services" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Service | Tech Scouts" />
    <meta property="og:description" content="Explore the range of services offered by Tech Scouts, from custom software development to tech consulting. Get in touch for tailored solutions." />
    <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta property="og:url" content="https://techscouts.se/service" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:title" content="Service | Tech Scouts" />
    <meta name="twitter:description" content="Explore the range of services offered by Tech Scouts, from custom software development to tech consulting. Get in touch for tailored solutions." />
    <meta name="twitter:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Service | Tech Scouts",
      "description": "Explore the range of services offered by Tech Scouts, from custom software development to tech consulting. Get in touch for tailored solutions.",
      "url": "https://techscouts.se/service",
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
    <!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">our services</h1>
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
                      Services
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<< Service Section Start >>--> 
    <section class="service-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp">our focusable services</span>  
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    How do we work to help you <br>
                    in establish Business
                </h2>  
            </div>
            <div class="row">
                @foreach ($fetch as $f)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items" style="height: 400px">
                        <div class="icon">
                            <img src="{{ asset('/uploads/Service/' . $f->icon) }}" alt="{{ $f->name }}"
                            style="max-width: 100%; height: 50px;">
                        </div>
                        <div class="content">
                            <h3>
                                <a href="/servicedetail/{{ $f->slug }}">
                             {{$f->name}}
                                </a>
                            </h3>
                            <p>
                                <?php
                                $f3 = strip_tags($f->short_description);
                                $f4 = Str::limit($f3,100);
                              
                               ?>
                              
                                
                         
                                 {!! html_entity_decode($f4) !!}
                            </p>
                            <a href="/servicedetail/{{ $f->slug }}" class="arrow-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
              
             @endforeach
            </div>
        </div>
    </section>

@endsection
