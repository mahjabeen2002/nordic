@extends('frontend.layouts.layout')
@section('title')

<head>
  <?php
  $ptitle = str_replace(' ', '%20', $fetch->name);
  $ptitles = Str::limit($fetch->name, 60);
  $pdese = strip_tags($fetch->long_description);
  $pdes = Str::limit($pdese, 160);
  ?>
  <title>{{ $fetch->name }}</title>
  <meta name="title" content="{{ $fetch->meta_title }}" />
  <meta name="description" content="{{ html_entity_decode($fetch->meta_description) }}" />
  <meta name="keywords" content="{{ $fetch->meta_keyword }}" />
  <meta property="og:image" content="http://growdigitalcare.com/uploads/Service/{{ $fetch->image }}" />
  <meta property="og:url" content="http://growdigitalcare.com/servicedetail{{ $fetch->slug }}" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="{{ html_entity_decode($fetch->meta_description) }}" />
  <meta property="og:title" content="{{ $fetch->meta_title }}" />
  <meta property="og:site_name" content="Growdigitalcare">


    </head>
@endsection
@section('content')
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('uploads/Servicecategory/' . $category->image) }}'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"> {{$category->name}}</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li >
                    <a href="/" style="color:white">
                 Home
                    </a>
                </li>
                <li>
                    <i class="fal fa-minus"></i>
                </li>
                <li>
                    Service Detail
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
                            <img src="{{ asset('/uploads/Service/' . $fetch->image) }}" alt="img">
                        </div>   
                        <div class="details-content">
                            <h3>{{ $fetch->name }}</h3>
                            <p>
                                {!! html_entity_decode($fetch->long_description) !!}
                            </p>
                           
                     
                          
                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                               <h3>Related Services</h3>
                            </div>
                            <div class="service-category">
                                @foreach ($related as $f)
                                <a href="/servicedetail/{{$f->slug}}"  style="font-size: 13px">
                                    <img src="{{ asset('/uploads/Service/' . $f->icon) }}" alt="Service Image"
                                    style="width: 30px; height: 30px;">&nbsp;  {{$f->name}}
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
                                $url = urlencode("http://growdigitalcare.com/servicedetail/$fetch->slug");
                                ?> <a style="background-color:#166FD3" target="_blank"
                                    href="https://www.facebook.com/sharer.php?u={{ $url }}"
                                    class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                    <i class="fab fa-facebook-f" style="color:white"></i><span class="share-title sizeicon"
                                        aria-hidden="true"></span>
                                </a>
                                <a style="background-color:#166FD3" target="_blank"
                                    href="https://twitter.com/share?url={{ $url }}"
                                    class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                    <i class="fab fa-twitter" style="color:white"></i> <span class="share-titl sizeicon" aria-hidden="true"></span>
                                </a>
                                <a style="background-color:#166FD3"
                                    href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('hi hello'); ?> {{ $url }}"
                                    target="_blank" title="Share on Whatsapp" class="btn btn--small btn--secondary btn--share">
                                   <i class="fab fa-whatsapp-square" style="color:white"></i> <span class="share-title sizeicon"
                                        aria-hidden="true"></span>
                                </a>
                                <a style="background-color:#166FD3" target="_blank"
                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                                    class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                  <i class="fab fa-linkedin" style="color:white" aria-hidden="true"></i> <span class="share-title sizeicon"
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

@endsection
