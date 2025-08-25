

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
<style>
/*    .nav-link.active {*/
    background-color: #f00; /* Change to your desired color */
    color: #fff; /* Change to your desired text color */
/*}*/

body {
  display: flex;
}

.tabs {
  display: flex;
  justify-content: center; /* Center the tabs */
  position: relative;
  margin-bottom: 20px; /* Add some space below the tabs */
}

.tabs .line {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 4px;
  border-radius: 2px;
  /*background-color: black;*/
  transition: all 0.2s ease;
}

.tab-item {
  min-width: 100px;
  padding: 10px 20px;
  font-size: 14px;
  text-align: center;
  color: white;
  background-color: #0056b3;
  /*border-color: black;*/
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom: 2px solid transparent;
  opacity: 0.7;
  cursor: pointer;
  transition: all 0.3s ease;
  margin: 0 10px; /* Add space between tabs */
  display: flex;
  align-items: center;
  justify-content: center;
}

.tab-item:hover {
  opacity: 1;
  background-color: #166FD3;
  /*border-color: black;*/
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
}

.tab-item.active {
  opacity: 1;
  /*background-color: black;*/
  color: white;
  border-bottom: 2px solid #166FD3; /* Highlight the active tab */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
}

.tab-content {
  padding: 20px 0;
}

.tab-pane {
  color: #333;
  display: none;
}

.tab-pane.active {
  display: block;
}

.tab-pane h2 {
  font-size: 24px;
  margin-bottom: 8px;
}


</style>




  <!--<< Hero Section Start >>-->
  <section class="hero-section hero-1">
    <div class="hero-slider-active">
        <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('{{ asset('assets') }}/img/hero/hero-1.jpg');">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content">

                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Empower Your
                                business Journey
                                with IT Expertise
                            </h1>
                            <div class="hero-button">
                                <a href="/services" class="theme-btn hover-white fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.7">
                                   <span>
                                        Explore Our Service
                                        <i class="fas fa-chevron-right"></i>
                                   </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" sedata-delay-in="0.5">
                            <img src="{{ asset('assets') }}/img/hero/frame-shape.png" alt="shape-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('{{ asset('assets') }}/img/hero/hero-2.jpg');">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content">

                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Empower Your
                                business Journey
                                with IT Expertise
                            </h1>
                            <div class="hero-button">
                                <a href="/services" class="theme-btn hover-white fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.7">
                                   <span>
                                        Explore Our Service
                                        <i class="fas fa-chevron-right"></i>
                                   </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                            <img src="{{ asset('assets') }}/img/hero/frame-shape.png" alt="shape-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('{{ asset('assets') }}/img/hero/hero-3.jpg');">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content">
                            <!--<h4 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">5m+ Trusted Our Clients</h4>-->
                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Empower Your
                                business Journey
                                with IT Expertise
                            </h1>
                            <div class="hero-button">
                                <a href="/services" class="theme-btn hover-white fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.7">
                                   <span>
                                        Explore Our Service
                                        <i class="fas fa-chevron-right"></i>
                                   </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                            <img src="{{ asset('assets') }}/img/hero/frame-shape.png" alt="shape-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('{{ asset('assets') }}/img/hero/hero-1.jpg');">
            <div class="container">
                <div class="row g-4 justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content">

                            <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                Empower Your
                                business Journey
                                with IT Expertise
                            </h1>
                            <div class="hero-button">
                                <a href="/services" class="theme-btn hover-white fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.7">
                                   <span>
                                        Explore Our Service
                                        <i class="fas fa-chevron-right"></i>
                                   </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="frame-shape fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                            <img src="{{ asset('assets') }}/img/hero/frame-shape.png" alt="shape-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="translandcircle"/>
        </symbol>
    </svg>
</section>

<!--<< Feature Section Start >>-->
<section class="feature-section fix section-padding">
    <div class="shape-image">
        <img src="{{ asset('assets') }}/img/shape.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-xxl-4 col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="single-feature-items">
                    <div class="content">
                        <span>Features</span>
                        <h3>
                            innovative solution <br>
                            For business
                        </h3>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('assets') }}/img/feature/icon-1.svg" alt="icon-img">
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="single-feature-items">
                    <div class="content">
                        <span>Features</span>
                        <h3>
                            Tech-oriented <br>
                            Services
                        </h3>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('assets') }}/img/feature/icon-2.svg" alt="icon-img">
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="single-feature-items">
                    <div class="content">
                        <span>Features</span>
                        <h3>
                            World class support <br>
                            for customers
                        </h3>
                    </div>
                    <div class="icon">
                        <img src="{{ asset('assets') }}/img/feature/icon-3.png" alt="icon-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<section class="testimonial-section ">
    <div class="container">
        <div class="section-title text-center ">
            <span class="wow fadeInUp">Service Categories</span>
            <h3 class="wow fadeInUp mb-3" data-wow-delay=".3s">
                What People Say About Our <br>
                Business Services
            </h3>
        </div>
          <div class="tabs">
                    @foreach ($servicecategory as $category)
                <div class="tab-item active" >
                     <a href="#" style="color:white;font-weight:bold" data-category-id="{{ $category->id }}">
                  <!--<i class="tab-icon fas fa-code" ></i>-->
                  {{ $category->name }}
                  </a>
                </div>
               @endforeach
                <div class="line"></div>
              </div>

              <!-- Tab content -->
       <div id="subCategoryCardsContainer" class="row g-4">
                 <div id="noServicesMessage" style="display: none; text-align: center; width: 100%;">No services found for this category.</div>

                @foreach ($service as $subCategory)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s" data-category-id="{{ $subCategory->category_id }}">
                    <div class="service-box-items" style="height: 320px">
                        <div class="icon">
                            <img src="{{ asset('/uploads/Service/' . $subCategory->icon) }}" alt="{{ $subCategory->name }}" style="max-width: 100%; height: 50px;">
                        </div>
                        <div class="content">
                            <h3>
                                <a href="/servicedetail/{{ $subCategory->slug }}">
                                    {{ $subCategory->name }}
                                </a>
                            </h3>
                            <p>
                                <?php
                                $shortDescription = strip_tags($subCategory->short_description);
                                $truncatedDescription = Str::limit($shortDescription, 100);
                                ?>
                                {!! html_entity_decode($truncatedDescription) !!}
                            </p>

                        </div>
                    </div>
                </div>
                @endforeach
              </div>
    </div>
