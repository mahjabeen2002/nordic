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
                                    <h4 class="card-title">Service Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" id="service-form"
                                            action="{{ route('service-store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tittle">Select Service Category</label>
                                                            <fieldset class="form-group">
                                                                <select class="form-select" id="basicSelect"
                                                                    name="category_id">
                                                                    @foreach ($servicescategory as $servicecategory)
                                                                        <option value="{{ $servicecategory->id }}">
                                                                            {{ $servicecategory->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="tittle">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Service Name" value="{{ old('name') }}" />
                                                            @error('name')
                                                                <div class="text-danger text-sm">
                                                                    <small>{{ $message }}</small></div>
                                                            @enderror
                                                        </div>
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

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="icon">icon</label>
                                                            <input type="file" class="form-control" name="icon"
                                                                placeholder="icon" value="{{ old('icon') }}" />
                                                            @error('icon')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Short Description</label>
                                                         <textarea class="form-control descriptionid1"
                                                          placeholder="Enter Description"  row="3"
                                                           name="short_description"></textarea>

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control descriptionid1"
                                                             placeholder="Enter Description"  row="3" name="long_description"></textarea>

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
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Meta Description</label>
                                                            <textarea class="form-control descriptionid1" placeholder="Enter Description"  row="3" name="meta_description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" name="submit"
                                                            class="btn btn-primary me-1 mb-1">
                                                            Add Service
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
    selector: 'textarea.descriptionid1',
    skin: 'bootstrap',
    plugins: 'lists, link, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: true,
});
</script>
@endsection
