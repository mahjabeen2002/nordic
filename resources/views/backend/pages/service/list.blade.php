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
        {{-- @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
            Session::forget('success');
        @endphp
    </div>
    @endif --}}


        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Services Table</h3>

                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ServicesTable</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                     Services Table
                    </div>
                    <div class="">
                        <a href="{{ route('service-create') }}" class="btn btn-success"
                            style="float: right; margin-top: -51px; margin-right: 41px;">Add Service</a>

                    </div>

                    <div class="card-body" style="overflow-x: auto;">
                        <div class="table-responsive" style="max-height: 400px;">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>

                                       
                                        <th scope="col">Service Name</th>
                                       
                                        <!--<th scope="col">Short Description</th>-->
                                        <!--<th scope="col">Long Description</th>-->
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $services)
                                        <tr>
                                            
                                            <td>{{ $services->name }}</td>

                                            <!--<td>{!! html_entity_decode($services->short_description) !!}</td>-->
                                        

                                            <!--<td>{!! html_entity_decode($services->long_description) !!}</td>-->

                                            <td><img style="height:50px; width:50px;"
                                                    src="{{ asset('/uploads/Service/' . $services->image) }}"
                                                    alt=""></td>
                                                    
                                            <td>
                                                <div style="display: flex; align-items: center;">
                                                    <a href="{{ route('service-delete', ['id' => $services->id]) }}"
                                                        onclick="confirmation(event)" style="margin-right: 10px;"><i
                                                            class="bi bi-trash" style="color: red;font-size:20px"></i></a>
                                                    <a href="{{ route('service-edit', ['id' => $services->id]) }}"><i
                                                            class="bi-pencil-square"
                                                            style="color: green;font-size:20px"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('service-details', ['id' => $services->id]) }}">
                                                    <i class="bi bi-eye" style="color: blue; font-size: 20px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>

            </section>
        </div>


    </div>
    <script src="{{ asset('admin') }}/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="{{ asset('admin') }}/assets/js/pages/simple-datatables.js"></script>
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
                })
                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>


<script>
    function changeStatus(mediaId, isChecked) {
        var status = isChecked ? 'active' : 'inactive';

        // You can use AJAX to update the status on the server
        $.ajax({
            type: 'POST',
            url: `/update-status/${mediaId}`,
            data: { status: status, _token: '{{ csrf_token() }}' }, // Add the CSRF token
            success: function (data) {
                // Handle the response
                console.log(data);

                swal({
                    title: `Status changed to ${status}`,
                    icon: "success",
                    timer: 2000,
                    buttons: false
                });
            },
            error: function (error) {
                // Handle the error
                console.error(error);
            }
        });
    }
</script>
@endsection
