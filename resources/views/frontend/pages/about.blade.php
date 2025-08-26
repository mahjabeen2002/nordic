@extends('frontend.layouts.layout')
@section('title')

    <head>
        <title>About Us | Nordic IT HUB AB</title>
        <meta name="description" content="Nordic IT HUB AB - Leading Managed IT Service Provider in the Nordics" />
        <meta name="keywords"
            content="Nordic IT HUB AB, Managed IT Services, IT Service Management, Cloud Infrastructure, Service Desk Support, License and HW Procurement, Compliance, IT Consultancy" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

        <style>
            :root {
                --primary: #2ea2cc;
                --secondary: #0f172a;
                --accent: #078586; /* Changed to orange */
                --light: #f8fafc;
                --gray: #64748b;
                --dark: #1e293b;
                --orange-light: rgba(255, 127, 80, 0.1);
            }

            body {
                font-family: 'Poppins', sans-serif;
                color: var(--dark);
                line-height: 1.6;
                background-color: #fff;
                overflow-x: hidden;
            }

            h1, h2, h3, h4, h5 {
                font-family: 'Montserrat', sans-serif;
                color: var(--secondary);
                font-weight: 700;
                margin-bottom: 1.5rem;
            }

            .section-title {
                position: relative;
                margin-bottom: 3rem;
            }

            .section-title h2 {
                font-size: 2.5rem;
                margin-bottom: 0.5rem;
                line-height: 1.3;
            }

            .section-title .subtitle {
                color: var(--primary);
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 0.9rem;
                display: inline-block;
                margin-bottom: 1rem;
            }

            .section-title::after {
                content: '';
                position: absolute;
                width: 60px;
                height: 4px;
                background: var(--primary);
                bottom: -15px;
                left: 0;
                border-radius: 2px;
            }

            .center-title .section-title {
                text-align: center;
            }

            .center-title .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            /* Original Banner Style */
            .page_header_default.style_one {
                position: relative;
                background: #f8f9fa;
                padding: 120px 0 80px;
                overflow: hidden;
            }

            .parallax_cover {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: 0;
            }

            .cover-parallax {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .page_header_content {
                position: relative;
                z-index: 2;
            }

            .banner_title_inner {
                margin-bottom: 20px;
            }

            .title_page {
                font-size: 48px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 15px;
                font-family: 'Montserrat', sans-serif;
            }

            .breadcrumb {
                padding: 0;
                background: transparent;
                justify-content: center;
            }

            .breadcrumb-item a {
                color: rgba(255,255,255,0.8);
                text-decoration: none;
            }

            .breadcrumb-item.active {
                color: rgba(255,255,255,0.6);
            }

            .breadcrumb-item+.breadcrumb-item::before {
                color: rgba(255,255,255,0.6);
            }

            /* Modern Card Styles */
            .modern-card {
                background: white;
                border-radius: 12px;
                overflow: hidden;
                height: 100%;
                box-shadow: 0 5px 30px rgba(0,0,0,0.05);
                transition: all 0.3s ease;
                border: 1px solid #e2e8f0;
                padding: 30px;
                position: relative;
            }

            .modern-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(0,0,0,0.1);
                border-color: var(--primary);
            }

            .modern-card::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 4px;
                background: var(--accent);
                transform: scaleX(0);
                transition: transform 0.3s ease;
            }

            .modern-card:hover::after {
                transform: scaleX(1);
            }

            .card-icon {
                height: 70px;
                width: 70px;
                background: var(--orange-light);
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 12px;
                margin-bottom: 1.5rem;
                color: var(--accent);
                font-size: 1.8rem;
                transition: all 0.3s ease;
            }

            .modern-card:hover .card-icon {
                background: var(--accent);
                color: white;
                transform: rotate(5deg);
            }

            .service-list {
                list-style: none;
                padding-left: 0;
            }

            .service-list li {
                padding: 8px 0;
                position: relative;
                padding-left: 28px;
            }

            .service-list li:before {
                content: "\f00c";
                font-family: "Font Awesome 6 Free";
                font-weight: 900;
                position: absolute;
                left: 0;
                top: 10px;
                color: var(--accent);
                font-size: 0.9rem;
            }

            /* Clean Why Choose Us Section */
            .clean-why-section {
                background: #f8fafc;
                padding: 100px 0;
                position: relative;
            }

            .benefit-item {
                display: flex;
                align-items: flex-start;
                margin-bottom: 1.8rem;
            }

            .benefit-icon {
                margin-right: 15px;
                font-size: 1.3rem;
                color: var(--accent);
                min-width: 30px;
                text-align: center;
            }

            /* Stats Box */
            .stats-box {
                background: white;
                padding: 25px;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.05);
                position: absolute;
                width: 80%;
                right: -30px;
                bottom: -30px;
                z-index: 2;
                border-top: 4px solid var(--accent);
            }

            .stat-number {
                font-size: 2.8rem;
                font-weight: 700;
                color: var(--primary);
                margin-bottom: 0;
                line-height: 1;
                font-family: 'Montserrat', sans-serif;
            }

            .stat-label {
                font-size: 1rem;
                color: var(--gray);
                font-weight: 500;
            }

            /* Client Portfolio Section */
            .client-portfolio-section {
                padding: 100px 0;
                background: white;
            }

            .client-card {
                border-left: 4px solid var(--accent);
                padding: 30px;
                height: 100%;
                transition: all 0.3s ease;
            }

            .client-card:hover {
                transform: translateY(-5px);
            }

            .client-icon {
                font-size: 2rem;
                color: var(--accent);
                margin-bottom: 1rem;
            }

            .delivery-models {
                background: #f8fafc;
                padding: 60px;
                border-radius: 12px;
                margin-top: 50px;
                border-top: 4px solid var(--accent);
            }

            /* Section Spacing */
            .about-section, .values-section, .services-section, .why-section {
                padding: 80px 0;
            }

            /* Button Styles */
            .modern-btn {
                background: var(--primary);
                border: none;
                padding: 12px 30px;
                font-weight: 600;
                border-radius: 8px;
                transition: all 0.3s ease;
                color: white;
                display: inline-block;
                position: relative;
                overflow: hidden;
            }

            .modern-btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                transition: 0.5s;
            }

            .modern-btn:hover::before {
                left: 100%;
            }

            .modern-btn:hover {
                background: #1d7ea8;
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(46, 162, 204, 0.3);
                color: white;
            }

            .modern-btn-orange {
                background: var(--accent);
                color: white;
            }

            .modern-btn-orange:hover {
                background: #e6734b;
                box-shadow: 0 10px 20px rgba(255, 127, 80, 0.3);
            }

            .modern-btn-outline {
                background: transparent;
                border: 2px solid var(--primary);
                color: var(--primary);
            }

            .modern-btn-outline:hover {
                background: var(--primary);
                color: white;
            }

            /* Orange Highlights */
            .orange-highlight {
                color: var(--accent);
                font-weight: 600;
            }

            /* Responsive Adjustments */
            @media (max-width: 991px) {
                .title_page {
                    font-size: 36px;
                }

                .about-section, .values-section, .services-section, .why-section, .client-portfolio-section {
                    padding: 60px 0;
                }

                .stats-box {
                    position: relative;
                    width: 100%;
                    right: 0;
                    bottom: 0;
                    margin-top: 30px;
                }

                .delivery-models {
                    padding: 40px;
                }
            }

            @media (max-width: 767px) {
                .title_page {
                    font-size: 30px;
                }

                .section-title h2 {
                    font-size: 2rem;
                }

                .delivery-models {
                    padding: 30px;
                }
            }
        </style>
    </head>
