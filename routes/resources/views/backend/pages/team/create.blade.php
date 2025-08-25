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
                      <h4 class="card-title">Team Form</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form  id="your-form-id"   class="form form-vertical" action="{{ route('team-store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="tittle">Name</label>
                                          <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" />
                                          @error('name')
                                          <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Tittle</label>
                                        <input type="text" class="form-control" name="tittle" placeholder="Skill Tittle" value="{{ old('tittle') }}" />
                                        @error('tittle')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" />
                                        @error('email')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Phone</label>
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
                                        @error('phone')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Possition </label>
                                        <input type="text" class="form-control" name="possition" placeholder="Possition" value="{{ old('possition') }}" />
                                        @error('possition')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tittle">Skills</label>
                                        <input type="text" class="form-control" name="skills" placeholder="Skills" value="{{ old('skills') }}" />
                                        @error('skills')
                                        <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control descriptionid1"
                                                          placeholder="Enter bio"  row="3"
                                                           name="bio"></textarea>
                                
                                    </div>
                                </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="profile_picture">Image</label>
                                          <input type="file" class="form-control" name="profile_picture" placeholder="Profile Picture" value="{{ old('profile_picture') }}" />
                                          @error('profile_picture')
                                          <small class="text-danger">{{ $message }}</small>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="file">CV</label>
                                        <input type="file" class="form-control" name="cv" accept=".pdf, .doc, .docx, .txt, .jpg, .jpeg, .png" />
                                        @error('cv')
                                            <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                      
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                          Add Team
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