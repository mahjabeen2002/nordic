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
            <section class="banner-section bg_op_1" style="background-image: url({{ asset('assets') }}/images/sliders/banner-9.jpg);">
               <!--===============spacing==============-->
               <div class="pd_top_100"></div>
               <!--===============spacing==============-->
               <div class="auto-container">
                  <div class="row align-items-center">
                     <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="title_all_box style_one dark_color">
                           <div class="title_sections">
                              <div class="before_title">Solutions for your business</div>
                              <h2 class="title_big">Searching for the best HR software for your business?</h2>
                              <p>Our power of choice is untrammelled and when nothing prevents being able to do what we
                                 like best every pleasure.</p>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                        <div class="theme_btn_all color_one">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Enroll Now</a>
                        </div>
                         <!--===============spacing==============-->
                         <div class="pd_bottom_40"></div>
                         <!--===============spacing==============-->
                     </div>
                     <div class="col-xl-1 hidden-lg"></div>
                     <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="contact_form_box_all type_five">
                           <div class="contact_form_box_inner simple_form">
                              <div class="title_all_box style_one dark_color">
                                 <div class="title_sections">
                                    <div class="before_title">We here to help you</div>
                                    <h6 class="font_24">Book Appointment</h6>
                                 </div>
                              </div>
                              <!--===============spacing==============-->
                              <div class="pd_bottom_10"></div>
                              <!--===============spacing==============-->
                              <div class="contact_form_shortcode">
                                 <form action="#" method="post" class="wpcf7-form init">
                                    <p>
                                       <label><br>
                                          <input type="text" name="your-name" value="" size="40"  aria-required="true" aria-invalid="false" placeholder="Enter Your Name"></span><br>
                                          <i class="fa fa-user"></i><br>
                                       </label>
                                    </p>
                                    <p><label><br>
                                          <input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false"  placeholder="Enter Your Email"></span><br>
                                          <i class="fa fa-envelope"></i><br>
                                       </label>
                                    </p>
                                    <p>
                                       <label><br>
                                          <input type="text" name="your-subject" value="" size="40" aria-required="true" aria-invalid="false"  placeholder="Enter Your Subject"></span><br>
                                          <i class="fa fa-folder"></i><br>
                                       </label>
                                    </p>
                                    <p><input type="submit" value="Submit"> </p>

                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_100"></div>
               <!--===============spacing==============-->
            </section>
            <!----banner end---->
            <!----client ---->
            <section class="client-section bg_dark_1">
               <!--===============spacing==============-->
               <div class="pd_top_50"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="client_logo_carousel type_three">
                        <div class="swiper-container" data-swiper='{
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
                              <div class="swiper-slide">
                                 <div class="image text-center">
                                    <img src="{{ asset('assets') }}/images/CLIENT-logo-w.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image text-center">
                                    <img src="{{ asset('assets') }}/images/CLIENT-logo-3-w.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image text-center">
                                    <img src="{{ asset('assets') }}/images/CLIENT-logo-2-w.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image text-center">
                                    <img src="{{ asset('assets') }}/images/CLIENT-logo-1-w.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image text-center">
                                    <img src="{{ asset('assets') }}/images/CLIENT-logo-3-w.png" alt="clients-logo" class="img-fluid" />
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_50"></div>
               <!--===============spacing==============-->
            </section>
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
                              <img src="{{ asset('assets') }}/images/about/about-3.jpg" class="img-fluid object-fit-cover height_560" alt="about">
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
                                    <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                       End to end visibility of time metrics for the hybrid workforce </a>
                                 </small></li>
                              <li class="list_items pd_bottom_10">
                                 <small class="d-flex align-items-center">
                                    <span class="icon_bx">
                                       <i class=" icon-checked"></i>
                                    </span>
                                    <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                       Workload Balancing between individuals and teams </a>
                                 </small></li>
                              <li class="list_items pd_bottom_10">
                                 <small class="d-flex align-items-center">
                                    <span class="icon_bx">
                                       <i class=" icon-checked"></i>
                                    </span>
                                    <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                       Create Automated timesheets concentrated facilities </a>
                                 </small></li>
                              <li class="list_items pd_bottom_10">
                                 <small class="d-flex align-items-center">
                                    <span class="icon_bx">
                                       <i class=" icon-checked"></i>
                                    </span>
                                    <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                       Integrate ProHance data within payroll systems </a>
                                 </small></li>
                              <li class="list_items pd_bottom_10">
                                 <small class="d-flex align-items-center">
                                    <span class="icon_bx">
                                       <i class=" icon-checked"></i>
                                    </span>
                                    <a class="nav_link" href="#" target="&quot;_blank&quot;" rel="&quot;nofollow&quot;">
                                       Transform processes based on work patterns </a>
                                 </small></li>
                           </ul>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                        <div class="theme_btn_all color_one">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one">Start 14 Day Trial Now</a>
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
            <section class="service-section bg_light_1">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row align-items-end">
                     <div class="col-lg-8">
                        <div class="title_all_box style_one">
                           <div class="title_sections">
                              <h2 class="title">Focus on your Business</h2>
                              <p>When you work with HR Solutions, you get the best. We provide adaptable solutions
                                 that allow you to be a part of the entire process</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="theme_btn_all color_one text-md-end">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one">View All Services</a>
                           <!--===============spacing==============-->
                           <div class="pd_bottom_30"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_20"></div>
                     <!--===============spacing==============-->
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-1 hidden-xl"></div>
                  <div class="col-xxl-10 col-xl-12">
                     <div class="service_caro_section carousel style_one">
                        <div class="swiper-container" data-swiper='{
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
                              <div class="swiper-slide">
                                 <div class="service_carousel style_one">
                                    <div class="image">
                                       <div class="overlay"></div>
                                       <img width="500" height="500" src="{{ asset('assets') }}/images/service/service-image-5.jpg"
                                          class="attachment-creote-service-image size-creote-service-image" alt="img">
                                    </div>
                                    <div class="content">
                                       <div class="icon_box">
                                          <span class="icon icon-thumbs-up icon"></span>
                                       </div>
                                       <h2 class="title_service"><a href="service.html" rel="bookmark">Health Care
                                             Benefits</a></h2>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="service_carousel style_one">
                                    <div class="image">
                                       <div class="overlay"></div>
                                       <img width="500" height="500" src="{{ asset('assets') }}/images/service/service-image-4.jpg"
                                          class="attachment-creote-service-image size-creote-service-image" alt="img">
                                    </div>
                                    <div class="content">
                                       <div class="icon_box">
                                          <span class="icon icon-thumbs-up icon"></span>
                                       </div>
                                       <h2 class="title_service"><a href="service.html" rel="bookmark">Risk
                                             Management</a></h2>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="service_carousel style_one">
                                    <div class="image">
                                       <div class="overlay"></div>
                                       <img width="500" height="500" src="{{ asset('assets') }}/images/service/service-image-3.png"
                                          class="attachment-creote-service-image size-creote-service-image" alt="img">
                                    </div>
                                    <div class="content">
                                       <div class="icon_box">
                                          <span class="icon icon-thumbs-up icon"></span>
                                       </div>
                                       <h2 class="title_service"><a href="service.html" rel="bookmark">Compliance
                                             Audits</a></h2>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="service_carousel style_one">
                                    <div class="image">
                                       <div class="overlay"></div>
                                       <img width="500" height="500" src="{{ asset('assets') }}/images/service/service-image-2.png"
                                          class="attachment-creote-service-image size-creote-service-image" alt="img">
                                    </div>
                                    <div class="content">
                                       <div class="icon_box">
                                          <span class="icon icon-thumbs-up icon"></span>
                                       </div>
                                       <h2 class="title_service"><a href="service.html" rel="bookmark">Employee
                                             Relations</a></h2>
                                    </div>
                                 </div>
                              </div>

                              <div class="swiper-slide">
                                 <div class="service_carousel style_one">
                                    <div class="image">
                                       <div class="overlay"></div>
                                       <img loading="lazy" width="500" height="500"
                                          src="{{ asset('assets') }}/images/service/service-image-6.jpg"
                                          class="attachment-creote-service-image size-creote-service-image" alt="img">
                                    </div>
                                    <div class="content">
                                       <div class="icon_box">
                                          <span class="icon icon-thumbs-up icon"></span>
                                       </div>
                                       <h2 class="title_service"><a href="service.html" rel="bookmark">Talent
                                             Management</a></h2>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="service_carousel style_one">
                                    <div class="image">
                                       <div class="overlay"></div>
                                       <img width="500" height="500" src="{{ asset('assets') }}/images/service/service-image-5.jpg"
                                          class="attachment-creote-service-image size-creote-service-image" alt="img">
                                    </div>
                                    <div class="content">
                                       <div class="icon_box">
                                          <span class="icon icon-thumbs-up icon"></span>
                                       </div>
                                       <h2 class="title_service"><a href="service.html" rel="bookmark">Health Care
                                             Benefits</a></h2>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           <div class="p_pagination">
                              <div class="swiper-pagination"></div>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-1 hidden-xl"></div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_80"></div>
               <!--===============spacing==============-->
            </section>
            <!----service end---->
            <!----content---->
            <!----content end---->
            <!----process---->
            <section class="process-section bg_light_1">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-2"></div>
                     <div class="col-lg-8">
                        <div class="title_all_box style_one text-center dark_color">
                           <div class="title_sections">
                              <div class="before_title">The Steps of</div>
                              <h2 class="title">Recruitment Process</h2>
                              <p>Keep rising employee health care costs down. An employer's total benefit costs can be
                                 as much as 40 percent of the company's operating budget.</p>
                           </div>
                           <!--===============spacing==============-->
                           <div class="pd_top_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                     <div class="col-lg-2"></div>
                  </div>
                  <div class="process-content-wapper">
                     <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero border_r">
                           <div class="icon_box_all style_six version_2">
                              <div class="icon_content">
                                 <div class="icon">
                                    <img src="{{ asset('assets') }}/images/010-job-search.png" class="img-fluid svg_image"
                                       alt="icon png">
                                 </div>
                                 <div class="text_box">
                                    <h2><a href="#" target="_blank" rel="nofollow"> Identifiying the Needs</a></h2>
                                    <p>Holds in these matters principles all selection right rejects.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero border_r">
                           <div class="icon_box_all style_six version_2">
                              <div class="icon_content">
                                 <div class="icon">
                                    <img src="{{ asset('assets') }}/images/process-icon-im-1.png" class="img-fluid svg_image"
                                       alt="icon png">
                                 </div>
                                 <div class="text_box">
                                    <h2><a href="#" target="_blank" rel="nofollow">Preparing Job Description</a></h2>
                                    <p>Our unique approach locates skill based industry professionals</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero border_r">
                           <div class="icon_box_all style_six version_2">
                              <div class="icon_content">
                                 <div class="icon">
                                    <img src="{{ asset('assets') }}/images/service-ico-2.png" class="img-fluid svg_image"
                                       alt="icon png">
                                 </div>
                                 <div class="text_box">
                                    <h2><a href="#" target="_blank" rel="nofollow"> Find Talented Candidate</a></h2>
                                    <p>Fault with man who choose enjoy a annoying consequences.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-12 col-md-6 pd_zero">
                           <div class="icon_box_all style_six version_2">
                              <div class="icon_content">
                                 <div class="icon">
                                    <img src="{{ asset('assets') }}/images/process-icon-im-2.png" class="img-fluid svg_image"
                                       alt="icon png">
                                 </div>
                                 <div class="text_box">
                                    <h2><a href="#" target="_blank" rel="nofollow"> Screening &amp; Shortlisting</a>
                                    </h2>
                                    <p>Professional checks as well as a local records reference check</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_250"></div>
               <!--===============spacing==============-->
            </section>
            <section class="content-section-two mr_top_minus_150">
               <div class="auto-container">
                  <div class="row gutter_minus_25px">
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 pd_zero bg_op_1"
                        style="background-image: url({{ asset('assets') }}/images/blog/blog-image-8.jpg);">

                     </div>
                     <div
                        class="col-xxl-9 col-xl-8 col-lg-6 col-md-12 pd_top_60 pd_bottom_40 pd_left_60 pd_right_60 bg_dark_3 bg_pattern_2"
                        style="background-image: url({{ asset('assets') }}/images/pannern-n3.png);">
                        <div class="title_all_box style_one">
                           <div class="title_sections">
                              <div class="before_title color_white">831,435+</div>
                              <h2 class="title color_white">Trusted , Happy &amp; Satisfied Businesses</h2>
                              <p class="color_white">When you work with HR Solutions, you get the best. We provide
                                 adaptable solutions that
                                 allow you to be a part of the entire process</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!---price--->
            <!---price end--->
            <!---project--->
            <section class="project-section bg_light_1">
               <!--===============spacing==============-->
               <div class="pd_top_90"></div>
               <!--===============spacing==============-->
               <div class="auto-container">
                  <div class="row align-items-end">
                     <div class="col-lg-8">
                        <div class="title_all_box style_one">
                           <div class="title_sections">
                              <div class="before_title">
                                 Incredibly
                              </div>
                              <h2 class="title">Effective Case Studies</h2>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="theme_btn_all color_one text-md-end">
                           <a href="#" target="_blank" rel="nofollow" class="theme-btn one">More Works</a>
                           <!--===============spacing==============-->
                           <div class="pd_bottom_25"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_30"></div>
                     <!--===============spacing==============-->
                  </div>
               </div>
                   <div class="container-fluid">

                           <div class="project_caro_section carousel style_four ">
                              <div class="swiper-container" data-swiper='{
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
                                    <div class="swiper-slide">
                                       <div class="project_post style_one  style_four_caro">
                                          <div class="image">
                                             <img width="742" height="495" src="{{ asset('assets') }}/images/projects/project-3-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="img">
                                          </div>
                                          <div class="project_caro_content">
                                             <div class="left_side">
                                                <p>Human Resources</p>
                                                <h2 class="title_pro"><a href="#" rel="bookmark">Essential Steps to Writing
                                                      Job Description</a></h2>
                                             </div>
                                             <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="project_post style_one  style_four_caro">
                                          <div class="image">
                                             <img width="746" height="497" src="{{ asset('assets') }}/images/projects/project-2-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="img">
                                          </div>
                                          <div class="project_caro_content">
                                             <div class="left_side">
                                                <p>Coaching</p>
                                                <h2 class="title_pro"><a href="#" rel="bookmark">Complex Dismissal for a Small
                                                      Company</a></h2>
                                             </div>
                                             <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="swiper-slide">
                                       <div class="project_post style_one  style_four_caro">
                                          <div class="image">
                                             <img width="731" height="488" src="{{ asset('assets') }}/images/projects/project-6-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="img">
                                          </div>
                                          <div class="project_caro_content">
                                             <div class="left_side">
                                                <p>Recruiting</p>
                                                <h2 class="title_pro"><a href="#" rel="bookmark">Shared Time Human Resources
                                                      Management</a></h2>
                                             </div>
                                             <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="project_post style_one  style_four_caro">
                                          <div class="image">
                                             <img width="887" height="591" src="{{ asset('assets') }}/images/projects/project-5-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="img">
                                          </div>
                                          <div class="project_caro_content">
                                             <div class="left_side">
                                                <p>Values</p>
                                                <h2 class="title_pro"><a href="#" rel="bookmark">Six Essential Steps To
                                                      Writing Successful Job</a></h2>
                                             </div>
                                             <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="project_post style_one  style_four_caro">
                                          <div class="image">
                                             <img width="827" height="465" src="{{ asset('assets') }}/images/projects/project-4-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="img">
                                          </div>
                                          <div class="project_caro_content">
                                             <div class="left_side">
                                                <p>Pre sale</p>
                                                <h2 class="title_pro"><a href="#" rel="bookmark">Time HR Prepares Plastic
                                                      Contract Manufacturer</a></h2>
                                             </div>
                                             <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="project_post style_one  style_four_caro">
                                          <div class="image">
                                             <img width="742" height="495" src="{{ asset('assets') }}/images/projects/project-3-img.jpg"
                                                class="attachment-creote_project_caro_image_style_one size-creote_project_caro_image_style_one"
                                                alt="img">
                                          </div>
                                          <div class="project_caro_content">
                                             <div class="left_side">
                                                <p>Human Resources</p>
                                                <h2 class="title_pro"><a href="#" rel="bookmark">Essential Steps to Writing
                                                      Job Description</a></h2>
                                             </div>
                                             <div class="right_side">
                                                <a href="#"><i class="icon-right-arrow"></i></a>
                                                <a href="#" class="two"><i class="icon-right-arrow"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="p_pagination">
                                    <div class="swiper-pagination"></div>
                                 </div>

                              </div>
                           </div>
                        </div>


                 <!--===============spacing==============-->
                 <div class="pd_bottom_90"></div>
                 <!--===============spacing==============-->

            </section>
            <!---project end--->
            <!--testimonial-->
            <section  class="testimonial-section bg_op_1" style="background-image: url({{ asset('assets') }}/images/testi-home-9.jpg);">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="title_all_box style_one text-center light_color">
                           <div class="title_sections">
                              <div class="before_title color_white">Customer Reviews</div>
                              <h2 class="title color_white">See What Our Clients Speak</h2>
                           </div>
                           <!--===============spacing==============-->
                           <div class="pd_top_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-9 m-auto">
                        <div class="testimonial_sec style_v2_two">
                           <div class="swiper-container" data-swiper='{
                              "autoplay": {
                                "delay": 6000
                              },
                              "freeMode": true,
                              "loop": true,
                              "speed": 1000,
                              "centeredSlides": false,
                              "slidesPerView": 1,
                              "spaceBetween": 30,
                              "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                              },
                              "navigation": {
                                 "nextEl": ".next-single-one",
                                 "prevEl": ".prev-single-one"
                               },
                              "breakpoints": {
                                 "1200": {
                                    "slidesPerView": 1
                                 },
                                 "1024": {
                                  "slidesPerView": 1
                                 },
                                "768": {
                                  "slidesPerView": 1
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
                                 <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                       <div class="authour_details">
                                          <div class="c_image">
                                             <img src="{{ asset('assets') }}/images/team/team-6.png" alt="image">
                                          </div>
                                          <div class="comment">
                                             Affordable and refreshingly easy to use HR management software for small to
                                             medium businesses. CakeHR is built with ease of use in mind.Unlike older HR
                                             platforms which can be painfully slow and complex
                                          </div>
                                          <div class="details clearfix">
                                             <div class="c_content">
                                                <div class="content_in">
                                                   <h2>Jacob Leonardo</h2>
                                                   <span>Senior Manager of Excel Solution</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="rating">
                                             <ul>
                                                <li><span class="fa fa-star fill"></span><span
                                                      class="fa fa-star fill"></span><span
                                                      class="fa fa-star empty"></span><span
                                                      class="fa fa-star empty"></span><span class="fa fa-star empty"></span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                       <div class="authour_details">
                                          <div class="c_image">
                                             <img src="{{ asset('assets') }}/images/team/team-4.jpg" alt="image">
                                          </div>
                                          <div class="comment">
                                             Affordable and refreshingly easy to use HR management software for small to
                                             medium businesses. CakeHR is built with ease of use in mind.Unlike older HR
                                             platforms which can be painfully slow and complex
                                          </div>
                                          <div class="details clearfix">
                                             <div class="c_content">
                                                <div class="content_in">
                                                   <h2>Jacob Leonardo</h2>
                                                   <span>Senior Manager of Excel Solution</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="rating">
                                             <ul>
                                                <li><span class="fa fa-star fill"></span><span
                                                      class="fa fa-star fill"></span><span
                                                      class="fa fa-star empty"></span><span
                                                      class="fa fa-star empty"></span><span class="fa fa-star empty"></span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                       <div class="authour_details">
                                          <div class="c_image">
                                             <img src="{{ asset('assets') }}/images/team/team-5.png" alt="image">
                                          </div>
                                          <div class="comment">
                                             Affordable and refreshingly easy to use HR management software for small to
                                             medium businesses. CakeHR is built with ease of use in mind.Unlike older HR
                                             platforms which can be painfully slow and complex
                                          </div>
                                          <div class="details clearfix">
                                             <div class="c_content">
                                                <div class="content_in">
                                                   <h2>Jacob Leonardo</h2>
                                                   <span>Senior Manager of Excel Solution</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="rating">
                                             <ul>
                                                <li><span class="fa fa-star fill"></span><span
                                                      class="fa fa-star fill"></span><span
                                                      class="fa fa-star empty"></span><span
                                                      class="fa fa-star empty"></span><span class="fa fa-star empty"></span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="testimonial_box clearfix">
                                       <div class="authour_details">
                                          <div class="c_image">
                                             <img src="{{ asset('assets') }}/images/team/team-6.png" alt="image">
                                          </div>
                                          <div class="comment">
                                             Affordable and refreshingly easy to use HR management software for small to
                                             medium businesses. CakeHR is built with ease of use in mind.Unlike older HR
                                             platforms which can be painfully slow and complex
                                          </div>
                                          <div class="details clearfix">
                                             <div class="c_content">
                                                <div class="content_in">
                                                   <h2>Jacob Leonardo</h2>
                                                   <span>Senior Manager of Excel Solution</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="rating">
                                             <ul>
                                                <li><span class="fa fa-star fill"></span><span
                                                      class="fa fa-star fill"></span><span
                                                      class="fa fa-star empty"></span><span
                                                      class="fa fa-star empty"></span><span class="fa fa-star empty"></span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="arrows">
                              <div class="prev-single-one"></div>
                              <div class="next-single-one"></div>
                           </div>
                        </div>
                  </div>
                  </div>
               </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_80"></div>
            <!--===============spacing==============-->
            </section>
            <!--testimonial end-->
            <!--blog-->
            <section class="blog-section">
               <!--===============spacing==============-->
               <div class="pd_top_80"></div>
               <!--===============spacing==============-->
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="title_all_box style_one text-center  dark_color">
                           <div class="title_sections">
                              <div class="before_title">Flexible Plan</div>
                              <h2 class="title">Perfect for Small &amp; Lare Brands</h2>
                           </div>
                           <!--===============spacing==============-->
                           <div class="pd_top_20"></div>
                           <!--===============spacing==============-->
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="blog_post_section  three_column news_wrapper_grid style_four">
                           <div class="grid_show_case grid_layout clearfix">

                              <div class="grid_box _card style_man">
                                 <div class="news_box style_four no_radius has_images"
                                    style="background-image: url('{{ asset('assets') }}/images/blog/blog-image-11.jpg');">
                                    <div class="overlay"></div>
                                    <div class="date">
                                       <span class="date_in_month">Oct</span>
                                       <span class="date_in_number">08</span>
                                    </div>
                                    <div class="content_box">
                                       <div class="category">
                                          <a href="#" class="categories"><i class="icon-folder"></i>Coaching</a>
                                       </div>
                                       <h2 class="title"><a href="blog-single.html" rel="bookmark">Workplace problems in
                                             your business?</a></h2>
                                    </div>
                                    <div class="auhtour_box">
                                       <img alt="img" src="{{ asset('assets') }}/images/auth-2.png"  height="60" width="60" class="img-fluid">
                                       <div class="contnet_a">
                                          <p>POSTED BY</p>
                                          <h4> Evan Thomas </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="grid_box _card style_man">
                                 <div class="news_box style_four no_radius has_images"
                                    style="background-image: url('{{ asset('assets') }}/images/blog/blog-image-3.jpg');">
                                    <div class="overlay"></div>
                                    <div class="date">
                                       <span class="date_in_month">Oct</span>
                                       <span class="date_in_number">08</span>
                                    </div>
                                    <div class="content_box">
                                       <div class="category">
                                          <a href="#" class="categories"><i class="icon-folder"></i>Employee
                                             Relations</a>
                                       </div>
                                       <h2 class="title"><a href="blog-single.html" rel="bookmark">Workforce Challenges
                                             &amp; Opportunities</a></h2>
                                    </div>
                                    <div class="auhtour_box">
                                       <img alt="img" src="{{ asset('assets') }}/images/auth-1.png"  height="60" width="60" class="img-fluid">
                                       <div class="contnet_a">
                                          <p>POSTED BY</p>
                                          <h4> Evan Thomas </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="grid_box _card style_man">
                                 <div class="news_box  style_four no_radius has_images"
                                    style="background-image: url('{{ asset('assets') }}/images/blog/blog-image-9.jpg');">
                                    <div class="overlay"> </div>
                                    <div class="date">
                                       <span class="date_in_month">Oct</span>
                                       <span class="date_in_number">08</span>
                                    </div>
                                    <div class="content_box">
                                       <div class="category">
                                          <a href="#" class="categories"><i class="icon-folder"></i>Coaching</a>
                                       </div>
                                       <h2 class="title"><a href="blog-single.html" rel="bookmark">Why Should Business
                                             Payroll Outsourcing?</a></h2>
                                    </div>
                                    <div class="auhtour_box">
                                       <img alt="img" src="{{ asset('assets') }}/images/auth-2.png"  height="60" width="60" class="img-fluid">
                                       <div class="contnet_a">
                                          <p>POSTED BY</p>
                                          <h4> Evan Thomas </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_70"></div>
               <!--===============spacing==============-->
            </section>
            <!--blog end-->
            <!--contact-->
            <section class="contact-section bg_light_1">
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

         </div>
@endsection
