@extends('frontend.layouts.layout')
@section('title')
<head>
    <title>Team | Tech Scouts</title>
    <meta name="description" content="Meet the talented professionals behind Tech Scouts. Our expert team ensures innovation, quality, and success in every project." />
    <meta name="keywords" content="Tech Scouts, Team, Professionals, Experts, Developers, Designers, Consultants" />
    <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta property="og:description" content="Meet the talented professionals behind Tech Scouts. Our expert team ensures innovation, quality, and success in every project." />
    <meta property="og:url" content="https://techscouts.se/team" />
    <meta property="og:title" content="Team | Tech Scouts">
    <meta property="og:site_name" content="Tech Scouts">
    <meta property="og:type" content="website">
</head>
@endsection

@section("content")

<!-- Page Header -->
<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets/images/page-header-default.jpg') }}" alt="Team Background" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">Our Team</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Team Section -->
<section class="team-section">
    <div class="pd_top_90"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">Meet Our Professionals</div>
                        <h2>Our Dedicated Team</h2>
                        <p> We provide comprehensive IT service desk support for 
organizations of all sizes. Acting as an extension of your internal IT 
team, we manageincidents, service requests, access control, 
and end-user technical support efficiently and professionally. 
Leveraging ITIL best practices, multi-channel access, and 
proactive monitoring, we ensure minimal downtime, improved 
productivity, and seamless IT experience for employees. We offer 
remote, onsite and hybrid support.
</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($team as $member)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
                <div class="team_box style_one">
                    <div class="team_img">
                        <img src="{{ asset('/uploads/Team/'.$member->profile_picture) }}" alt="{{ $member->name }}" class="img-fluid">
                        <div class="team_hover_content">
                            <ul class="social-icons">
                                @if($member->linkedin)<li><a href="{{ $member->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>@endif
                                @if($member->twitter)<li><a href="{{ $member->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>@endif
                                @if($member->facebook)<li><a href="{{ $member->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>@endif
                            </ul>
                        </div>
                    </div>
                    <div class="team_content text-center">
                        <h4>{{ $member->name }}</h4>
                        <p>{{ $member->possition }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pd_bottom_90"></div>
</section>

<!-- Custom CSS -->
<style>
.team_box {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
    background: #fff;
    position: relative;
}
.team_box:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}
.team_img {
    position: relative;
    overflow: hidden;
    height: 280px;
}
.team_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s ease;
}
.team_box:hover .team_img img {
    transform: scale(1.1);
}
.team_hover_content {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0,0,0,0.6);
    display: flex;
    justify-content: center;
    opacity: 0;
    padding: 15px 0;
    transition: opacity 0.4s ease;
}
.team_box:hover .team_hover_content {
    opacity: 1;
}
.team_hover_content .social-icons {
    display: flex;
    gap: 15px;
}
.team_hover_content .social-icons li a {
    color: #fff;
    font-size: 16px;
    transition: color 0.3s;
}
.team_hover_content .social-icons li a:hover {
    color: var(--primary-color);
}
.team_content {
    padding: 20px;
}
.team_content h4 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 8px;
}
.team_content p {
    font-size: 14px;
    color: #666;
}
.before_title {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
</style>

@endsection
