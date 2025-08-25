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
                      <h4 class="card-title"> Edit Team </h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <form class="form form-vertical" action="{{ route('team-update', $Team->id) }}" method="POST" enctype="multipart/form-data">

                          @csrf
                          @method('PUT')
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="title">Name</label>
                                          <input type="text" name="name" class="form-control" value="{{$Team->name}}">
                                         
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Tittle</label>
                                        <input type="text" name="tittle" class="form-control" value="{{$Team->tittle}}">
                                       
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$Team->email}}">
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Phone</label>
                                        <input type="tel" name="phone" class="form-control" value="{{$Team->phone}}">
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Possition</label>
                                        <input type="text" name="possition" class="form-control" value="{{$Team->possition}}">
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Skills</label>
                                        <input type="text" name="skills" class="form-control" value="{{$Team->skills}}">
                                       
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control descriptionid" 
                                        placeholder="Enter Description"  row="3" 
                                        name="bio">{{ $Team->bio}}</textarea>
                                
                                    </div>
                                </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="image">Profile Picture</label>
                                          <input type="file" class="form-control"  name="profile_picture" >
                                          <img style="height:50px; width:50px;" src="{{asset('/uploads/Team/'.$Team->profile_picture)}}" alt="">
                                        
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="form-group">
                                        <label for="image">CV</label>
                                        <input type="file" class="form-control"  name="cv" >
                                        <img style="height:50px; width:50px;" src="{{asset('/uploads/CV/'.$Team->cv)}}" alt="">
                                      
                                    </div>
                                </div>
                                  
                                  
                      
                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                         Update Team
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