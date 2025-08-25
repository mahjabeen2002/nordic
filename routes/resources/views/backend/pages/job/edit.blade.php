@extends('backend.layouts.layout')
@section('content')
    <div id="main">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container ">
            <div class="page-heading">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Edit Jobs </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="{{ route('jobs-update', $jobs->id) }}"
                                            method="POST" enctype="multipart/form-data">

                                            @csrf
                                            @method('PUT')
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="title">Job Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                value="{{ $jobs->title }}">

                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control" name="image">
                                                            <img style="height:50px; width:50px;"
                                                                src="{{ asset('/uploads/jobs/' . $jobs->image) }}"
                                                                alt="">

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Job Details</label>
                                                            <textarea class="form-control descriptionid" placeholder="Enter Job Detail" row="3" name="details">{{ $jobs->details }}</textarea>


                                                        </div>
                                                    </div>


                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary me-1 mb-1">
                                                            Update Jobs
                                                        </button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>




    </div>
    <script src="/texteditor/texteditor.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.descriptionid',
            skin: 'bootstrap',
            plugins: 'lists, link, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
            menubar: true,
        });
    </script>
@endsection
