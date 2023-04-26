@extends('layouts.main')
@section('title', 'Doctors')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <!-- Start doctors Section -->
  <div class="content">
    <div class="row">
      <div class="col-sm-4 col-3">
        <h4 class="page-title">Doctors</h4>
      </div>
      <div class="col-sm-8 col-9 text-right m-b-20">
        <a href="{{route('doctors.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
      </div>
    </div>
    <div class="alerts-section">
      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $error }}
          </div>
        @endforeach
      @endif
      @if(session()->has('add'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div>{{ session()->get('add') }}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(session()->has('delete'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div>{{ session()->get('delete') }}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    </div>
    <div class="row nurse-grid">
      @foreach ($doctors as $doctor)
      <!-- Start Doctor Item -->
      <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
          <div class="nurse-img">
            <a class="avatar" href="{{route('doctors.show', $doctor->id)}}">
              @if ($doctor->image)
              <img class="avatar" src="{{asset('images/'.$doctor->image)}}" alt="" />
              @else
              <img class="avatar" src="{{asset('assets/images/user.jpg')}}" alt="" />
              @endif
            </a>
          </div>
          <div class="dropdown profile-action">
            <a href="#!" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(23px, 27px, 0px);">
              <form action="{{route('doctors.destroy', $doctor->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
              </form>
            </div>
          </div>
          <h4 class="nurse-name text-ellipsis"><a href="{{route('doctors.show', $doctor->id)}}">{{$doctor->first_name}} {{$doctor->last_name}}</a></h4>
          <div class="nurse-prof">{{$doctor->job}}</div>
          <div class="user-country"><i class="fa fa-map-marker"></i> {{$doctor->address}}</div>
        </div>
      </div>
      <!-- End Nurse Item -->
      @endforeach
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="more-btn">
          <a class="see-more-btn" href="#">Load More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End doctors Section -->
</section>
<!-- End Wrapper Main Section -->
@endsection