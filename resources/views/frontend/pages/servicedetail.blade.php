@extends('frontend.layouts.layout')
@section('title')

<head>
    <?php
    $ptitle = str_replace(' ', '%20', $fetch->name);
    $ptitles = Str::limit($fetch->name, 60);
    $pdese = strip_tags($fetch->long_description);
    $pdes = Str::limit($pdese, 160);
    ?>
    <title>{{ $fetch->name }} | Tech Scouts</title>
    <meta name="title" content="{{ $fetch->meta_title }}" />
    <meta name="description" content="{{ html_entity_decode($fetch->meta_description) }}" />
    <meta name="keywords" content="{{ $fetch->meta_keyword }}" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $fetch->meta_title }}" />
    <meta property="og:description" content="{{ html_entity_decode($fetch->meta_description) }}" />
    <meta property="og:image" content="https://techscouts.se/uploads/Service/{{ $fetch->image }}" />
    <meta property="og:url" content="https://techscouts.se/servicedetail{{ $fetch->slug }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:title" content="{{ $fetch->meta_title }}" />
    <meta name="twitter:description" content="{{ html_entity_decode($fetch->meta_description) }}" />
    <meta name="twitter:image" content="https://techscouts.se/uploads/Service/{{ $fetch->image }}" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "{{ $fetch->meta_title }}",
      "description": "{{ html_entity_decode($fetch->meta_description) }}",
      "url": "https://techscouts.se/servicedetail{{ $fetch->slug }}",
      "image": "https://techscouts.se/uploads/Service/{{ $fetch->image }}",
      "provider": {
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
<!-- Start Page Header -->
<div class="page_header_default style_one">
      <div class="parallax_cover">
               <div class="simpleParallax"><img src="{{ asset('assets') }}/images/page-header-default.jpg" alt="bg_image"
                     class="cover-parallax"></div>
            </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            {{ $fetch->name }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li class="active">{{ Str::limit($fetch->name, 20) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="meta_blog_single">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left_side">
                        <div class="date">
                            <i class="icon-calendar"></i> {{ $fetch->formatted_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Start Service Details Section -->
<section class="blog_single_section">
    <!-- Spacing -->
    <div class="pd_top_90"></div>
    <!-- Spacing -->

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog_single_details_outer">
                    <div class="single_content_upper">
                        <div class="blog_feature_image">
                            <img src="{{ asset('/uploads/Service/' . $fetch->image) }}"
                                 class="img-fluid"
                                 alt="{{ $fetch->name }}">
                        </div>

                        <!-- Spacing -->
                        <div class="pd_bottom_30"></div>
                        <!-- Spacing -->

                        <div class="post_single_content">
                            <div id="blog-content">
                                <h2>{{ $fetch->name }}</h2>
                                <div class="description_box">
                                    {!! html_entity_decode($fetch->long_description) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single_content_lower">
                        <div class="tags_and_share">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tags_content left_one">
                                    <div class="box_tags_psot">
                                        <span><i class="bx bx-category"></i> Category:</span>
                                        <a href="/servicecategory/{{ $fetch->serviceCategory->slug ?? '#' }}">
                                            {{ $fetch->serviceCategory->name ?? 'Uncategorized' }}
                                        </a>
                                    </div>
                                </div>
                                <div class="share_content right_one">
                                    <div class="share_socail">
                                        <div class="title">Share:</div>
                                        <?php $url = urlencode(route('servicedetail', ['slug' => $fetch->slug])); ?>
                                        <a href="https://www.facebook.com/sharer.php?u={{ $url }}"
                                           target="_blank"
                                           class="m_icon"
                                           title="Share on Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="https://twitter.com/share?url={{ $url }}"
                                           target="_blank"
                                           class="m_icon"
                                           title="Share on Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text=Check out this service: {{ $url }}"
                                           target="_blank"
                                           class="m_icon"
                                           title="Share on WhatsApp">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                                           target="_blank"
                                           class="m_icon"
                                           title="Share on LinkedIn">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area all_side_bar">
                    <div class="side_bar">
                        <!-- Spacing -->
                        <div class="pd_top_90"></div>
                        <!-- Spacing -->

                        <div class="widgets_grid_box">
                            <h2 class="widget-title">Popular Services</h2>
                            <div class="widget_post_box">
                                @foreach($related as $item)
                                <div class="blog_in clearfix image_in">
                                    <div class="image">
                                        <img src="{{ asset('/uploads/Service/' . $item->image) }}"
                                             alt="{{ $item->name }}">
                                    </div>
                                    <div class="content_inner">
                                        <p class="post-date">
                                            <span class="icon-calendar"></span> {{ $item->formatted_date }}
                                        </p>
                                        <h3>
                                            <a href="{{ route('servicedetail', ['slug' => $item->slug]) }}">
                                                {{ Str::limit($item->name, 40) }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widgets_grid_box">
                            <h2 class="widget-title">Service Categories</h2>
                            <div class="categories_list">
                                <ul>
                                   {{-- In your Blade view --}}
@forelse($categories as $category)
    <li>
        <a href="/servicecategory/{{ $category->slug ?? '#' }}">
            {{ $category->name }}
            <span>(
                @if(isset($category->services_count))
                    {{ $category->services_count }}
                @else
                    {{ $category->services()->count() }}
                @endif
            )</span>
        </a>
    </li>
@empty
    <li>No Categories Found</li>
@endforelse
                                </ul>
                            </div>
                        </div>

                        <!-- Spacing -->
                        <div class="pd_bottom_70"></div>
                        <!-- Spacing -->


                    </div>
                </aside>
            </div>
        </div>
    </div>

    <!-- Spacing -->
    <div class="pd_bottom_90"></div>
    <!-- Spacing -->
</section>

<style>
    /* Full-width video container */
    .video-container-full {
        width: 100%;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Blog feature image */
    .blog_feature_image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Speak button */
    .speak-btn {
        margin-bottom: 30px;
        padding: 10px 20px;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .speak-btn:hover {
        background: var(--secondary-color);
    }

    /* Share icons */
    .share_socail .m_icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: #f5f5f5;
        color: #555;
        border-radius: 50%;
        margin-right: 8px;
        transition: all 0.3s ease;
    }

    .share_socail .m_icon:hover {
        color: white;
        background: var(--primary-color);
    }

    /* Popular posts widget */
    .widget_post_box .blog_in {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .widget_post_box .image {
        width: 80px;
        height: 80px;
        float: left;
        margin-right: 15px;
        overflow: hidden;
        border-radius: 4px;
    }

    .widget_post_box .content_inner {
        overflow: hidden;
    }
</style>

@endsection
