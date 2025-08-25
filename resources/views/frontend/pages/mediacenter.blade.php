@extends('frontend.layouts.layout')
@section('title')
<head>
    <head>
        <title>Media Center | Tech Scouts</title>
        <meta name="description" content="Explore the latest media, articles, and resources at Tech Scouts." />
        <meta name="keywords" content="Tech Scouts, Media Center, Software Development, Technology News" />

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Media Center | Tech Scouts" />
        <meta property="og:description" content="Explore the latest media, articles, and resources at Tech Scouts." />
        <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
        <meta property="og:url" content="https://techscouts.se/mediacenter" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Tech Scouts" />

        <!-- Twitter Card -->
        <meta name="twitter:title" content="Media Center | Tech Scouts" />
        <meta name="twitter:description" content="Explore the latest media, articles, and resources at Tech Scouts." />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />

        <!-- Structured Data (Schema.org) -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebPage",
          "name": "Media Center | Tech Scouts",
          "description": "Explore the latest media, articles, and resources at Tech Scouts.",
          "url": "https://techscouts.se/mediacenter",
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

<div class="page_header_default style_one">
    <div class="parallax_cover">
        <img src="{{ asset('assets') }}/images/page-header-default.jpg" alt="Media Center Background" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            Media Center
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Media Center</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Start Media Center Section -->
<section class="blog-section">
    <!-- Spacing -->
    <div class="pd_top_90"></div>
    <!-- Spacing -->

    <div class="container">
        <div class="row grid_layout">
            @foreach ($fetch as $f)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 grid_box" >
                <div class="news_box style_one blog_classic has_images" style="height:500px">
                    <div class="image img_hover-1">
                        @if ($f->video_url != 'null')
                            <div class="embed-responsive embed-responsive-16by9" style="width: :100%;height:350px">
                                <iframe class="embed-responsive-item" src="{{ $f->video_url }}" allowfullscreen></iframe>
                            </div>
                        @elseif($f->image != 'null')
                            <a href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}">
                                <img src="{{ asset('/uploads/mediacenter/' . $f->image) }}" alt="{{ $f->title }}">
                            </a>
                        @endif
                        <a class="arrow" href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                    <div class="content_box">
                        <div class="date">
                            <span class="date_in_number">{{ $f->created_at->format('d') }}</span>
                            <span class="date_in_month">{{ $f->created_at->format('M') }}</span>
                        </div>

                        <div class="post-meta">
                        </div>

                        <h2 class="title">
                            <a href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}">{{ $f->title }}</a>
                        </h2>

                        <a href="{{ route('mediacenterdetail', ['slug' => $f->slug]) }}" class="read-more-link">
                            Read More <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($fetch->hasPages())
        <div class="row">
            <div class="col-lg-12">
                <div class="pagination-wrapper">
                    <nav class="pagination-navigation">
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if ($fetch->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link"><i class="fas fa-angle-left"></i></span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $fetch->previousPageUrl() }}" rel="prev">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($fetch->getUrlRange(1, $fetch->lastPage()) as $page => $url)
                                @if ($page == $fetch->currentPage())
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($fetch->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $fetch->nextPageUrl() }}" rel="next">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link"><i class="fas fa-angle-right"></i></span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Spacing -->
    <div class="pd_bottom_90"></div>
    <!-- Spacing -->
</section>
<!-- End Media Center Section -->


<style>
    /* Custom Pagination Styles to Match Template */
    .pagination-wrapper {
        margin-top: 50px;
        text-align: center;
    }

    .pagination {
        display: inline-flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .page-item {
        margin: 0 5px;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #f7f7f7;
        color: #222;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
    }

    .page-item.active .page-link,
    .page-link:hover {
        background: var(--primary-color);
        color: #fff;
    }

    .page-item.disabled .page-link {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .page-link i {
        font-size: 14px;
    }
</style>
@endsection
