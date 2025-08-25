@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>Package | Tech Scouts</title>
    <meta name="description" content="Explore the various packages offered by Tech Scouts for your software development needs." />
    <meta name="keywords" content="Tech Scouts, Software Packages, Technology Solutions" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Package | Tech Scouts" />
    <meta property="og:description" content="Explore the various packages offered by Tech Scouts for your software development needs." />
    <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta property="og:url" content="https://techscouts.se/package" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:title" content="Package | Tech Scouts" />
    <meta name="twitter:description" content="Explore the various packages offered by Tech Scouts for your software development needs." />
    <meta name="twitter:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Schema.org Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Package | Tech Scouts",
      "description": "Explore the various packages offered by Tech Scouts for your software development needs.",
      "url": "https://techscouts.se/package",
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
<br>
<div class="page-banner-area portfolio-page-area">
    <div class="container">
        <div class="single-page-banner-content">
            <br><br>
            <br><br>
            <h1>Package</h1>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Package</li>
            </ul>
        </div>
    </div>
</div>

    <div class="portfolio-page-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Package</span>
                <h2>Our Package</h2>
            </div>

            <div class="row">
                @foreach ($fetch as $f)
                    <div class="col-md-4">
                        <div class="single-portfolio-card portfolio-page-card" style="height: 400px;">
                            <div class="portfolio-img">

                               
                                    <a href="/packagedetail/{{ $f->slug }}"> <img
                                            src="{{ asset('/uploads/package/' . $f->image) }}"
                                            style="width: 400px;height: 250px;" alt="portfolio1">
                                    </a>
                                    <div class="date">
                                <span>Price : {{ $f->price}}</span>
                               
                                </div>
                            </div>
                            <div class="date">
                                <span>{{ $f->packagecategory->name }}</span>
                               
                                </div>
                                <br>
                               
                            <div class="portfolio-content">
                                <div class="portfolio-icon">
                                    <a href="/packagedetail/{{ $f->slug }}">
                                        <i class='bx bx-plus'></i>
                                    </a>
                                </div>
                                <h3><a href="/packagedetail/{{ $f->slug }}">
                                        <?php
                                        $f1 = strip_tags($f->title);
                                        $f2 = Str::limit($f1, 50);
                                        
                                        ?>

                                        {{ $f2 }}</a></h3>
                                <?php
                                $f3 = strip_tags($f->description);
                                $f4 = Str::limit($f3, 70);
                                
                                ?>



                                <p> {!! html_entity_decode($f4) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach





                {{-- <div class="pagination-area">
                    <a href="services.html" class="prev page-numbers">
                        <i class='bx bx-chevron-left'></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">01</span>
                    <a href="services.html" class="page-numbers">02</a>
                    <a href="services.html" class="page-numbers">03</a>
                    <a href="services.html" class="prev page-numbers">
                        <i class='bx bx-chevron-right'></i>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
