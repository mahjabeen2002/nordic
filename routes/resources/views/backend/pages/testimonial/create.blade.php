@extends('backend.layouts.layout')
@section('content')

<div id="main">
  @if(Session::has('success'))
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
                      <h4 class="card-title">Testimonial Form</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form class="form form-vertical" id="your-form-id" action="{{ route('testimonial-store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="tittle">Name</label>
                                          <input type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}" />
                                          @error('name')
                                          <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Company Name</label>
                                        <input type="text" class="form-control" name="companyname" placeholder="Company Name" value="{{ old('companyname') }}" />
                                        @error('companyname')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">feedback</label>
                                      
                                                                                <textarea class="form-control descriptionid1" placeholder="Enter feedback"  row="3" name="feedback"></textarea>
                                        @error('feedback')
                                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <!--<input type="hidden" name="feedback" id="hidden-editor-input">-->
                                </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                          <input type="file" class="form-control" name="image" placeholder="Image" value="{{ old('image') }}" />
                                          @error('image')
                                          <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                      </div>
                                  </div>
                                
                               
                      
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                          Add Testimonial
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
          // Your CKEditor configuration options, if any
      });
  
      // Update form submission to include 'editor' CKEditor content
      document.getElementById('your-form-id').addEventListener('submit', function() {
          var editorContent = CKEDITOR.instances.editor.getData();
          document.getElementById('hidden-editor-input').value = editorContent;
      });
  
      // Initialize CKEditor for 'meta_description'
      CKEDITOR.replace('meta_description_editor', {
          // Your CKEditor configuration options for 'meta_description', if any
      });
  
      // Update form submission to include 'meta_description' CKEditor content
      document.getElementById('your-form-id').addEventListener('submit', function() {
          var metaDescriptionContent = CKEDITOR.instances.meta_description_editor.getData();
          document.getElementById('hidden_meta_description_input').value = metaDescriptionContent;
      });
  </script>
@endsection