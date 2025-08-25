@extends('frontend.layouts.layout')
@section('title')

    <head>
        <?php
        $ptitle = str_replace(' ', '%20', $fetch->title);
        $ptitles = Str::limit($fetch->title, 60);
        $pdese = strip_tags($fetch->description);
        $pdes = Str::limit($pdese, 160);
        ?>
        <title>{{ $fetch->title }}</title>
        <meta name="title" content="{{ $fetch->meta_title }}" />
        <meta name="description" content="{{ html_entity_decode($fetch->meta_description) }}" />
        <meta name="keywords" content="{{ $fetch->meta_keyword }}" />
        <meta property="og:image" content="http://growdigitalcare.com/uploads/mediacenter/{{ $fetch->image }}" />
        <meta property="og:url" content="http://growdigitalcare.com/mediacenterdetail{{ $fetch->slug }}" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="{{ html_entity_decode($fetch->meta_description) }}" />
        <meta property="og:title" content="{{ $fetch->meta_title }}" />
        <meta property="og:site_name" content="Growdigitalcare">


    </head>
@endsection
@section('content')
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"> Media Center Detail</h1>
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
                    Media Center Detail
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ./ Page Header -->
<section class="service-details fix section-padding">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-5">
                <div class="col-12 col-lg-8">
                    <div class="service-details-items">
                        <div class="details-image">
                            <img src="{{ asset('/uploads/mediacenter/' . $fetch->image) }}" alt="img">
                        </div>   
                        <div class="details-content">
                            <h3>{{ $fetch->title }}</h3>
                            <p>
                                {!! html_entity_decode($fetch->description) !!}
                            </p>
                           
                     
                          
                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                               <h3>Related Media Centers</h3>
                            </div>
                            <div class="service-category">
                                @foreach ($related as $f)
                                <a href="/mediacenterdetail/{{$f->slug}}" >
                               {{$f->title}}
                                    <i class="fal fa-long-arrow-right"></i>
                                </a>
                              @endforeach
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                               <h3>Share This Post On : </h3>
                            </div>

                            <br>
                            <ul style="text-align: center">
                               
                                <?php
                                $url = urlencode("http://growdigitalcare.com/mediacenterdetail/$fetch->slug");
                                ?> <a style="background-color:#175cff" target="_blank"
                                    href="https://www.facebook.com/sharer.php?u={{ $url }}"
                                    class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i><span class="share-title sizeicon"
                                        aria-hidden="true"></span>
                                </a>
                                <a style="background-color:#175cff" target="_blank"
                                    href="https://twitter.com/share?url={{ $url }}"
                                    class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                    <i class="fab fa-twitter"></i> <span class="share-titl sizeicon" aria-hidden="true"></span>
                                </a>
                                <a style="background-color:#175cff"
                                    href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('hi hello'); ?> {{ $url }}"
                                    target="_blank" title="Share on Whatsapp" class="btn btn--small btn--secondary btn--share">
                                   <i class="fab fa-whatsapp-square"></i> <span class="share-title sizeicon"
                                        aria-hidden="true"></span>
                                </a>
                                <a style="background-color:#175cff" target="_blank"
                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                                    class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                  <i class="fab fa-linkedin" aria-hidden="true"></i> <span class="share-title sizeicon"
                                        aria-hidden="true"></span>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project-details pt-100 pb-100">
    <div class="container">
        <div class="project-details-thumb">
            <div class="shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
            {{-- <ul class="project-details-list">
                <li><i class="fa-sharp fa-regular fa-circle-check"></i>Client <span>: Porta (USA)</span></li>
                <li><i class="fa-sharp fa-regular fa-circle-check"></i>Date <span>: March 21, 2024</span></li>
                <li><i class="fa-sharp fa-regular fa-circle-check"></i>Category <span>: Software</span></li>
                <li><i class="fa-sharp fa-regular fa-circle-check"></i>Location<span>: London</span></li>
            </ul> --}}
            <img src="{{ asset('/uploads/mediacenter/' . $fetch->image) }}"
            style="width: 1200px;height: 650px;" alt="{{ $fetch->title }}">
        </div>
        <div class="project-details-content">
            <h3 class="title">{{ $fetch->title }}</h3>
         
            <p>  {!! html_entity_decode($fetch->description) !!}</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-img-2">
                    @if ($fetch->image != 'null' && $fetch->video_url != 'null')
                        <iframe src="{{ $fetch->video_url }}" style="width: 100%;height:350px;"
                            frameborder="0"></iframe>
                    @endif
                </div>
            </div>
            <hr>
            <ul style="text-align: right">
                <span style="font-size: 20px">Share On: &nbsp;</span>

                <?php
                $url = urlencode("http://growdigitalcare.com/mediacenterdetail/$fetch->slug");
                ?> <a style="background-color:#175cff" target="_blank"
                    href="https://www.facebook.com/sharer.php?u={{ $url }}"
                    class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                    <i class="fab fa-facebook-f"></i><span class="share-title sizeicon"
                        aria-hidden="true"></span>
                </a>
                <a style="background-color:#175cff" target="_blank"
                    href="https://twitter.com/share?url={{ $url }}"
                    class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                    <i class="fab fa-twitter"></i> <span class="share-titl sizeicon" aria-hidden="true"></span>
                </a>
                <a style="background-color:#175cff"
                    href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('hi hello'); ?> {{ $url }}"
                    target="_blank" title="Share on Whatsapp" class="btn btn--small btn--secondary btn--share">
                   <i class="fab fa-whatsapp-square"></i> <span class="share-title sizeicon"
                        aria-hidden="true"></span>
                </a>
                <a style="background-color:#175cff" target="_blank"
                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                    class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                  <i class="fab fa-linkedin" aria-hidden="true"></i> <span class="share-title sizeicon"
                        aria-hidden="true"></span>
                </a>
            </ul>
        </div>
    </div>
</section>
<section class="blog-section pt-50 pb-50">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" 
            data-wow-delay="400ms">Related News & Blogs</h4>
            <h2 class="section-title wow fade-in-bottom" 
            data-wow-delay="600ms">Largest The News & Blog</h2>
        </div>
        <div class="blog-carousel-wrap">
            <div class="blog-carousel swiper">
                <div class="swiper-wrapper swiper-container">
                  @foreach ($related as $f)
                  
                      
              
                    <div class="swiper-slide">
                        <div class="post-card card-1">
                            <div class="post-thumb">
                                @if($f->video_url!="null")
                                <iframe src="{{$f->video_url}}" style="width: 400px;height: 250px;" frameborder="0"></iframe>
                                @elseif($f->image!="null")
                                <a href="/mediacenterdetail/{{$f->slug}}"> <img src="{{ asset('/uploads/mediacenter/' . $f->image) }}" style="width: 400px;height: 250px;" alt="portfolio1">
                                </a>
                                @endif
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                   
                                    <h3 class="title">
                                        <a href="/mediacenterdetail/{{$f->slug}}">
                                            <?php
                                            $f1 = strip_tags($f->title);
                                            $f2 = Str::limit($f1,50);
                                          
                                           ?>
                                            
                                            {{$f2}}
                                    </h3>
                                    <p class="desc">
                                        <?php
                                        $f3 = strip_tags($f->description);
                                        $f4 = Str::limit($f3,80);
                                      
                                       ?>
                                      
                                        
                                 
                                         {!! html_entity_decode($f4) !!}</p>
                                </div>
                                <div class="post-review-wrap">
                                   
                                    <a href="/mediacenterdetail/{{$f->slug}}"
                                        >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                    @endforeach
                </div>
                <!-- Carousel Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
@endsection
