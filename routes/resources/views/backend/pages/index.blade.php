@extends('backend.layouts.layout')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .stats-icon.uniform-color {
        background-color: #9694FF;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 50px;
    }

    .stats-icon.uniform-color i {
        color: #FFFFFF;
    }
</style>
    <div id="app">

      
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon purple mb-2 uniform-color">
                                                    <i class="fas fa-file-alt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Applications</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalApplications }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon blue mb-2 uniform-color">
                                                    <i class="fas fa-building"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Companies</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalCompanies }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon red mb-2 uniform-color">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Contacts</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalContacts }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon green mb-2 uniform-color">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Jobs</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalJobs }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon orange mb-2 uniform-color">
                                                    <i class="fas fa-photo-video"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Media Centers</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalMediaCenters }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon pink mb-2 uniform-color">
                                                    <i class="fas fa-concierge-bell"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Services</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalServices }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-12 col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                <div class="stats-icon yellow mb-2 uniform-color">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Teams</h6>
                                                <h6 class="font-extrabold mb-0">{{ $totalTeams }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    
                 
                    


                    
                    <div class="col-12 col-lg-3">
                        <div class="card">

                            @auth

                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            @if(Auth::user()->image)
                                                <img src="{{ asset('uploads/User/' . Auth::user()->image) }}" type="image/png" alt="User Image">
                                            @else
                                                <img src="{{ asset('admin/assets/images/faces/2.jpg') }}" type="image/png" alt="Default Avatar">
                                            @endif
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                            <h6 class="text-muted mb-0"></h6>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <button class=" dropdown-toggle" type="button" id="profileDropdown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                                    <!-- Dropdown items -->

                                                    <a class="dropdown-item" href="{{ route('admin-change.form') }}">Change Password</a>
                                                    <a class="dropdown-item" href="{{ route('admin-profile', ['id' => Auth::user()->id]) }}">Update Profile</a>


                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
                                                    @else


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endauth
                        </div>
                    </div>
                </section>
            </div>


        </div>
    </div>
@endsection
