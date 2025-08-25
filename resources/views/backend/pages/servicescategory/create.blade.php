@extends('backend.layouts.layout')
@section('content')
    <div id="main">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="container ">
            <div class="page-heading">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Services Category  Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <form class="form form-vertical" action="{{ route('servicecategory-store') }}"
                                            method="POST" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tittle">Service Category Name </label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Name" value="{{ old('name') }}" />
                                                            @error('name')
                                                                <div class="text-danger text-sm">
                                                                    <small>{{ $message }}</small></div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                  <div class="col-12">
                                    <div class="form-group">
                                        <label style="font-weight: bold;"> Description:</label>
                                        <textarea class="form-control descriptionid1" placeholder="Enter Description"  row="3" name="description"></textarea>
                                    
                                      
                                    </div>
                                    {{-- <input type="hidden" name="description" id="hidden-editor-input"> --}}
                                </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control" name="image"
                                                                placeholder="Image" value="{{ old('image') }}" />
                                                            @error('image')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <h4 class="mt-3">SEO Tags</h4>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Meta Title</label>
                                                            <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control">
                                                            @error('meta_title')
                                                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Meta Keyword</label>
                                                            <input type="text" name="meta_keyword" value="{{ old('meta_keyword') }}" class="form-control">
                                                            @error('meta_keyword')
                                                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary me-1 mb-1">
                                                            Add Service Category
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
@endsection
