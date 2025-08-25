@extends('frontend.layouts.layout')
@section('title')

<head>
    <title>About Us | Tech Scouts</title>
    <meta name="description" content="Learn more about Tech Scouts, a leading software development company offering innovative IT solutions and technology services to businesses worldwide." />
    <meta name="keywords" content="Tech Scouts, software development, IT solutions, technology services, software company, about us" />

    <!-- Open Graph Tags -->
    <meta property="og:title" content="About Us | Tech Scouts" />
    <meta property="og:description" content="Learn more about Tech Scouts, a leading software development company offering innovative IT solutions and technology services to businesses worldwide." />
    <meta property="og:url" content="https://techscouts.se/about" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://techscouts.se/Tech-Scouts-Logo1000x300.png" />
    <meta property="og:site_name" content="Tech Scouts" />

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="About Us | Tech Scouts" />
    <meta name="twitter:description" content="Learn more about Tech Scouts, a leading software development company offering innovative IT solutions and technology services to businesses worldwide." />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Schema.org Markup for Tech Scouts About Us Page -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Tech Scouts",
            "url": "https://techscouts.se/about",
            "logo": "https://techscouts.se/Tech-Scouts-Logo1000x300.png",
            "sameAs": [
                "https://www.facebook.com/TechScout",
                "https://twitter.com/TechScout",
                "https://www.linkedin.com/company/techscouts"
            ],
            "description": "Learn more about Tech Scouts, a leading software development company offering innovative IT solutions and technology services to businesses worldwide."
        }
    </script>
</head>

@endsection
@section('content')
    <!--<< Breadcrumb Section Start >>-->
   <div class="breadcrumb-wrapper section-padding bg-cover mb-2" style="background-image: url('{{ asset('assets') }}/img/breadcrumb.jpg'); height: 80px; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <div class="page-heading text-center">
            <h1 class="wow fadeInUp" data-wow-delay=".3s">about us</h1>
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
                    About Us
                </li>
            </ul>
        </div>
    </div>
