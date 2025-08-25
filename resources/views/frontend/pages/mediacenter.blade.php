@extends('frontend.layouts.layout')
@section('title')
<head>
    <head>
        <title>Media Center | Tech Scouts</title>
        <meta name="description" content="Explore the latest media, articles, and resources at Tech Scouts." />
        <meta name="keywords" content="Tech Scouts, Media Center, Software Development, Technology News" />
    
        <!-- Open Graph Tags -->
        <meta property="og:title" content="Media Center | Tech Scouts" />
        <meta property="og:description" content="Explore the latest media, articles, and resources at Tech Scouts." />
        <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
        <meta property="og:url" content="https://techscouts.se/mediacenter" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Tech Scouts" />
    
        <!-- Twitter Card -->
        <meta name="twitter:title" content="Media Center | Tech Scouts" />
        <meta name="twitter:description" content="Explore the latest media, articles, and resources at Tech Scouts." />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    
        <!-- Structured Data (Schema.org) -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "Media Center | Tech Scouts",
          "description": "Explore the latest media, articles, and resources at Tech Scouts.",
          "url": "https://techscouts.se/mediacenter",
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
@section("content")
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"> Media Center</h1>
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
                    Media Center 
                </li>
            </ul>
        </div>
    </div>
</div>




    <section class="news-section fix section-padding pt-0">
        <div class="container">
          
            <div class="row">
                @foreach($fetch as $f)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-news-items">
                       
                        <div class="news-image bg-cover"
                         style="background-image: url('{{ asset('/uploads/mediacenter/' . $f->image) }}');">
                            <a href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}" class="icon">
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="news-content">
                           
                            <h3>
                                <a href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}"> <?php
                                    $f1 = strip_tags($f->title);
                                    $f2 = Str::limit($f1,50);
                                  
                                   ?>
                                    
                                    {{$f2}}</a>
                            </h3>
                            <ul class="post-date">
                                <li><?php
                                    $f3 = strip_tags($f->description);
                                    $f4 = Str::limit($f3,80);
                                  
                                   ?>
                                  
                                    
                             
                                     {!! html_entity_decode($f4) !!}</li>
                            </ul>
                           <div class="news-button mt-4">
                                <a href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}" class="link-btn">
                                    <span>read more</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                           </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
@endsection