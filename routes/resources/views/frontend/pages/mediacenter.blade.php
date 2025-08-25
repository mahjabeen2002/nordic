@extends('frontend.layouts.layout')
@section('title')
<head>
    <title>Media Center | Grow Digital Care</title>
    <meta name="description" content="Media Center Page" />
    <meta name="keywords" content="Growdigitalcare" />
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