@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <div class="content">
    <!-- Start Cards Section -->
    <div class="row">
      <div class="col-12">
        <!-- Start Upcoming-App Section -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title d-inline-block">Patient Orders</h4>
          </div>

          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead class="d-none">
                  <tr>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Timing</th>
                    <th class="text-right">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a class="avatar" href="#">B</a>
                      <h2>
                        <a href="#">Bernardo Galaviz <span>New York, USA</span></a>
                      </h2>
                    </td>
                    <td>
                      <h5 class="p-0">Appointment With</h5>
                      <p>Dr. Cristina Groves</p>
                    </td>
                    <td>
                      <h5 class="p-0">Timing</h5>
                      <p>7.00 PM</p>
                    </td>
                    <td class="text-right">
                      <span class="btn btn-outline-primary">Take up</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Upcoming-App Section -->
    </div>
    <!-- End Cards Section -->
  </div>
</section>
<!-- End Wrapper Main Section -->
@endsection