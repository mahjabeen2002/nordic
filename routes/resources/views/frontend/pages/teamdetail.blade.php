@extends('frontend.layouts.layout')
@section('title')
    <head>
        <title>{{$fetch->name}}</title>
        <meta name="description" content="{{html_entity_decode($fetch->bio ) }}" />
        <meta name="keywords" content="{{$fetch->name}}" />
        <meta property="og:image" content="https://digitalbankingzone.com/uploads/Team/{{$fetch->profile_picture}}" />
        <meta property="og:url" content="https://digitalbankingzone.com/teamdetail/{{$fetch->slug}}" />
        <meta property="og:type" content="website" /> 
        <meta property="og:description" content="{{html_entity_decode($fetch->bio ) }}" />
        <meta property="og:title" content="{{$fetch->name}}">
        <meta property="og:site_name" content="Digital Banking Zone">
        <meta property="og:type" content="website">

    </head>
@endsection

@section('content')
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">Team Details</h1>
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
                    Team Details
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Team Details Section Start -->
<section class="team-details-section fix section-padding">
    <div class="container">
        <div class="team-details-wrapper">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-image bg-cover" style="background-image: url('{{ asset('/uploads/Team/'.$fetch->profile_picture) }});"></div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".5s">
                    <div class="team-details-content">
                     
                        <h3>{{ $fetch->name }}</h3>
                        <span>{{ $fetch->possition }}</span>
                        <p>
                            {!! html_entity_decode($fetch->bio) !!}
                        </p>
                        
                        <div class="social-icon d-flex align-items-center">
                         <p>Share This : </p>
                         <?php
                         $url = urlencode("http://growdigitalcare.com/teamedetail/$fetch->slug");
                         ?> 
                            <a target="_blank"
                            href="https://www.facebook.com/sharer.php?u={{ $url }}"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank"
                            href="https://twitter.com/share?url={{ $url }}"><i class="fab fa-twitter"></i></a>
                            <a  href="https://api.whatsapp.com/send?phone=&text=<?php urlencode('hi hello'); ?> {{ $url }}"
                                target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a  target="_blank"
                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"><i class="fab fa-linkedin"></i></a>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
