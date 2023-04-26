@extends('layouts.main')
@section('title', 'Edit Password')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <!-- Start Edit Password Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Edit Password</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form method="post" action="{{route('profile.update_password')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Current Password <span class="text-danger">*</span></label>
                <input class="form-control @error('current_password') is-invalid @enderror" type="password" name="current_password"/>
                @error('current_password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label>New Password <span class="text-danger">*</span></label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"/>
                @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label>Re-enter password <span class="text-danger">*</span></label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation"/>
              </div>
            </div>
            
          </div>
          <div class="m-t-20 text-center">
            <input type="submit" class="btn btn-primary submit-btn" value="Change Password">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Edit Password Section -->
</section>
<!-- End Wrapper Main Section -->
@endsection