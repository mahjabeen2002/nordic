<style>  /* Ensure the dropdown appears above other elements */
   .offcanvas__contact-text a {
        text-transform: none;
    }
.social-icon {
    display: flex;
    gap: 10px; /* Adjust the spacing between icons if needed */
}
.modal-dialog-top-right {
    position: absolute;
    top: 10px;
    right: 10px;
    max-width: 250px;
    margin: 0;
}
/* Styling for the 'Select Location/Country' button */
.btn-location {
    font-size: 12px; /* Font size */
    font-weight: 500; /* Slightly bold text */
    display: flex; /* Flexbox for icon and text alignment */
    align-items: center; /* Center items vertically */
    text-transform: uppercase; /* Uppercase text */
    transition: background-color 0.3s ease; /* Smooth transition */
}

.btn-location i {
    margin-right: 8px; /* Spacing between icon and text */
    font-size: 16px; /* Icon size */
}

.btn-location:hover {
    background-color: #0056b3; /* Darker blue on hover */
    
    color: white;
    text-decoration: none; /* Remove underline on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
}

.btn-location:focus {
    outline: none; /* Remove outline on focus */
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5); /* Focus ring */
}

.modal-content {
    border-radius: 10px;
    overflow: hidden;
}
.social-icon-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px; /* Adjust the size of the circle */
    height: 40px; /* Adjust the size of the circle */
    border-radius: 50%;
    background-color: #f0f0f0; /* Default background color */
    color: #000; /* Default icon color */
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

.social-icon-link:hover {
    background-color: #007bff; /* Blue color on hover */
    color: #fff; /* Icon color on hover */
}

.social-icon-link i {
    font-size: 16px; /* Adjust the icon size if needed */
}

/* Ensure dropdown has a high z-index */
.dropdown {
    position: relative;
}

.dropdown-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px; /* Padding around the dropdown */
    cursor: pointer;
    color: #333; /* Dark text color */
    text-decoration: none; /* Remove underline */
    border-bottom: 1px solid #ddd; /* Light gray border at the bottom */
}

/* Style for dropdown toggle icon */
.dropdown-toggle {
    margin-left: 10px; /* Space between text and icon */
    color: #333; /* Dark text color */
}

/* Submenu container */
.submenu {
    display: none; /* Hidden by default */
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #fff; /* White background */
    border: 1px solid #ddd; /* Light gray border */
    border-radius: 5px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
    position: absolute;
    top: 100%; /* Position below the dropdown link */
    left: 0;
    z-index: 1000; /* Ensure it appears above other content */
}

/* Hover effect for larger screens */
@media (min-width: 768px) { /* Adjust this breakpoint as needed */
    .dropdown:hover .submenu {
        display: block;
    }
}

/* Mobile styles */
@media (max-width: 991px) { /* Adjust this breakpoint as needed */
    .submenu {
        position: static; /* Reset position to static */
        box-shadow: none; /* Remove shadow for mobile */
        width: 100%; /* Full width on mobile */
        border: none; /* Remove border for mobile */
        border-radius: 0; /* Remove border radius for mobile */
    }

    .dropdown.active .submenu {
        display: block; /* Show the submenu when parent is active */
    }
}

/* Style for submenu items */
.submenu .nav-item {
    padding: 10px 15px; /* Padding for submenu items */
    border-bottom: 1px solid #ddd; /* Light gray border at the bottom */
}

.submenu .nav-item:last-child {
    border-bottom: none; /* Remove border for the last item */
}

.submenu .nav-link {
    color: #333; /* Dark text color */
    text-decoration: none; /* Remove underline */
    display: block; /* Make the link block-level */
}

/* Hover effect for submenu items */
.submenu .nav-link:hover {
    background-color: #f5f5f5; /* Light gray background on hover */
}



</style><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                     <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                     <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-none d-lg-block">
                                <a href="/">
                                    <img src="/Tech-Scouts-Logo1000x300.png" style="width:250px;height:100px" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="d-none d-lg-block">
                            Tech Scout is a Sweden based firm specialised in IT outsourcing Services. Our specialised services include IT Help Desk, IT Management Consulting, IT Recruitment, IT Procurement Services (Hardware and Software), Onsite and Cloud Infrastructure Management. We offer an end-to-end solution for every client. Our services are research-backed, insight-driven, and client-focused. 
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                       <a target="_blank" href="https://maps.app.goo.gl/s7bzYQttWBVKWe6RA?g_st=iw">Finlandsgatan 10 164 74 Kista
Stockholm Sweden</a>
                                    </div>
                                </li>
                              <li class="d-flex align-items-center">
    <div class="offcanvas__contact-icon mr-15">
        <i class="fal fa-envelope"></i>
    </div>
    <div class="offcanvas__contact-text">
        <a href="mailto:info@techscouts.se" target="_blank">info@techscouts.se</a>
    </div>
