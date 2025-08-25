@extends('frontend.layouts.layout')
@section('title')
<head>
    <title>Stay Updated with the Latest Team | Tech Scouts</title>
    <meta name="description" content="Stay ahead in the tech world with real-time team updates. Access the latest software trends, industry news, and insights to make informed decisions." />
    <meta name="keywords" content="Tech Scouts, Team, software updates, industry trends, tech news, insights, informed decisions" />
    <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta property="og:description" content="Stay ahead in the tech world with real-time team updates. Access the latest software trends, industry news, and insights to make informed decisions." />
    <meta property="og:url" content="https://techscouts.se/team" />
    <meta property="og:title" content="Team | Tech Scouts">
    <meta property="og:site_name" content="Tech Scouts">
    <meta property="og:type" content="website">

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Team | Tech Scouts",
        "description": "Stay ahead in the tech world with real-time team updates. Access the latest software trends, industry news, and insights to make informed decisions.",
        "url": "https://techscouts.se/team",
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
   <!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">team page</h1>
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
                    team
                </li>
            </ul>
        </div>
    </div>
</div>

<!--<< Team Section Start >>-->
<section class="team-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">our honurable team member</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                We’ve Exclusive Team member <br>
                Meet our Professionals
            </h2>
        </div>
        <div class="team-wrapper">
            <div class="row align-items-center">
                @foreach ($team as $team)
           
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-team-items">
                        <div class="team-image">
                            <img src="{{ asset('/uploads/Team/'.$team->profile_picture) }}"
                             alt="{{ $team->name }}">
                        
                        </div>
                        <div class="team-content text-center">
                            <h4>
                                <a >{{ $team->name }}</a>
                            </h4>
                            <p>{{ $team->possition }}</p>
                        </div>
                    </div>
                </div>
             @endforeach

            </div>
        </div>
    </div>
</section>

@endsection
