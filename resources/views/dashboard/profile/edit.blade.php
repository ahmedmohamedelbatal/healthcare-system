@extends('layouts.main')
@section('title', 'Edti Profile')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <!-- Start Edit Profile Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Edit Profile</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>First Name <span class="text-danger">*</span></label>
                <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{$user->first_name}}" />
                @error('first_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Last Name <span class="text-danger">*</span></label>
                <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{$user->last_name}}" />
                @error('last_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{$user->email}}" />
                @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Date of Birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{$user->date_of_birth}}" />
                @error('date_of_birth') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Gender <span class="text-danger">*</span></label>
                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                  <option>Male</option>
                  <option>Female</option>
                </select>
                @error('gender') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Job <span class="text-danger">*</span></label>
                <input class="form-control @error('job') is-invalid @enderror" type="text" name="job" value="{{$user->job}}" />
                @error('job') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label>Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" />
                @error('address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Phone <span class="text-danger">*</span></label>
                <input class="form-control @error('phone_number') is-invalid @enderror" type="text" name="phone_number" value="{{$user->phone_number}}" />
                @error('phone_number') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Image</label>
                <div class="profile-upload">
                  <div class="upload-img">
                    @if ($user->image)
                      <img src="{{asset('images/'.$user->image)}}" />
                    @else
                      <img src="{{asset('assets/images/user.jpg')}}" />
                    @endif
                  </div>
                  <div class="upload-input">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" />
                  </div>
                </div>
                @error('image') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Short Biography</label>
            <textarea class="form-control" rows="4" cols="30" name="biography">{{$user->biography}}</textarea>
          </div>
          <div class="m-t-20 text-center">
            <input type="submit" class="btn btn-primary submit-btn" value="Edit Profile">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Edit Profile Section -->
</section>
<!-- End Wrapper Main Section -->
@endsection