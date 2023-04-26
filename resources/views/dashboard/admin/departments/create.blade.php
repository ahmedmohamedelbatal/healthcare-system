@extends('layouts.main')
@section('title', 'Add Department')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Add Department Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Add Department</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form method="post" action="{{route('departments.store')}}">
          @csrf
            <div class="form-group">
              <label>Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name">
              @error('department_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control @error('department_description') is-invalid @enderror" name="department_description" rows="5"></textarea>
              @error('department_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
            </div>
            <div class="col-12">
              <input type="submit" class="btn btn-primary text-uppercase" value="Add Department" />
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
  <!-- End Add Department Section -->
</section>
<!-- End Main Section -->
@endsection