@endsection

@section('content')
    <!-- Start Original Banner -->
    <div class="page_header_default style_one">
        <div class="parallax_cover">
            <img src="{{ asset('assets') }}/images/page-header-default.jpg" alt="About Us Background" class="cover-parallax">
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                About Us
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Original Banner -->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <div class="rounded overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80" alt="Nordic IT HUB AB Team" class="img-fluid rounded shadow">
                        </div>
                        <div class="stats-box">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="stat-number">10+</h3>
                                    <p class="stat-label">Years Experience</p>
                                </div>
                                <div class="col-6">
                                    <h3 class="stat-number">500+</h3>
                                    <p class="stat-label">Clients Served</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <div class="section-title">
                            <span class="subtitle">About us</span>
                            <h2>Nordic IT HUB AB</h2>
                        </div>

                        <p class="mb-4">Nordic IT HUB AB is a leading Managed IT Service Provider headquartered in the Nordics. We specialize in delivering enterprise-grade IT solutions and services that help organizations achieve operational excellence.</p>
                        
                        <p class="mb-4">Our expertise spans IT service management, cloud infrastructure, service desk support, license and HW procurement, compliance, and on demand IT consultancy.</p>

                        <h4>Our Philosophy</h4>
                        <p class="mb-4">IT should empower business, not hinder it. We ensure that our clients benefit from IT operations that are efficient, cost-effective, and strategically aligned with business goals.</p>

                        <a href="" class="modern-btn modern-btn-orange">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <div class="center-title">
                        <div class="section-title">
                            <span class="subtitle">Why Choose Us</span>
                            <h2>Our Competitive Advantages</h2>
                        </div>
                        <p class="lead">Expert <span class="orange-highlight">IT solutions</span> tailored to empower your business</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3>Certified Professionals</h3>
                        <p>Our team consists of certified and experienced IT professionals dedicated to delivering exceptional service.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon">
                            <i class="fas fa-laptop-house"></i>
                        </div>
                        <h3>Modern Workplace</h3>
                        <p>Expert in modern workplace technologies & office IT infrastructure to keep your business at the forefront.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h3>Governance & Compliance</h3>
                        <p>Deep knowledge of ITSM, Governance, and Compliance frameworks to ensure your operations meet industry standards.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Hybrid Infrastructure</h3>
                        <p>Expert in managing both cloud and on-premises infrastructures for optimal flexibility and performance.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Client-First Approach</h3>
                        <p>A client-first philosophy focused on reliability, transparency, and measurable results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <div class="center-title">
                        <div class="section-title">
                            <span class="subtitle">Our Commitment</span>
                            <h2>Enabling Business Through Technology</h2>
                        </div>
                        <p class="lead mb-5">At Nordic IT HUB AB, we provide top-notch managed IT services to businesses of all sizes. We serve as a trusted partner to businesses that demand stability, compliance, and innovation in their IT environments. Our team of experts is committed to delivering innovative solutions that help you stay ahead in the ever-evolving world of technology.</p>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="modern-card">
                                    <div class="card-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4>Reliable Operations</h4>
                                    <p>Delivering reliable and uninterrupted IT operations.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="modern-card">
                                    <div class="card-icon">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <h4>Enhanced Security</h4>
                                    <p>Enhancing compliance, governance, and information security.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="modern-card">
                                    <div class="card-icon">
                                        <i class="fas fa-digital-tachograph"></i>
                                    </div>
                                    <h4>Digital Transformation</h4>
                                    <p>Driving digital transformation through cloud and modern workplace solutions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <p class="mt-5">With Nordic IT HUB AB as your IT partner, you gain the freedom to focus on business innovation, while we ensure your IT foundation remains secure, resilient, and future-ready.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Portfolio Section -->
    <section class="client-portfolio-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <div class="center-title">
                        <div class="section-title">
                            <span class="subtitle">Our Approach</span>
                            <h2>More Than IT Specialists</h2>
                        </div>
                        <p class="lead">At Nordic IT HUB AB, we are <span class="orange-highlight">enablers of sustainable growth</span> and long-term digital transformation.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="modern-card client-card">
                        <div class="client-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Partnership</h3>
                        <p>We build lasting partnerships with our clients, understanding their unique needs and challenges to deliver tailored solutions.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="modern-card client-card">
                        <div class="client-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>Staying ahead of technology trends to provide innovative solutions that drive business growth and competitive advantage.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="modern-card client-card">
                        <div class="client-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Results-Driven</h3>
                        <p>Focused on delivering measurable results that align with your business objectives and contribute to your success.</p>
                    </div>
                </div>
            </div>

            <div class="delivery-models mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h3 class="mb-4">Comprehensive IT Solutions</h3>
                        <p class="mb-5">We deliver comprehensive IT solutions via <span class="orange-highlight">managed services</span>, <span class="orange-highlight">consultancy</span>, and <span class="orange-highlight">strategic partnerships</span>, depending on client requirements. Our flexible engagement models ensure we can meet your specific needs regardless of your industry or IT complexity.</p>
                        <a href="" class="modern-btn modern-btn-orange">Discuss Your IT Needs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="text-white mb-3 mb-lg-0">Ready to transform your IT operations?</h3>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="" class="modern-btn modern-btn-orange">Get Started</a>
                </div>
            </div>
        </div>
    </section>
@endsection