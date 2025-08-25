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
                      <h4 class="card-title"> Edit Media Center </h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form class="form form-vertical" action="{{ route('mediacenter-update', $mediacenter->id) }}" method="POST" enctype="multipart/form-data">

                          @csrf
                          @method('PUT')
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="title">Title</label>
                                          <input type="text" name="title" class="form-control" value="{{$mediacenter->title}}">
                                         
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        {{-- <div id="editor">{{ $mediacenter->description }}</div> --}}
                                        <textarea class="form-control descriptionid" 
                                        placeholder="Enter Description"  row="3" 
                                        name="description">{{ $mediacenter->description}}</textarea>

                                        {{-- <input type="hidden" name="description" id="hidden-editor-input"> --}}
                                    </div>
                                </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="image">Image</label>
                                          <input type="file" class="form-control"  name="image" >
                                          <img style="height:50px; width:50px;" src="{{asset('/uploads/mediacenter/'.$mediacenter->image)}}" alt="">
                                        
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="videourl">Video Url</label>
                                        <input type="text" class="form-control" name="video_url" placeholder="Video Url"value="{{$mediacenter->video_url}}" />
                                      
                                    </div>
                                </div>
                                  <h4 class="mt-3">SEO Tags</h4>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label class="form-label">Meta Title</label>
                                          <input type="text" name="meta_title" value="{{$mediacenter->meta_title}}" class="form-control">
                                       
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label class="form-label">Meta Keyword</label>
                                          <input type="text" name="meta_keyword" value="{{$mediacenter->meta_keyword}}" class="form-control">
                                        
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        {{-- <div id="meta_description_editor">{{ $mediacenter->meta_description }}</div> --}}
                                        {{-- <input type="hidden" name="meta_description" id="hidden_meta_description_input"> --}}
                                        <textarea class="form-control descriptionid" placeholder="Enter Meta Description"  row="3" name="meta_description">{{ $mediacenter->meta_description}}</textarea>
                                    </div>
                                </div>
                      
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                         Update Media Center
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