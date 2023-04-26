@extends('layouts.main')
@section('title', 'My Profile')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <!-- Start Profile Section -->
  <div class="content">
    <div class="row">
      <div class="col-sm-7 col-4">
        <h4 class="page-title">My Profile</h4>
      </div>
      <div class="col-sm-5 col-8 text-right m-b-30">
        <a href="{{route('profile.edit')}}" class="btn btn-primary btn-rounded">Edit Profile</a>
        <a href="{{route('profile.edit_password')}}" class="btn btn-primary btn-rounded">Change Password</a>
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
      @if(session()->has('delete'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div>{{ session()->get('delete') }}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if(session()->has('edit'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div>{{ session()->get('edit') }}</div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    </div>
    <div class="card-box profile-header">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-view">
            <div class="profile-img-wrap">
              <div class="profile-img">
                <a href="#">
                  @if ($user->image)
                  <img class="avatar" src="{{asset('images/'.$user->image)}}" alt="" />
                  @else
                  <img class="avatar" src="{{asset('assets/images/user.jpg')}}" alt="" />
                  @endif
                </a>
              </div>
            </div>

            <div class="profile-basic">
              <div class="row">
                <div class="col-md-5">
                  <div class="profile-info-left">
                    <h3 class="user-name m-t-0 m-b-0">{{$user->first_name}} {{$user->last_name}}</h3>
                    <small class="text-muted">{{$user->job}}</small>
                    <div class="staff-id">Profile ID: {{$user->id}}</div>
                  </div>
                </div>

                <div class="col-md-7">
                  <ul class="personal-info">
                    <li>
                      <span class="title">Phone:</span>
                      <span class="text">{{$user->phone_number}}</span>
                    </li>

                    <li>
                      <span class="title">Email:</span>
                      <span class="text">{{$user->email}}</span>
                    </li>

                    <li>
                      <span class="title">Birthday:</span>
                      <span class="text">{{$user->date_of_birth}}</span>
                    </li>

                    <li>
                      <span class="title">Address:</span>
                      <span class="text">{{$user->address}}</span>
                    </li>

                    <li>
                      <span class="title">Gender:</span>
                      <span class="text">{{$user->gender}}</span>
                    </li>

                    @if (Auth::user()->role == 'doctor')
                    <li>
                      <span class="title">Department:</span>
                      <span class="badge badge-pill badge-success">{{$user->department->department_name}}</span>
                    </li>       
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="profile-tabs">
      <ul class="nav nav-tabs nav-tabs-bottom">
        <li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">Profile</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane show active" id="about-cont">
          <div class="row">
            <div class="col-md-12">
              <div class="card-box">
                <h3 class="card-title">Biography</h3>
                <div class="experience-box">
                  <ul class="experience-list">
                    <li>
                      <div class="experience-user">
                        <div class="before-circle"></div>
                      </div>
                      <div class="experience-content">
                        <div class="timeline-content">
                          {{$user->biography}}
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Profile Section -->
</section>
<!-- End Wrapper Main Section -->
@endsection