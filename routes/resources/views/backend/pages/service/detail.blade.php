@extends('backend.layouts.layout')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('admin') }}/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/pages/simple-datatables.css">
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Services Details</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Service Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Details</h4>

                        <!-- Service Information -->
                        <div>
                            <h5 class="font-weight-bold">Short Description:</h5>
                            <p>{!! html_entity_decode($service->short_description) !!}</p>
                                        

                          
                        </div>

                        <div>
                            <h5 class="font-weight-bold">Long Description:</h5>
                            <p>{!! html_entity_decode($service->long_description) !!}</p>
                        </div>
                        <div>
                            <h5 class="font-weight-bold">Icon:</h5>
                            <img src="{{ asset('/uploads/Service/' . $service->icon) }}" alt="Service Image"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <div>
                            <h5 class="font-weight-bold">Image:</h5>
                            <img src="{{ asset('/uploads/Service/' . $service->image) }}" alt="Service Image"
                                style="max-width: 100%; height: auto;">
                        </div>

                        <!-- Back Button -->
                        <div class="mt-4">
                            <a href="{{ route('service-list') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="{{ asset('admin') }}/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{ asset('admin') }}/assets/js/pages/simple-datatables.js"></script>
@endsection
