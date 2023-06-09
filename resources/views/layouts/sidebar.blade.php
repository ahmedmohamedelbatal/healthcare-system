<!-- Start sidebar Section -->
<section class="sidebar" id="sidebar">
  <div class="sidebar-menu" id="sidebar-menu">
    <ul>
      <li class="menu-title">Main</li>
      <li class="{{ url()->current() == route('dashboard') ? 'active' : '' }}">
        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>
      @if(Auth::user()->role == 'admin')
      <li class="{{ url()->current() == route('doctors.index') ? 'active' : '' }}">
        <a href="{{route('doctors.index')}}"><i class="fa fa-user-md"></i> Doctors</a>
      </li>
      <li class="{{ url()->current() == route('departments.index') ? 'active' : '' }}">
        <a href="{{route('departments.index')}}"><i class="fa fa-list"></i> Departments</a>
      </li>
      <li class="">
        <a href="#"><i class="fa fa-shopping-basket"></i> Orders</a>
      </li>
      @endif
    </ul>
  </div>
</section>
<!-- End sidebar Section -->