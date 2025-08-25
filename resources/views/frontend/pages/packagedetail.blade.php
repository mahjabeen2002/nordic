@extends('frontend.layouts.layout')
@section('title')

<head>
    <?php
    $ptitle = str_replace(' ', '%20', $fetch->title);
    $ptitles = Str::limit($fetch->title, 60);
    $pdese = strip_tags($fetch->description);
    $pdes = Str::limit($pdese, 160);
    ?>
    <title>{{ $fetch->title }} | Tech Scouts</title>
    <meta name="title" content="{{ $fetch->meta_title }}" />
    <meta name="description" content="{{ $fetch->meta_description }}" />
    <meta name="keywords" content="{{ $fetch->meta_keyword }}" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:image" content="https://techscouts.se/uploads/package/{{ $fetch->image }}" />
    <meta property="og:url" content="https://techscouts.se/packagedetail{{ $fetch->slug }}" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{{ $fetch->meta_description }}" />
    <meta property="og:title" content="{{ $fetch->meta_title }}" />
    <meta property="og:site_name" content="Tech Scouts" />
  
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:title" content="{{ $fetch->meta_title }}" />
    <meta name="twitter:description" content="{{ $fetch->meta_description }}" />
    <meta name="twitter:image" content="https://techscouts.se/uploads/package/{{ $fetch->image }}" />
    <meta name="twitter:card" content="summary_large_image" />
    
    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "{{ $fetch->meta_title }}",
      "description": "{{ $fetch->meta_description }}",
      "url": "https://techscouts.se/packagedetail{{ $fetch->slug }}",
      "image": "https://techscouts.se/uploads/package/{{ $fetch->image }}",
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
            <h1>Package Detail</h1>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Package Detail</li>
            </ul>
        </div>
    </div>
</div>


    <div class="portfolio-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-portfolio-details-content">
                        <div class="portfolio-img">
                            <img src="{{ asset('/uploads/package/' . $fetch->image) }} "  style="width: 1200px;height: 650px;" alt="{{ $fetch->title }}" />
                        </div>
                        <br>
                        <h3>{{ $fetch->title }}</h3>
                        <br>
                        <p>
                            {!! html_entity_decode($fetch->description) !!}
                        </p>

                        <span>Price : {{ $fetch->price}}</span>
                        <h4>
                        Category :  {{ $fetch->packagecategory->name }}
                        </h4>
                        <hr>
                        <ul style="text-align: right">
                            <span style="font-size: 20px">Share On: &nbsp;</span>

                            <?php
                            $url = urlencode("http://growdigitalcare.com/packagedetail/$fetch->slug");
                            ?> <a style="background-color:#009c9d" target="_blank"
                                href="https://www.facebook.com/sharer.php?u={{ $url }}"
                                class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                <i class='bx bxl-facebook'></i> <span class="share-title sizeicon"
                                    aria-hidden="true"></span>
                            </a>
                            <a style="background-color:#009c9d" target="_blank"
                                href="https://twitter.com/share?url={{ $url }}"
                                class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                <i class='bx bxl-twitter'></i> <span class="share-titl sizeicon" aria-hidden="true"></span>
                            </a>
                            <a style="background-color:#009c9d"
                                href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('hi hello'); ?> {{ $url }}"
                                target="_blank" title="Share on Whatsapp" class="btn btn--small btn--secondary btn--share">
                                <i class='bx bxl-whatsapp'></i> <span class="share-title sizeicon"
                                    aria-hidden="true"></span>
                            </a>
                            <a style="background-color:#009c9d" target="_blank"
                                href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                                class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                <i class='bx bxl-linkedin'></i> <span class="share-title sizeicon"
                                    aria-hidden="true"></span>
                            </a>
                        </ul>

                    </div>
                </div>

            </div>
            {{-- //related --}}
            <div class="pt-100 pb-70">

                <div class="container">
                    <div class="portfolio-top-item d-flex align-items-end justify-content-between">
                        <div class="section-title left-title">
                            <span class="top-title">Package</span>
                            <h2>Our Package</h2>
                        </div>
                        <a href="/package" class="default-btn btn-style-2">View All</a>
                    </div>

                    <div class="team-slider owl-carousel owl-theme">



                        @foreach ($related as $f)
                            <div class="single-team-card team" style="width: 350px;height: 420px">
                                <div class="team-img">
                                    <a href="/packagedetail/{{ $f->slug }}">




                                        <a href="/packagedetail/{{ $f->slug }}"> <img
                                                src="{{ asset('/uploads/package/' . $f->image) }}"
                                                style="width: 400px;height: 250px;" alt="{{ $f->title }}">
                                                <div class="date">
                                <span>Price : {{ $f->price}}</span>
                               
                                </div>

                                </div>
                                <div class="date">
                                  <span>{{ $f->packagecategory->name }}</span>
                                  </div>
                                <div class="single-team-content">
                                    <h3>
                                        <?php
                                        $f1 = strip_tags($f->title);
                                        $f2 = Str::limit($f1, 50);
                                        
                                        ?>

                                        {{ $f2 }}</h3>
                                    </a>
                                    <?php
                                    $f3 = strip_tags($f->description);
                                    $f4 = Str::limit($f3, 80);
                                    
                                    ?>


                                    <p>{!! html_entity_decode($f4) !!}</p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
