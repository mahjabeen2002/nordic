@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>Home | Tech Scouts</title>
        <meta name="description" content="Home Page of Tech Scouts, a leading software company." />
        <meta name="keywords" content="Tech Scouts, Software Development, Technology Solutions" />

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Home | Tech Scouts" />
        <meta property="og:description" content="Home Page of Tech Scouts, a leading software company." />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Tech Scouts" />

        <!-- Twitter Cards -->
        <meta name="twitter:title" content="Home | Tech Scouts" />
        <meta name="twitter:description" content="Home Page of Tech Scouts, a leading software company." />
        <meta name="twitter:card" content="summary_large_image" />

        <!-- Schema Markup (JSON-LD) -->
        <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Tech Scouts",
        "url": "{{ url()->current() }}",
        "logo": "https://techscouts.se/Tech-Scouts-Logo1000x300.png",
        "description": "Home Page of Tech Scouts, a leading software company."
    }
    </script>
    </head>
@endsection
@section('content')
    <div id="content" class="site-content ">
        <!----banner---->
        <section class="slider style_one pag_position_two">
            <div class="banner_carousel owl-carousel owl_nav_none owl_dots_block theme_carousel owl-theme"
                data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                <div class="slide-item">
                    <div class="slide-item-content content_left">
                        <div class="image-layer" style="background-image:url(assets/images/sliders/slider-2-bg.jpg)"></div>
                        <div class="auto-container">
                            <div class="d-flex align-items-center">
                                <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                    <div class="slider_content">
                                        <h1>Skilled Industry Professionals</h1>
                                        <h6>Shared Time Human Resources Management</h6>
                                        <p class="description">Duty obligations of business it will
                                            frequently occur that pleasures have to be repudiated and annoyances accepted.
                                        </p>
                                        <a href="#" target="_blank" rel="nofollow"
                                            class="theme-btn one  animated _zoomIn">
                                            Read More </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                    <div class="slider_image">
                                        <img src="{{ asset('assets') }}/images/sliders/slider-2-1.png" class="img-fluid"
                                            alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-item-content content_right">
                        <div class="image-layer" style="background-image:url(assets/images/sliders/slider-2-bg.jpg)"></div>
                        <div class="auto-container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                    <div class="slider_content">
                                        <h1>We Help Businesses</h1>
                                        <h6>Organizations Reduce risk by providing employment</h6>
                                        <p class="description">Duty obligations of business it will
                                            frequently occur that pleasures have to be repudiated and annoyances accepted.
                                        </p>
                                        <a href="#" target="_blank" rel="nofollow" class="theme-btn one">
                                            Read More </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                    <div class="slider_image">
                                        <img src="{{ asset('assets') }}/images/sliders/slider-2-2.png" class="img-fluid"
                                            alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="slide-item-content content_left">
                        <div class="image-layer" style="background-image:url(assets/images/sliders/slider-2-bg.jpg)"></div>
                        <div class="auto-container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12  col-sm-12 col-xs-12">
                                    <div class="slider_content">
                                        <h1>Recruit the best employees</h1>
                                        <h6>Our search results mitigate your company's exposure
                                        </h6>
                                        <p class="description">Duty obligations of business it will
                                            frequently occur that pleasures have to be repudiated and annoyances accepted.
                                        </p>
                                        <a href="#" target="_blank" rel="nofollow" class="theme-btn one">
                                            Read More </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12  col-sm-12 col-xs-12 image_column">
                                    <div class="slider_image">
                                        <img src="{{ asset('assets') }}/images/sliders/slider-2-3.png" class="img-fluid"
                                            alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----banner end---->
        <!--contact-->
        <section class="contact-section ">
            <!--===============spacing==============-->
            <div class="pd_top_40"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                        <div class="contact_box_content style_one">
                            <div class="contact_box_inner  icon_yes ">
                                <div class="icon_bx">
                                    <span class=" icon-placeholder"></span>
                                </div>
                                <div class="contnet">
                                    <h3> Post Address </h3>
                                    <p>
                                        280 Granite Run Drive Suite #200 Lancaster, PA 1760
                                    </p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                        <div class="contact_box_content style_one">
                            <div class="contact_box_inner  icon_yes ">
                                <div class="icon_bx">
                                    <span class=" icon-phone-call"></span>
                                </div>
                                <div class="contnet">
                                    <h3> General Enquires </h3>
                                    <p>
                                        Phone: +98 060 712 34 &amp; Email: sendmail@qetus.com
                                    </p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact_box_content style_one">
                            <div class="contact_box_inner  icon_yes ">
                                <div class="icon_bx">
                                    <span class="fa fa-clock-o"></span>
                                </div>
                                <div class="contnet">
                                    <h3> Operation Hours </h3>
                                    <p>
                                        Mon-Satday: 09.00 to 07.00 (Sunday: Closed)
                                    </p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
        </section>
        <!--contact end-->
        <!----client end---->
        <!----about---->
        <section class="about-section">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12 col-md-12 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">
                        <div class="image_boxes style_seven">
                            <div class="image_box">
                                <img src="{{ asset('assets') }}/images/about/about-3.jpg"
                                    class="img-fluid object-fit-cover height_560" alt="about">
                                <div class="video_inner type_seven">
                                    <a href="#" class="lightbox-image"><i class="icon-play"></i></a>
                                </div>
                                <div class="experience">
                                    <div class="experience_inner">
                                        <h2> 25+ Years Of Experience </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="pattern_imag">
                                <img src="{{ asset('assets') }}/images/pattern-n1.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="title_all_box style_one dark_color">
                            <div class="title_sections left">
                                <div class="before_title">Transform Workplace</div>
                                <h2 class="title">Experts analysed, cost effective software</h2>
                                <p>Equip your business with the right tool to achieve peaking levels of people
                                    performance. Adrenalin HRMS Software is designed to align human capital with company
                                    goals</p>
                            </div>
                        </div>

                        <div class="list_item_box style_two style_list">
                            <ul class="list-inline">
                                <li class="list_items pd_bottom_10">
                                    <small class="d-flex align-items-center">
                                        <span class="icon_bx">
                                            <i class=" icon-checked"></i>
                                        </span>
                                        <a class="nav_link" href="#" target="&quot;_blank&quot;"
                                            rel="&quot;nofollow&quot;">
                                            End to end visibility of time metrics for the hybrid workforce </a>
                                    </small>
                                </li>
                                <li class="list_items pd_bottom_10">
                                    <small class="d-flex align-items-center">
                                        <span class="icon_bx">
                                            <i class=" icon-checked"></i>
                                        </span>
                                        <a class="nav_link" href="#" target="&quot;_blank&quot;"
                                            rel="&quot;nofollow&quot;">
                                            Workload Balancing between individuals and teams </a>
                                    </small>
                                </li>
                                <li class="list_items pd_bottom_10">
                                    <small class="d-flex align-items-center">
                                        <span class="icon_bx">
                                            <i class=" icon-checked"></i>
                                        </span>
                                        <a class="nav_link" href="#" target="&quot;_blank&quot;"
                                            rel="&quot;nofollow&quot;">
                                            Create Automated timesheets concentrated facilities </a>
                                    </small>
                                </li>
                                <li class="list_items pd_bottom_10">
                                    <small class="d-flex align-items-center">
                                        <span class="icon_bx">
                                            <i class=" icon-checked"></i>
                                        </span>
                                        <a class="nav_link" href="#" target="&quot;_blank&quot;"
                                            rel="&quot;nofollow&quot;">
                                            Integrate ProHance data within payroll systems </a>
                                    </small>
                                </li>
                                <li class="list_items pd_bottom_10">
                                    <small class="d-flex align-items-center">
                                        <span class="icon_bx">
                                            <i class=" icon-checked"></i>
                                        </span>
                                        <a class="nav_link" href="#" target="&quot;_blank&quot;"
                                            rel="&quot;nofollow&quot;">
                                            Transform processes based on work patterns </a>
                                    </small>
                                </li>
                            </ul>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                        <div class="theme_btn_all color_one">
                            <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Start 14 Day Trial
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_100"></div>
            <!--===============spacing==============-->
        </section>
        <!----about end---->
        <!----service---->

        <!-- Services Section -->
        <section class="service-section bg_light_1">
            <!-- Spacing -->
            <div class="pd_top_80"></div>
            <!-- Spacing -->

            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="title_all_box style_one">
                            <div class="title_sections">
                                <h2 class="title">Focus on your Business</h2>
                                <p>When you work with Tech Scouts, you get the best. We provide adaptable solutions that
                                    allow you to be a part of the entire process</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="theme_btn_all color_one text-md-end">
                            <a href="{{ route('services') }}" class="theme-btn one">View All Services</a>
                            <!-- Spacing -->
                            <div class="pd_bottom_30"></div>
                            <!-- Spacing -->
                        </div>
                    </div>
                    <!-- Spacing -->
                    <div class="pd_bottom_20"></div>
                    <!-- Spacing -->
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-1 hidden-xl"></div>
                <div class="col-xxl-10 col-xl-12">
                    <div class="service_caro_section carousel style_one">
                        <div class="swiper-container"
                            data-swiper='{
                   "autoplay": {
                     "delay": 6000
                   },
                   "freeMode": true,
                   "loop": true,
                   "speed": 1000,
                   "centeredSlides": false,
                   "slidesPerView": 4,
                   "spaceBetween": 0,
                   "pagination": {
                     "el": ".swiper-pagination",
                     "clickable": true
                   },
                   "breakpoints": {
                      "1200": {
                         "slidesPerView": 4
                      },
                      "1024": {
                       "slidesPerView": 4
                      },
                     "768": {
                       "slidesPerView": 3
                     },
                     "576": {
                       "slidesPerView": 1
                     },
                     "0": {
                       "slidesPerView": 1
                     }
                   }
                 }'>
                            <div class="swiper-wrapper">
                                @forelse($services as $service)
                                    <div class="swiper-slide">
                                        <div class="service_carousel style_one">
                                            <div class="image">
                                                <div class="overlay"></div>
                                                @if ($service->image)
                                                    <img width="500" height="500"
                                                        src="{{ asset('uploads/Service/' . $service->image) }}"
                                                        class="attachment-creote-service-image size-creote-service-image"
                                                        alt="{{ $service->name }}">
                                                @else
                                                    <img width="500" height="500"
                                                        src="{{ asset('assets') }}/images/service/service-placeholder.jpg"
                                                        class="attachment-creote-service-image size-creote-service-image"
                                                        alt="{{ $service->name }}">
                                                @endif
                                            </div>
                                            <div class="content">
                                                <div class="icon_box">
                                                    <span class="icon icon-thumbs-up icon"></span>
                                                </div>
                                                <h2 class="title_service">
                                                    <a href="{{ route('servicedetail', ['slug' => $service->slug]) }}"
                                                        rel="bookmark">
                                                        {{ $service->name }}
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <!-- Fallback services if no services exist in database -->
                                    <div class="swiper-slide">
                                        <div class="service_carousel style_one">
                                            <div class="image">
                                                <div class="overlay"></div>
                                                <img width="500" height="500"
                                                    src="{{ asset('assets') }}/images/service/service-image-5.jpg"
                                                    class="attachment-creote-service-image size-creote-service-image"
                                                    alt="Health Care Benefits">
                                            </div>
                                            <div class="content">
                                                <div class="icon_box">
                                                    <span class="icon icon-thumbs-up icon"></span>
                                                </div>
                                                <h2 class="title_service"><a href="#" rel="bookmark">Health Care
                                                        Benefits</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service_carousel style_one">
                                            <div class="image">
                                                <div class="overlay"></div>
                                                <img width="500" height="500"
                                                    src="{{ asset('assets') }}/images/service/service-image-4.jpg"
                                                    class="attachment-creote-service-image size-creote-service-image"
                                                    alt="Risk Management">
                                            </div>
                                            <div class="content">
                                                <div class="icon_box">
                                                    <span class="icon icon-thumbs-up icon"></span>
                                                </div>
                                                <h2 class="title_service"><a href="#" rel="bookmark">Risk
                                                        Management</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service_carousel style_one">
                                            <div class="image">
                                                <div class="overlay"></div>
                                                <img width="500" height="500"
                                                    src="{{ asset('assets') }}/images/service/service-image-3.png"
                                                    class="attachment-creote-service-image size-creote-service-image"
                                                    alt="Compliance Audits">
                                            </div>
                                            <div class="content">
                                                <div class="icon_box">
                                                    <span class="icon icon-thumbs-up icon"></span>
                                                </div>
                                                <h2 class="title_service"><a href="#" rel="bookmark">Compliance
                                                        Audits</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service_carousel style_one">
                                            <div class="image">
                                                <div class="overlay"></div>
                                                <img width="500" height="500"
                                                    src="{{ asset('assets') }}/images/service/service-image-2.png"
                                                    class="attachment-creote-service-image size-creote-service-image"
                                                    alt="Employee Relations">
                                            </div>
                                            <div class="content">
                                                <div class="icon_box">
                                                    <span class="icon icon-thumbs-up icon"></span>
                                                </div>
                                                <h2 class="title_service"><a href="#" rel="bookmark">Employee
                                                        Relations</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                            <div class="p_pagination">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-1 hidden-xl"></div>
            </div>
            <!-- Spacing -->
            <div class="pd_bottom_80"></div>
            <!-- Spacing -->
        </section>

        <section class="project-section ">
            <!-- Spacing -->
            <div class="pd_top_90"></div>
            <!-- Spacing -->

            <div class="auto-container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="title_all_box style_one">
                            <div class="title_sections">
                                <div class="before_title">
                                    Incredibly
                                </div>
                                <h2 class="title">News & Blogs</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="theme_btn_all color_one text-md-end">
                            <a href="{{ route('mediacenter') }}" class="theme-btn one">More News</a>
                            <!-- Spacing -->
                            <div class="pd_bottom_25"></div>
                            <!-- Spacing -->
                        </div>
                    </div>
                    <!-- Spacing -->
                    <div class="pd_bottom_30"></div>
                    <!-- Spacing -->
                </div>
            </div>

            <div class="container-fluid">
                <div class="project_caro_section carousel style_four">
                    <div class="swiper-container"
                        data-swiper='{
                "autoplay": {
                  "delay": 6000
                },
                "freeMode": true,
                "loop": true,
                "speed": 1000,
                "centeredSlides": false,
                "slidesPerView": 5,
                "spaceBetween": 30,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "breakpoints": {
                   "1200": {
                      "slidesPerView": 4
                   },
                   "1024": {
                    "slidesPerView": 3
                   },
                  "768": {
                    "slidesPerView": 3
                  },
                  "576": {
                    "slidesPerView": 1
                  },
                  "0": {
                    "slidesPerView": 1
                  }
                }
              }'>
                        <div class="swiper-wrapper">
                            @forelse($mediaItems as $item)
                                <div class="swiper-slide">
                                    <div class="project_post style_one style_four_caro">
                                        <div class="image" style="height:300px;width:100%">

                                            @if ($item->video_url != 'null')
                                                <iframe class="embed-responsive-item" src="{{ $item->video_url }}"
                                                    style="height:300px;width:100%" allowfullscreen></iframe>
                                            @elseif($item->image != 'null')
                                                <a href="{{ route('mediacenterdetail', ['slug' => $item->slug]) }}">
                                                    <img src="{{ asset('/uploads/mediacenter/' . $item->image) }}"
                                                        alt="{{ $item->title }}">
                                                </a>
                                            @endif

                                        </div>
                                        <div class="project_caro_content">
                                            <div class="left_side">
                                                <p>Latest News</p>
                                                <h2 class="title_pro">
                                                    <a href="{{ route('mediacenterdetail', ['slug' => $item->slug]) }}"
                                                        rel="bookmark">
                                                        {{ Str::limit($item->title, 40) }}
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="right_side">
                                                <a href="{{ route('mediacenterdetail', ['slug' => $item->slug]) }}">
                                                    <i class="icon-right-arrow"></i>
                                                </a>
                                                @if ($item->video_url)
                                                    <a href="{{ $item->video_url }}" class="two" data-fancybox>
                                                        <i class="icon-play"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <!-- Fallback items if no media items exist -->
                                <div class="swiper-slide">
                                    <div class="project_post style_one style_four_caro">
                                        <div class="image">
                                            <img width="742" height="495"
                                                src="{{ asset('assets') }}/images/projects/project-3-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="Essential Steps to Writing Job Description">
                                        </div>
                                        <div class="project_caro_content">
                                            <div class="left_side">
                                                <p>Human Resources</p>
                                                <h2 class="title_pro">
                                                    <a href="#" rel="bookmark">Essential Steps to Writing Job
                                                        Description</a>
                                                </h2>
                                            </div>
                                            <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project_post style_one style_four_caro">
                                        <div class="image">
                                            <img width="746" height="497"
                                                src="{{ asset('assets') }}/images/projects/project-2-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="Complex Dismissal for a Small Company">
                                        </div>
                                        <div class="project_caro_content">
                                            <div class="left_side">
                                                <p>Coaching</p>
                                                <h2 class="title_pro">
                                                    <a href="#" rel="bookmark">Complex Dismissal for a Small
                                                        Company</a>
                                                </h2>
                                            </div>
                                            <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project_post style_one style_four_caro">
                                        <div class="image">
                                            <img width="731" height="488"
                                                src="{{ asset('assets') }}/images/projects/project-6-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="Shared Time Human Resources Management">
                                        </div>
                                        <div class="project_caro_content">
                                            <div class="left_side">
                                                <p>Recruiting</p>
                                                <h2 class="title_pro">
                                                    <a href="#" rel="bookmark">Shared Time Human Resources
                                                        Management</a>
                                                </h2>
                                            </div>
                                            <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <div class="p_pagination">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Spacing -->
            <div class="pd_bottom_90"></div>
            <!-- Spacing -->
        </section>
        <!---project end--->

        <section class="testimonial-section bg_light_1">
            <!-- Spacing -->
            <div class="pd_top_75"></div>
            <!-- Spacing -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_all_box style_three text-center dark_color">
                            <div class="title_sections three">
                                <div class="before_title">What Our Clients Say</div>
                                <h2>Customer Experiences</h2>
                                <p>We take pride in delivering exceptional services to our clients. <br>Here's what they
                                    have to say about their experience with us.</p>
                            </div>
                            <!-- Spacing -->
                            <div class="mr_bottom_25"></div>
                            <!-- Spacing -->
                        </div>
                    </div>
                </div>

                <div class="testimonial_sec light_color style_three">
                    <div class="swiper-container"
                        data-swiper='{
                "autoplay": {
                  "delay": 6000
                },
                "freeMode": true,
                "loop": true,
                "speed": 1000,
                "centeredSlides": true,
                "slidesPerView": 3,
                "spaceBetween": 30,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".next-single-one_three",
                  "prevEl": ".prev-single-one_three"
                },
                "breakpoints": {
                   "1200": {
                      "slidesPerView": 3
                   },
                   "1024": {
                    "slidesPerView": 3
                   },
                  "768": {
                    "slidesPerView": 2
                  },
                  "576": {
                    "slidesPerView": 1
                  },
                  "0": {
                    "slidesPerView": 1
                  }
                }
              }'>
                        <div class="swiper-wrapper">
                            @forelse($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial_box">
                                        <i class="icon-quote"></i>
                                        <p class="description">
                                            "{{ $testimonial->feedback }}"
                                        </p>
                                        <h3 class="title">{{ $testimonial->name }}</h3>
                                        <p class="from">{{ $testimonial->companyname }}</p>
                                        <div class="pic">
                                            @if ($testimonial->image)
                                                <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}"
                                                    alt="{{ $testimonial->name }}">
                                            @else
                                                <img src="{{ asset('assets/images/placeholder-user.jpg') }}"
                                                    alt="{{ $testimonial->name }}">
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <div class="testimonial_box">
                                        <i class="icon-quote"></i>
                                        <p class="description">
                                            "Tech Scouts delivered exceptional service that exceeded our expectations. Their
                                            team was professional and delivered on time."
                                        </p>
                                        <h3 class="title">No Testimonials Yet</h3>
                                        <p class="from">Be the first to share your experience</p>
                                        <div class="pic">
                                            <img src="{{ asset('assets/images/placeholder-user.jpg') }}"
                                                alt="Default testimonial">
                                        </div>
                                        <div class="rating">
                                            <ul>
                                                <li>
                                                    <span class="fa fa-star fill"></span>
                                                    <span class="fa fa-star fill"></span>
                                                    <span class="fa fa-star fill"></span>
                                                    <span class="fa fa-star fill"></span>
                                                    <span class="fa fa-star fill"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="arrows">
                        <div class="prev-single-one_three"></div>
                        <div class="next-single-one_three"></div>
                    </div>
                </div>
            </div>
            <!-- Spacing -->
            <div class="pd_bottom_55"></div>
            <!-- Spacing -->
        </section>


        <!-- Collaboration/Client Section -->
        <section class="client-section bg_dark_1">
            <!-- Spacing -->
            <div class="pd_top_50"></div>
            <!-- Spacing -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_all_box style_one text-center light_color mb-5">
                            <div class="title_sections">
                                <div class="before_title">Our Partners</div>
                                <h2>Companies We've Collaborated With</h2>
                                <p>We're proud to have worked with these amazing companies and organizations</p>
                            </div>
                        </div>

                        <div class="client_logo_carousel type_three">
                            <div class="swiper-container"
                                data-swiper='{
                       "autoplay": {
                         "delay": 6000
                       },
                       "freeMode": true,
                       "loop": true,
                       "speed": 1000,
                       "centeredSlides": false,
                       "slidesPerView": 5,
                       "spaceBetween": 30,
                       "pagination": {
                         "el": ".swiper-pagination",
                         "clickable": true
                       },
                       "breakpoints": {
                          "1200": {
                             "slidesPerView": 5
                          },
                          "1024": {
                           "slidesPerView": 4
                          },
                         "768": {
                           "slidesPerView": 3
                         },
                         "576": {
                           "slidesPerView": 2
                         },
                         "250": {
                          "slidesPerView": 2
                        },
                         "0": {
                           "slidesPerView": 1
                         }
                       }
                     }'>
                                <div class="swiper-wrapper">
                                    @forelse($companies as $company)
                                        <div class="swiper-slide">
                                            <div class="image">
                                                @if ($company->image)
                                                    <a href="{{ $company->link }}" target="_blank"
                                                        rel="noopener noreferrer">
                                                        <img src="{{ asset('uploads/Company/' . $company->image) }}"
                                                            alt="{{ $company->name }}" class="img-fluid">
                                                    </a>
                                                @else
                                                    <a href="{{ $company->link }}" target="_blank"
                                                        rel="noopener noreferrer">
                                                        <img src="{{ asset('assets/images/CLIENT-logo-w.png') }}"
                                                            alt="{{ $company->name }}" class="img-fluid">
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @empty
                                        <!-- Fallback logos if no companies exist -->
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets/images/CLIENT-logo-w.png') }}"
                                                    alt="Client logo" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets/images/CLIENT-logo-3-w.png') }}"
                                                    alt="Client logo" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets/images/CLIENT-logo-2-w.png') }}"
                                                    alt="Client logo" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets/images/CLIENT-logo-1-w.png') }}"
                                                    alt="Client logo" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image">
                                                <img src="{{ asset('assets/images/CLIENT-logo-3-w.png') }}"
                                                    alt="Client logo" class="img-fluid">
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Spacing -->
            <div class="pd_bottom_50"></div>
            <!-- Spacing -->
        </section>
    </div>
@endsection
