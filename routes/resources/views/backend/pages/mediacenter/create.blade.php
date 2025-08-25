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
                      <h4 class="card-title">Media Center Form</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form class="form form-vertical" id="your-form-id" action="{{ route('mediacenter-store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="tittle">Title</label>
                                          <input type="text" class="form-control" name="title" placeholder="Tittle" value="{{ old('title') }}" />
                                          @error('title')
                                          <div class="text-danger text-sm"><small>{{ $message }}</small></div>
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
                                          <input type="file" class="form-control" name="image" placeholder="Image" value="{{ old('image') }}" />
                                          @error('image')
                                          <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="videourl">Video Url</label>
                                        <input type="text" class="form-control" name="video_url" placeholder="Video Url" value="{{ old('video_url') }}" />

                                        @error('video_url')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
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
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label style="font-weight: bold;"> Description:</label>
                                        <textarea class="form-control descriptionid1" placeholder="Enter Description"  row="3" name="meta_description"></textarea>
                                        
                                        {{-- <label class="form-label">Meta Description</label>
                                        <div id="meta_description_editor" name="meta_description">{{ old('meta_description') }}</div>
                                        @error('meta_description')
                                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                        <input type="hidden" name="meta_description" id="hidden_meta_description_input"> --}}
                                    </div>
                                </div>
                      
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                          Add Media Center
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
  {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

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
  </script> --}}

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

<!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/pl4gtki7dg5u6mn61u70ddffcwj6904sqp8frkb6sjt1ruod/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
@endsection