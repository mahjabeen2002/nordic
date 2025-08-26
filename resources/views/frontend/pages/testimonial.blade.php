@extends('frontend.layouts.layout')
@section('title')
<head>
    <title>Service Categories | Tech Scouts</title>
    <meta name="description" content="Service Categories Page" />
    <meta name="keywords" content="Tech Scouts, Service Categories" />
    <!-- ... (your existing meta tags) ... -->
</head>
@endsection

@section('content')
  <!-- Start Page Header -->
    <div class="page_header_default style_one">
        <div class="parallax_cover">
            <img src="{{ asset('assets') }}/images/page-header-default.jpg" alt="Services Background"
                class="cover-parallax">
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                Our Services
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Testimonials Section -->
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
                        <p>We take pride in delivering exceptional services to our clients. <br>Here's what they have to say about their experience with us.</p>
                    </div>
                    <!-- Spacing -->
                    <div class="mr_bottom_25"></div>
                    <!-- Spacing -->
                </div>
            </div>
        </div>

        <div class="testimonial_sec light_color style_three">
            <div class="swiper-container" data-swiper='{
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
                                @if($testimonial->image)
                                <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}" alt="{{ $testimonial->name }}">
                                @else
                                <img src="{{ asset('assets/images/placeholder-user.jpg') }}" alt="{{ $testimonial->name }}">
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    @empty
                    <div class="swiper-slide">
                        <div class="testimonial_box">
                            <i class="icon-quote"></i>
                            <p class="description">
                                "Tech Scouts delivered exceptional service that exceeded our expectations. Their team was professional and delivered on time."
                            </p>
                            <h3 class="title">No Testimonials Yet</h3>
                            <p class="from">Be the first to share your experience</p>
                            <div class="pic">
                                <img src="{{ asset('assets/images/placeholder-user.jpg') }}" alt="Default testimonial">
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

<!-- ... (rest of your content) ... -->

<style>
    /* Testimonial Styles */
    .testimonial_box {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
    }

    .testimonial_box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .testimonial_box i.icon-quote {
        font-size: 36px;
        color: var(--primary-color);
        opacity: 0.2;
        margin-bottom: 15px;
        display: block;
    }

    .testimonial_box .description {
        color: #555;
        font-style: italic;
        line-height: 1.6;
        margin-bottom: 20px;
        font-size: 15px;
    }

    .testimonial_box .title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #222;
    }

    .testimonial_box .from {
        color: var(--primary-color);
        font-size: 14px;
        margin-bottom: 15px;
    }

    .testimonial_box .pic {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto 15px;
        border: 4px solid #f7f7f7;
    }

    .testimonial_box .pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .testimonial_box .rating {
        margin-top: 10px;
    }

    .testimonial_box .rating .fill {
        color: #FFC107;
    }

    .testimonial_box .rating .empty {
        color: #ddd;
    }

    /* Swiper navigation arrows */
    .arrows {
        position: relative;
        margin-top: 30px;
    }

    .prev-single-one_three,
    .next-single-one_three {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-color);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
    }

    .prev-single-one_three {
        left: -50px;
    }

    .next-single-one_three {
        right: -50px;
    }

    .prev-single-one_three:hover,
    .next-single-one_three:hover {
        background: #222;
    }

    @media (max-width: 768px) {
        .prev-single-one_three {
            left: 10px;
        }

        .next-single-one_three {
            right: 10px;
        }
    }
</style>

@endsection
