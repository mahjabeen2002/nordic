@extends('backend.layouts.layout')
@section('content')
    <!-- Include your necessary scripts and styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('admin') }}/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/pages/simple-datatables.css">

    <!-- Your HTML structure -->
    <div id="main">
        <!-- Header section -->
        <header class="mb-3">
            <!-- Burger button -->
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <!-- Page heading section -->
        <div class="page-heading">
            <!-- Page title -->
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Application Table</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <!-- Breadcrumb navigation -->
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Applications Table</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Media Center Table section -->
            <section class="section">
                <div class="card">
                    <div class="card-header">
                     Applications Table
                    </div>


                    <div class="card-body" style="overflow-x: auto;">
                        <div class="table-responsive" style="max-height: 400px;">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th scope="col"> ID</th>
                                        {{-- <th scope="col">User Name</th> --}}
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email </th>
                                        <th scope="col">City</th>
                                        <th scope="col">Country </th>
                                        <th scope="col">Cv</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($applications as $application)
                                        <tr>
                                            <td>{{ $application->id }}</td>

                                            <td>{{ $application->job->title }}</td>

                                             <td>{{ $application->name}}</td>
                                             <td>{{ $application->email}}</td>
                                             <td>{{ $application->city }}</td>
                                             <td>{{ $application->country }}</td>

                                            <!-- Display CV -->
                                            <td>
                                                <img style="height: 50px; width: 50px;"
                                                    src="{{ asset('/uploads/resumes/' . $application->cv) }}"
                                                    alt="CV">
                                                <a href="{{ route('admin-download.cv', $application->id) }}" target="_blank">Download CV</a>
                                            </td>


                                            {{-- <td><img style="height:50px; width:50px;"
                                                src="{{ asset('/uploads/resumes/' . $application->cv) }}"
                                                alt=""></td> --}}
                                            <!-- Actions -->
                                            <td>
                                                <div style="display: flex; align-items: center;">
                                                    <!-- Delete CV -->
                                                    <a href="{{ route('admin-deletecv', ['id' => $application->id]) }}"
                                                        onclick="confirmation(event)" style="margin-right: 10px;">
                                                        <i class="bi bi-trash" style="color: red; font-size:20px"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No applications available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Include necessary scripts -->
    <script src="{{ asset('admin') }}/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{ asset('admin') }}/assets/js/pages/simple-datatables.js"></script>

    <!-- Confirm deletion script -->
    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title: "Are you want to Delete this Data",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
@endsection
