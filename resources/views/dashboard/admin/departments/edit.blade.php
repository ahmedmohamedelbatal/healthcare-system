@extends('layouts.main')
@section('title', 'Edit Department')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Edit Department Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Edit Department</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form method="post" action="{{route('departments.update', $department->id)}}">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label>Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('department_name') is-invalid @enderror" name="department_name" value="{{$department->department_name}}">
              @error('department_name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control @error('department_description') is-invalid @enderror" name="department_description" rows="5">{{$department->department_description}}</textarea>
              @error('department_description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
            </div>
            <div class="col-12">
              <input type="submit" class="btn btn-primary text-uppercase" value="Edit Department" />
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
  <!-- End Edit Department Section -->
</section>
<!-- End Main Section -->
@endsection