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
                <h4 class="card-title"> Update Profile</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                
                  <form class="form form-vertical" action="{{ route('admin-update-profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="form-body">
                        <div class="row">
                         
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="depart_name">Name</label>
                                    <input type="text" class="form-control" 
                                    value="{{ $user->name }}" name="name" />
                                    @error('name')
                                    <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="depart_name">Email</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}"
                                     name="email"  />
                                    @error('email')
                                    <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="depart_name">Address</label>
                                    <input type="text" class="form-control" value="{{ $user->address }}
                                    " name="address"  value="{{ old('address') }}" />
                                    @error('address')
                                    <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="depart_name">Phone Number</label>
                                    <input type="text" class="form-control" value="{{ $user->phone_number }}" name="phone_number"   />
                                    @error('phone_number')
                                    <div class="text-danger text-sm"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="depart_name">Profile Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="/uploads/User/{{ $user->image }}"
                                     width="200px"; height="150px">
                                    <br>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                    Update 
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