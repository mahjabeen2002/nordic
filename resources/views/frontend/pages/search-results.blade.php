@extends('frontend.layouts.layout')
@section('title')
    <head>
        <title>Search Results | Tech Scouts</title>
        <meta name="description" content="Search results for services offered by Tech Scouts" />
    </head>
@endsection
@section('content')
    <!-- Start Page Header -->
    <div class="page_header_default style_one">
        <div class="parallax_cover">
            <img src="{{ asset('assets') }}/images/page-header-default.jpg" alt="Search Results Background" class="cover-parallax">
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                Search Results
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Search Results</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Search Results Section -->
    <section class="services-section">
        <div class="pd_top_90"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                            <h2>Search Results for "{{ $query }}"</h2>
                            <p>{{ count($services) }} results found</p>
                        </div>
                    </div>

                    <!-- Search Form -->
                    <div class="search_form_container mb-5">
                        <form role="search" method="get" action="{{ route('search') }}">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search services..." value="{{ $query }}" name="s" />
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if(count($services) > 0)
            <!-- Start Services Section -->
    <section class="services-section">
        <!-- Spacing -->
        <div class="pd_top_90"></div>
        <!-- Spacing -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                            <div class="before_title">Explore Our Offerings</div>
                            <h2>Our Professional Services</h2>
                            <p>Comprehensive digital solutions tailored to your business needs. Discover how our expertise can transform your digital presence.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($services as $service)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-5">
                        <div class="service_box style_one" data-service-id="{{ $service->id }}">
                            <div class="service_img">
                                <div class="service_badge">Popular</div>
                                <img src="{{ asset('/uploads/Service/' . $service->image) }}" alt="{{ $service->name }}"
                                    class="img-fluid">
                                <div class="service_hover_content">
                                    <div class="arrow">
                                        <a href="{{ route('servicedetail', ['slug' => $service->slug]) }}">
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="content_box"  style="height: 170px">
                                <div class="category_tag">{{ $service->serviceCategory->name ?? 'General' }}</div>
                                <h3 class="title_service">
                                    <a href="{{ route('servicedetail', ['slug' => $service->slug]) }}">
                                        {{ $service->name }}
                                    </a>
                                </h3>
                                <p class="service_excerpt">{{ Str::limit(strip_tags($service->description), 80) }}</p>

                                <div class="service_footer">
                                    <a href="{{ route('servicedetail', ['slug' => $service->slug]) }}" class="read_more">
                                        Read More <i class="icon-right-arrow"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <!-- Spacing -->
        <div class="pd_bottom_90"></div>
        <!-- Spacing -->
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Retrieve visited services from cookies
            const visitedServices = JSON.parse(getCookie('visited_services')) || [];

            // Iterate through each service card
            const serviceCards = document.querySelectorAll('.service_box');
            serviceCards.forEach(card => {
                const serviceId = card.dataset.serviceId;
                // Check if the service ID exists in visitedServices array
                if (visitedServices.includes(serviceId)) {
                    // Apply custom styles for visited services
                    card.classList.add('visited-service');
                    card.querySelector('.service_badge').textContent = 'Viewed';
                    card.querySelector('.service_badge').classList.add('viewed-badge');
                }
            });
        });

        // Function to retrieve cookie value by name
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }
    </script>

<style>
    /* Enhanced Service Box Styles */
    .service_box.style_one {
        margin-bottom: 30px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        background: #fff;
        position: relative;
    }

    .service_box.style_one:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .service_img {
        position: relative;
        overflow: hidden;
        height: 220px;
    }

    .service_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
    }

    .service_box:hover .service_img img {
        transform: scale(1.1);
    }

    .service_badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: var(--primary-color);
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        z-index: 2;
    }

    .service_hover_content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 20px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .service_box:hover .service_hover_content {
        opacity: 1;
    }

    .service_stats {
        display: flex;
        gap: 15px;
        margin-bottom: 10px;
        color: #fff;
        font-size: 13px;
    }

    .service_stats span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .service_img .arrow {
        position: static;
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        margin-left: auto;
        opacity: 1;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .service_box:hover .arrow {
        transform: translateY(0);
    }

    .content_box {
        padding: 25px;
    }

    .category_tag {
        font-size: 12px;
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .title_service a {
        color: #222;
        font-weight: 700;
        font-size: 20px;
        transition: color 0.3s ease;
        line-height: 1.4;
        display: block;
        margin-bottom: 10px;
    }

    .title_service a:hover {
        color: var(--primary-color);
    }

    .service_excerpt {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .service_footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .read_more {
        color: var(--primary-color);
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        font-size: 14px;
    }

    .read_more i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .read_more:hover i {
        transform: translateX(5px);
    }

    .starting_at {
        font-size: 14px;
        font-weight: 600;
        color: #444;
    }

    /* Visited service style */
    .service_box.visited-service {
        border-left: 4px solid var(--primary-color);
    }

    .viewed-badge {
        background: #6c757d !important;
    }

    /* Pagination */
    .pagination_style.style_one .page-item .page-link {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        margin: 0 5px;
        color: #555;
        font-weight: 600;
        border: 1px solid #eee;
    }

    .pagination_style.style_one .page-item.active .page-link {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }

    .pagination_style.style_one .page-item .page-link:hover {
        background: #f8f9fa;
        color: var(--primary-color);
    }

    /* CTA Section */
    .cta-section {
        padding: 60px 0;
        color: white;
    }

    .cta-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .cta-desc {
        font-size: 16px;
        opacity: 0.9;
        margin-bottom: 0;
    }

    .btn-light {
        background: white;
        color: var(--primary-color);
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-light:hover {
        background: #f8f9fa;
        transform: translateY(-2px);
    }

    /* Title section improvements */
    .before_title {
        color: var(--primary-color);
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .title_sections h2 {
        font-size: 38px;
        margin-bottom: 15px;
    }

    .title_sections p {
        font-size: 18px;
        color: #666;
        line-height: 1.6;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
        .service_img {
            height: 200px;
        }

        .title_sections h2 {
            font-size: 32px;
        }
    }

    @media (max-width: 767px) {
        .service_footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .cta-section .row > div {
            text-align: center !important;
        }

        .cta-section .btn {
            margin-top: 20px;
        }
    }
</style>
            @else
            <div class="row">
                <div class="col-12 text-center">
                    <p>No services found matching your search criteria.</p>
                    <a href="{{ route('services') }}" class="btn btn-primary">View All Services</a>
                </div>
            </div>
            @endif
        </div>

        <div class="pd_bottom_90"></div>
    </section>
@endsection