</div>


    <!--<< About Section Start >>--> 
    <!--<section class="about-section fix section-padding">-->
    <!--    <div class="container">-->
    <!--        <div class="about-wrapper">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-6">-->
    <!--                    <div class="about-image-items">-->
    <!--                        {{-- <div class="circle-shape">-->
    <!--                            <img src="{{ asset('assets') }}/img/about/circle.png" alt="img" class="text-circle">-->
    <!--                            <div class="award-img">-->
    <!--                                <img src="{{ asset('assets') }}/img/about/award.png" alt="img">-->
    <!--                            </div>-->
    <!--                        </div> --}}-->
    <!--                        {{-- <div class="border-shape">-->
    <!--                            <img src="{{ asset('assets') }}/img/about/border-shape.png" alt="shape-img">-->
    <!--                        </div> --}}-->
    <!--                        <div class="about-image bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('{{ asset('assets') }}/img/about/about.jpg');">-->
    <!--                            <div class="about-image-2 wow fadeInUp" data-wow-delay=".5s">-->
    <!--                                {{-- <img src="{{ asset('assets') }}/img/about/about-2.jpg" alt="about-img"> --}}-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 mt-5 mt-lg-0">-->
    <!--                    <div class="about-content">-->
    <!--                        <div class="section-title">-->
    <!--                            <br>-->
    <!--                            <br>-->
    <!--                            <span class="wow fadeInUp">About us</span>-->
    <!--                            <h2 class="wow fadeInUp" data-wow-delay=".3s">-->
    <!--                                Complete Managing About Software Business-->
    <!--                            </h2>-->
    <!--                        </div>-->
    <!--                        <p class=" mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">-->
    <!--                            Tech Scouts is a Sweden based firm specialised in IT outsourcing Services. Our specialised services include IT Help Desk, IT Management Consulting, IT Recruitment, IT Procurement Services (Hardware and Software), Onsite and Cloud Infrastructure Management. We offer an end-to-end solution for every client. Our services are research-backed, insight-driven, and client-focused-->
    <!--                        </p>-->
                          
    <!--            {{-- <p>  Outsourcing your IT services to us can be very beneficial for your business. Whether-->
    <!--                solving technical skills gap, expanding work shifts (9 -5 to 24 x7) or saving on the-->
    <!--                business costs outsourcing is solution. We offer cost effective solution for-->
    <!--                businesses with skills gaps and limited staff, helping them to ensure business-->
    <!--                continuity. Our IT experts with extensive industry experience take care of your IT-->
    <!--                problems and make sure you get value for your expenditure with us.</p>-->
    <!--      --}}               </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <br><br>
        <section class="about-section   mb-3">
            <div class="line-shape">
                <img src="assets/img/service/line-shape-2.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="about-image-items">
                                <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('{{ asset('assets/img/about/about-6.jpg') }}');">
                                  
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="about-content">
                                <div class="section-title style-2">
                                    <br>   <br> 
                                    <span class="wow fadeInUp mt-3" style="color:black">About us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                         <span style="color:#166fd3">Bridge to Connect</span> 
                                    </h2>
                                </div>
                                <p class=" mt-4 mt-md-0 wow fadeInUp text-justify" data-wow-delay=".5s">
                           Tech Scouts is a Sweden based firm specialised in IT outsourcing Services. Our specialised services include IT Help Desk, IT Management Consulting, IT Recruitment, IT Procurement Services (Hardware and Software), Onsite and Cloud Infrastructure Management. We offer an end-to-end solution for every client. Our services are research-backed, insight-driven, and client-focused
                                </p>
                                <br>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<br><br><br>
    <!--<< Service Section Start >>-->
 
    <!--<< Manage It Section Start >>-->
    <section class="manage-it-section  mb-5">
        <div class="container">
            <div class="manage-it-wrapper">
               <div class="row justify-content-between">
                <div class="col-lg-12 text-center">
                    <div class="manage-it-content">
                        <div class="section-title">
                            <span class="wow fadeInUp"> </span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Our Managed Services
                                let you Concentrate on What Matters
                            </h2>
                        </div>
                        <div class="row">
                        <div class="single-tab-items mt-4 mt-md-0" >
                            <ul class="nav mb-4" role="tablist">
                                
                                    <div class="col-md-3">
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s" role="presentation">
                                            <a href="#approach" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                                Our Values                                            </a>
                                        </li>
                                    </div>

                                    <div class="col-md-3">
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".5s" role="presentation">
                                            <a href="#project" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                Our Mission
                                            </a>
                                        </li>
                                    </div>

                                    <div class="col-md-4">
                                        <li class="nav-item wow fadeInUp" data-wow-delay=".7s" role="presentation">
                                            <a href="#advisory" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                Our Vision
                                            </a>
                                        </li>   
                                    </div>
                           
                             
                              
                               
                            </ul>
                            <div class="tab-content ">
                                <div id="approach" class="tab-pane fade show active" role="tabpanel">
                                    <div class="tab-content-items">
                                        <p class="wow fadeInUp" data-wow-delay=".3s">
                                            IT is the backbone; buinesses are increasingly relying on IT infrastructure to support their
                                            operations. This has led to an overwhelming demand on IT departments. IT leaders are aiming for
                                            best staff and seamless IT services, ranging from helpdesk support, infrastructure, networks,
                                            and most importantly cyber security. However, with this increasing demand, also comes a
                                            challenging situation where not all check boxes of smooth IT operations can be easily tick
                                            marked.
                                        </p>
                                      
                                     
                                    </div>
                                </div>
                                <div id="project" class="tab-pane fade" role="tabpanel">
                                    <div class="tab-content-items">
                                        <p>
                                            We provide world-class help desk L1, L2 and L3 outsourcing for companies who want to provide a
                                            superior support experience to their employees. We are reliable first point of contact for our
                                            clients’ employees and customers – handling technical issues, resolving problems, and taking
                                            proactive measure to smoothly run the IT function. We offer onsite, remote or combination of
                                            both type of services to meet your requirements.
                                        </p>
                              
                                    </div>
                                </div>
                                <div id="advisory" class="tab-pane fade" role="tabpanel">
                                    <div class="tab-content-items">
                                        <p>
                                            Having a qualified IT engineers on your team is the key to ensuring systems are always running
                                            smoothly and efficiently. IT engineers will be responsible for monitoring IT infrastructure,
                                            managing security, troubleshooting issues, implementing updates, ensuring data backup and
                                            recovery, and more. With this support, you’ll be able to take a proactive approach, minimise
                                            downtime and reduce the risk of security breaches.
                                        </p>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
               
               </div>
            </div>
        </div>
    </section>
    <!--<section class="testimonial-section-3 fix section-padding pt-0">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="testimonial-wrapper-3">-->
    <!--            <div class="testimonial-carousel-active-3">-->
    <!--                <div class="testimonial-items">-->
    <!--                    <div class="testimonial-image-area">-->
    <!--                        <div class="testimonial-image bg-cover"-->
    <!--                         style="background-image: url('{{ asset('ceo.jpg') }}');">-->
    <!--                            <div class="icon" style="height: 0px">-->
    <!--                                <i class="flaticon-double-quotes" ></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="star">-->
    <!--                        <span>TechScout</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="testimonial-content">-->
    <!--                        <h3>-->
    <!--                            Its is great pleasure to present TechScouts and I welcome our potential customer, supplier, and future employees to TechScouts which will be having a great impact to your future growth.-->
    <!--                            We embraced on journey backed by integrity, commitment, and innovation to help stakeholder with their information technology needs.-->
    <!--                            Together we will create, shape, develop & explore opportunity in IT industry & I am excited about collective success we will achieve together.-->
    <!--                            Let’s be a Bridge to connect with world.-->
    <!--                        </h3>-->
    <!--                        <div class="athor-name">-->
    <!--                            <h4>Shaher Yar Ali /</h4>-->
    <!--                            <p>Co-Founder & CEO</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
               
    <!--            </div>-->
               
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <br><br>
    <section class="about-section  mb-5">
            <div class="line-shape">
                <img src="assets/img/service/line-shape-2.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="about-image-items">
                                <div class="about-image-1 bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('{{ asset('ceo.jpg') }}');height:500px">
                                  
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="about-content">
                                <div class="section-title style-2 mt-3">
                                    <br> 
                                  
                                    <h2 class="wow fadeInUp " data-wow-delay=".3s "> 
                                  
                                       Ceo Message 
                                    </h2>
                                      <span class="wow fadeInUp" style="color:#166fd3">WHAT WE’RE <span  style="color:black">OFFERING</span> TO
                                        OUR CUSTOMERS</span>
                                </div>
                                <p class=" mt-4 mt-md-0 wow fadeInUp text-justify" data-wow-delay=".5s">
                             It is a great pleasure for me to present you our well-established and growing firm TechScouts. I welcome all our potential customers, suppliers and future employees to TechScouts which will be having a great impact to the community’s future growth. We embarked on a journey backed by integrity, commitment and innovation to help our esteemed customers with their information technology needs. Together we will create, shape, develop & improve the IT industry solutions & I am excited about the upcoming collective success we will achieve together. Let’s be a Bridge to connect with the world.
                                </p>
                                <br>
                           <div class="athor-name mt-3">
                                <h4>Shaher Yar Ali /</h4>
                                <p>Co-Founder & CEO</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<br><br>

@endsection