</li>

                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Monday-Friday, 0900 - 1700</a>
                                    </div>
                                </li>
                                            <li class="d-flex align-items-center">
                                                <div class="offcanvas__contact-icon mr-15">
                                                   <i class="fas fa-phone"></i>
                                                </div>
                                                    <div class="offcanvas__contact-text">
                                                    <a href="tel:0046 (0) 12221116" target="_blank">0046 (0) 12221116</a>
                                                </div>
                                            </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="/contact-us" class="theme-btn text-center">
                                    <span>Contact Us<i class="fas fa-chevron-right"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <!--<a href="#"><i class="fab fa-twitter"></i></a>-->
                                <!--<a href="#"><i class="fab fa-youtube"></i></a>-->
                                <a href="https://www.linkedin.com/company/tech-scouts-sweden-ab/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

         <!--Header Top Start -->
<div class="header-top-section fix">
    <div class="container">
        <div class="header-top-wrapper d-flex justify-content-between align-items-center">
            <div class="left-side d-flex align-items-center">
                <div class="social-icon d-flex align-items-center">
                    <a href="#" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/tech-scouts-sweden-ab/" class="social-icon-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
                &nbsp; &nbsp;&nbsp; &nbsp;
                <ul class="contact-list d-none d-md-flex">
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="mailto:info@example.com" class="link">info@techscouts.se</a>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:0046 (0) 12221116" target="_blank">0046 (0) 12221116</a>
                    </li>
                </ul>
            </div>
            <div class="top-right d-flex align-items-center">
                <ul class="header-menu d-flex align-items-center">
                    <li>
                        <button type="button" class="btn btn-location" data-toggle="modal" data-target="#locationModal">
                            <i class="fas fa-globe"></i> Select Location/Country
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" style="font-size:13px" id="locationModalLabel">Select Location / Country &nbsp;</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <a href="/" class="dropdown-item d-flex align-items-center justify-content-center">
                    <img src="/australia.avif" class="rounded" alt="Australia" width="35" height="30" />
                    &nbsp; Australia
                </a>
                <hr>
                <a href="/" class="dropdown-item d-flex align-items-center justify-content-center mt-2">
                    <img src="/swden.png" class="rounded" alt="Sweden" width="40" height="30" />
                    &nbsp; Sweden
                </a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Header Area Start -->
            <header class="header-section-1">
            <div id="header-sticky" class="header-1">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="/" class="header-logo">
                                        <img src="/Tech-Scouts-Logo1000x300.png" style="width:250px;height:80px" alt="logo-img" >
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li>
                                                    <a href="/">Home
                                                   
                                                    </a>
                                                   
                                                </li>
                                                
                                                <li>
                                                    <a href="/about-us">About</a>
                                                </li>
<li class="dropdown">
    <a href="/services" class="dropdown-link">
        Services
        <span class="dropdown-toggle"></span>
    </a>
    <ul class="submenu service">
        <!-- Submenu items will be appended here by AJAX -->
    </ul>
</li>



                                                <li>
                                                    <a href="/our-jobs">Careers</a>
            
                                                </li>
                                                {{-- <li>
                                                    <a href="/mediacenter">Media Center</a>
            
                                                </li> --}}
                                                <li><a href="/contact-us">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <!--<div class="contact-info">-->
                                <!--    <div class="icon">-->
                                <!--        <img src="{{ asset('assets') }}/img/call.png" alt="img">-->
                                <!--    </div>-->
                                <!--    <div class="content">-->
                                <!--        <p>Phone:</p>-->
                                <!--        <h6>-->
                                <!--            <a href="tel:+46704307237">+46 70 430 72 37</a>-->
                                <!--        </h6>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="header-button">
                                    <a href="/get-a-quote" class="theme-btn">
                                        <span>
                                           Get In Touch
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                     </a>
                                </div>
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <div class="header-bar">
                                            <i class="fa fa-bars" style="font-size: 30px" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
