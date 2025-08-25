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
                      <h4 class="card-title"> Edit Testimonial </h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form class="form form-vertical" action="{{ route('testimonial-update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">

                          @csrf
                          @method('PUT')
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="title">Name</label>
                                          <input type="text" name="name" class="form-control" value="{{$testimonial->name}}">
                                         
                                      </div>
                                  </div>

                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Company Name</label>
                                        <input type="text" name="companyname" 
                                        class="form-control" 
                                        value="{{$testimonial->companyname}}">
                                       
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Feedback</label>
                                        <!--<div id="editor">{{ $testimonial->feedback }}</div>-->
                                     <textarea class="form-control descriptionid" 
                                        placeholder="Enter feedback"  row="3" 
                                        name="feedback">{{ $testimonial->feedback }}</textarea>

                                    </div>
                                </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                          <input type="file" class="form-control"  name="image" >
                                          <img style="height:50px; width:50px;" src="{{asset('/uploads/testimonial/'.$testimonial->image)}}" alt="">
                                        
                                      </div>
                                  </div>
                                  
                            
                      
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                         Update Testimonial
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
   <!-- Include CKEditor script -->
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

   <!-- Initialize CKEditor -->
   <script>
       CKEDITOR.replace('editor', {
           // Your CKEditor configuration options for 'description', if any
       });
   
       CKEDITOR.replace('meta_description_editor', {
           // Your CKEditor configuration options for 'meta_description', if any
       });
   
       // Update form submission to include CKEditor content
       document.querySelector('form').addEventListener('submit', function() {
           var editorContent = CKEDITOR.instances.editor.getData();
           document.getElementById('hidden-editor-input').value = editorContent;
   
           var metaDescriptionContent = CKEDITOR.instances.meta_description_editor.getData();
           document.getElementById('hidden_meta_description_input').value = metaDescriptionContent;
       });
   </script>
@endsection