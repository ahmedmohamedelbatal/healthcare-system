<!-- Start Header Section -->
<header class="wrapper__header">
  <!-- Start Logo -->
  <div class="logo">
    <a href="{{route('dashboard')}}" class="logo__img">
      <img src="{{asset('assets/images/admin_logo.png')}}" alt="logo" />
    </a>
  </div>
  <!-- End Logo -->

  <a href="#!" class="mobile_btn float-left" id="mobile_btn"><i class="fa fa-bars"></i></a>

  <!-- Start navBar -->
  <ul class="nav user-menu float-right">
    <!-- Start Notification -->
    <li class="nav-item dropdown d-none d-sm-block">
      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-bell-o"></i>
        <span class="badge badge-pill bg-danger float-right">0</span>
      </a>
      <div class="dropdown-menu notifications" x-placement="top-start">
        <div class="topnav-dropdown-header">
          <span>Notifications</span>
        </div>
        <div class="drop-scroll">
          <ul class="notification-list">
            <li class="notification-message">
              <a href="#">
                <div class="media">
                  <span class="avatar">
                    <img alt="user_logo" src="{{ asset('assets/images/user.jpg') }}" class="img-fluid" />
                  </span>
                  <div class="media-body">
                    <p class="noti-details"><span class="noti-title">Ahmed Elbatal</span> added new task <span class="noti-title">Private chat module</span></p>
                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="topnav-dropdown-footer">
          <a href="#!">View all Notifications</a>
        </div>
      </div>
    </li>
    <!-- End Notification -->

    <!-- Start User Item -->
    <li class="nav-item dropdown has-arrow">
      <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown" aria-expanded="false">
        <span class="user-img">
          @if (Auth::user()->image)
            <img class="rounded-circle" src="{{asset('images/'.Auth::user()->image)}}" alt="admin-img" width="24" />
          @else
            <img class="rounded-circle" src="{{asset('assets/images/user.jpg')}}" alt="admin-img" width="24" />
          @endif
          <span class="status online"></span>
        </span>
        <span>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
      </a>
      <div class="dropdown-menu" x-placement="bottom-start">
        <a class="dropdown-item" href="{{route('profile')}}">My Profile</a>
        <a class="dropdown-item" href="{{route('profile.edit')}}">Edit Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
      </div>
    </li>
    <!-- End User Item -->
  </ul>
  <!-- End navBar -->

  <!-- Start Mobile User Item -->
  <div class="dropdown mobile-user-menu float-right">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu" x-placement="bottom-start">
      <a class="dropdown-item" href="{{route('profile')}}">My Profile</a>
      <a class="dropdown-item" href="{{route('profile.edit')}}">Edit Profile</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
    </div>
  </div>
  <!-- End Mobile User Item -->
</header>
<!-- End Header Section -->