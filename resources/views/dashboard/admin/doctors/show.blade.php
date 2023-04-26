@extends('layouts.main')
@section('title', 'Doctor Detail')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <!-- Start Profile Section -->
  <div class="content">
    <div class="row">
      <div class="col-sm-7 col-4">
        <h4 class="page-title">Doctor Detail</h4>
      </div>
    </div>
    <div class="card-box profile-header">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-view">
            <div class="profile-img-wrap">
              <div class="profile-img">
                <a href="#">
                  @if ($doctor->image)
                  <img class="avatar" src="{{asset('images/'.$doctor->image)}}" alt="" />
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
                    <h3 class="user-name m-t-0 m-b-0">{{$doctor->first_name}} {{$doctor->last_name}}</h3>
                    <small class="text-muted">{{$doctor->job}}</small>
                    <div class="staff-id">Doctor ID: {{$doctor->id}}</div>
                  </div>
                </div>

                <div class="col-md-7">
                  <ul class="personal-info">
                    <li>
                      <span class="title">Phone:</span>
                      <span class="text">{{$doctor->phone_number}}</span>
                    </li>

                    <li>
                      <span class="title">Email:</span>
                      <span class="text">{{$doctor->email}}</span>
                    </li>

                    <li>
                      <span class="title">Birthday:</span>
                      <span class="text">{{$doctor->date_of_birth}}</span>
                    </li>

                    <li>
                      <span class="title">Address:</span>
                      <span class="text">{{$doctor->address}}</span>
                    </li>

                    <li>
                      <span class="title">Gender:</span>
                      <span class="text">{{$doctor->gender}}</span>
                    </li>
                    
                    <li>
                      <span class="title">Department:</span>
                      <span class="badge badge-pill badge-success">{{$doctor->department->department_name}}</span>
                    </li>
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
                <h3 class="card-title">Doctor Biography</h3>
                <div class="experience-box">
                  <ul class="experience-list">
                    <li>
                      <div class="experience-user">
                        <div class="before-circle"></div>
                      </div>
                      <div class="experience-content">
                        <div class="timeline-content">
                          {{$doctor->biography}}
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