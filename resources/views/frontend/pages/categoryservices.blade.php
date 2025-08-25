@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>Service Categories | Tech Scouts</title>
    <meta name="description" content="Service Categories Page" />
    <meta name="keywords" content="Tech Scouts, Service Categories" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Service Categories | Tech Scouts" />
    <meta property="og:description" content="Explore various service categories offered by Tech Scouts." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="Service Categories | Tech Scouts" />
    <meta name="twitter:description" content="Explore various service categories offered by Tech Scouts." />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Schema Markup (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Service Categories | Tech Scouts",
        "description": "Explore various service categories offered by Tech Scouts.",
        "url": "{{ url()->current() }}",
        "mainEntityOfPage": "{{ url()->current() }}",
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
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('uploads/Servicecategory/' . $category->image) }}'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading text-center">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">{{ $category->name }}</h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="/"style="color:white">
                    Home Page
                    </a>
                </li>
                <li>
                    <i class="fal fa-minus"></i>
                </li>
                <li>
                   Service Category
                </li>
            </ul>
        </div>
    </div>
</div>


@if($category->name == 'Management Consulting')
<section class="category-detail-section">
    <div class="container">
        <div class="section-title text-center mt-5">
               <span class="wow fadeInUp">Our Service Category</span>  
            <h2>{{ $category->name }}</h2>
        </div>
        <div class="category-description mt-2">
            <p>{!! html_entity_decode($category->description) !!}</p>
        </div>
    </div>
</section>
@endif
<section class="service-section fix section-padding">
    <div class="container">
        <!--<div class="section-title text-center">-->
        <!--    <span class="wow fadeInUp">Our Focused Services</span>  -->
        <!--    <h2 class="wow fadeInUp" data-wow-delay=".3s">-->
        <!--        How do we work to help you <br>-->
        <!--        in establishing Business-->
        <!--    </h2>  -->
        <!--</div>-->
        <div class="row">
            @foreach ($services as $f)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items" style="height: 400px;">
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
                            $f4 = Str::limit($f3, 100);
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