</section>

<!--<< Service Section Start >>-->
{{-- <section class="service-section faq-section fix section-padding">
    <div class="container">
        <div class="section-title text-center ">
            <span class="wow fadeInUp">our focusable services</span>
            <h3 class="wow fadeInUp" data-wow-delay=".3s">
                How do we work to help you <br>
                in Startup Business
            </h3>
        </div>
        <div class="faq-wrapper">
        <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0">
                <div class="single-tab-items">
                    <ul class="nav mb-4" role="tablist">
                        @foreach ($servicecategory as $f)


                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                            <a href="#general" data-bs-toggle="tab" class="nav-link" aria-selected="true" role="tab">
                               {{$f->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        </div>
        <div class="row">
            @foreach ($service as $f)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items" style="height: 400px">
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
                            $f4 = Str::limit($f3,100);

                           ?>



                             {!! html_entity_decode($f4) !!}
                        </p>
                        <a href="/servicedetail/{{ $f->slug }}" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

         @en foreach
            v>
        </div>
    </div>
</section> --}}




<!--<< Testimonial Section Start >>-->
<section class="testimonial-section section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">trusted clients feedback</span>
            <h3 class="wow fadeInUp" data-wow-delay=".3s">
                Client Testimonials<br>

            </h3>
        </div>
        <div class="testimonial-carousel-active">
            @foreach ($testimonial as $f)
            <div class="testimonial-card-items">
                <div class="author-items">
                    <div class="author-image bg-cover" style="background-image: url('{{ asset('/uploads/testimonial/' . $f->image) }}"></div>
                    <div class="author-content">
                        <h5>{{ $f->name }}</h5>
                        <span>{{ $f->companyname }}</span>
                    </div>
                </div>
                <?php
                $f1 = strip_tags($f->feedback);
                $f2 = Str::limit($f1, 210);

                ?>


                <p>{!! html_entity_decode($f2) !!}</p>
                {{-- <ul>
                    <li>January 23, 2024</li>
                </ul> --}}
            </div>
          @endforeach
        </div>
    </div>
</section>

<div class="modal fade" id="cookieConsentModal" tabindex="-1" aria-labelledby="cookieConsentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cookieConsentLabel">Cookie Consent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>We use cookies to enhance your browsing experience, serve personalized content, and analyze site traffic. By clicking "Accept All Cookies," you agree to our use of cookies. For more information, please review our <a href="#">Cookie Policy</a>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="rejectCookies">Reject Cookies</button>
          <button type="button" class="btn btn-primary" id="acceptCookies">Accept All Cookies</button>
        </div>
      </div>
    </div>
  </div>




 <script>
    document.addEventListener("DOMContentLoaded", function() {
        var cookieConsent = localStorage.getItem("cookieConsent");

        if (!cookieConsent) {
            var cookieModal = new bootstrap.Modal(document.getElementById('cookieConsentModal'), {
                backdrop: 'static',
                keyboard: false
            });
            cookieModal.show();
        }

        function storeConsent(consentStatus) {
            fetch('/cookie-consent', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ consent_status: consentStatus })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
            })
            .catch(error => console.error('Error:', error));
        }

        document.getElementById('acceptCookies').addEventListener('click', function() {
            localStorage.setItem("cookieConsent", "accepted");
            storeConsent('accepted');
            var cookieModal = bootstrap.Modal.getInstance(document.getElementById('cookieConsentModal'));
            cookieModal.hide();
        });

        document.getElementById('rejectCookies').addEventListener('click', function() {
            localStorage.setItem("cookieConsent", "rejected");
            storeConsent('rejected');
            var cookieModal = bootstrap.Modal.getInstance(document.getElementById('cookieConsentModal'));
            cookieModal.hide();
        });
    });
</script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
    const tabItems = document.querySelectorAll('.tab-item a');
    const subCategoryCardsContainer = document.getElementById('subCategoryCardsContainer');
    const subCategoryCards = subCategoryCardsContainer.children;
    const noServicesMessage = document.getElementById('noServicesMessage');

    tabItems.forEach(tab => {
        tab.addEventListener('click', function(event) {
            event.preventDefault();
            const categoryId = this.getAttribute('data-category-id');

            // Remove active class from all tabs and add to the clicked tab
            tabItems.forEach(item => item.parentElement.classList.remove('active'));
            this.parentElement.classList.add('active');

            // Filter sub-categories based on the clicked category
            let hasServices = false;
            Array.from(subCategoryCards).forEach(card => {
                if (card.id === 'noServicesMessage') return; // Skip the noServicesMessage div
                const cardCategoryId = card.getAttribute('data-category-id');
                if (cardCategoryId === categoryId) {
                    card.style.display = 'block';
                    hasServices = true;
                } else {
                    card.style.display = 'none';
                }
            });

            // Show/hide the no services message
            if (hasServices) {
                noServicesMessage.style.display = 'none';
            } else {
                noServicesMessage.style.display = 'block';
            }
        });
    });

    // Trigger the first tab to show the initial content
    if (tabItems.length > 0) {
        tabItems[0].click();
    }
});

</script>
 @endsection




