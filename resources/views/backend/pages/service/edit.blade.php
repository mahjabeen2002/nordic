@extends('backend.layouts.layout')
@section('content')

<div id="main">
  @if(Session::has('success'))
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
                      <h4 class="card-title"> Edit Services </h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                     <form class="form form-vertical" action="{{ route('service-update', ['id' => $services->id]) }}" method="POST" enctype="multipart/form-data">


                          @csrf
                           @method('PUT')
                          <div class="form-body">
                              <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Select Service Category</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect" name="category_id">
                                                @foreach ($servicescategory as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $services->category_id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="title">Service Name</label>
                                          <input type="text" name="name" class="form-control" value="{{$services->name}}">

                                      </div>
                                  </div>

                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                          <input type="file" class="form-control"  name="image" >
                                          <img style="height:50px; width:50px;" src="{{asset('/uploads/Service/'.$services->image)}}" alt="">

                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="image">Icon</label>
                                        <input type="file" class="form-control"  name="icon" >
                                        <img style="height:50px; width:50px;" src="{{asset('/uploads/Service/'.$services->icon)}}" alt="">

                                    </div>
                                </div>
<div class="col-12">
    <div class="form-group">
        <label class="form-label">Short Description</label>
        <textarea class="form-control descriptionid" 
        placeholder="Enter Description"  row="3" 
        name="short_description">{{ $services->short_description}}</textarea>

    
    </div>
</div>

<div class="col-12">
    <div class="form-group">
        <label class="form-label">Long Description</label>
        <textarea class="form-control descriptionid" 
        placeholder="Enter Description"  row="3" 
        name="long_description">{{ $services->long_description}}</textarea>

        
    </div>
</div>
                                <h4 class="mt-3">SEO Tags</h4>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label class="form-label">Meta Title</label>
                                          <input type="text" name="meta_title" value="{{$services->meta_title}}" class="form-control">

                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label class="form-label">Meta Keyword</label>
                                          <input type="text" name="meta_keyword" value="{{$services->meta_keyword}}" class="form-control">

                                      </div>
                                  </div>
<div class="col-12">
    <div class="form-group">
        <label class="form-label">Meta Description</label>
        <textarea class="form-control descriptionid" 
        placeholder="Enter Description"  row="3" 
        name="meta_description">{{ $services->meta_description}}</textarea>

    
    </div>
</div>
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                         Update Services
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
