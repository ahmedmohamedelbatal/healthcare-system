@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<!-- Start Wrapper Main Section -->
<section class="wrapper__main">
  <div class="content">
    <!-- Start Dash Box Section -->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-box">
          <span class="dash-box-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
          <div class="dash-box-info text-right">
            <h3>100</h3>
            <span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-box">
          <span class="dash-box-bg2"><i class="fa fa-user-o"></i></span>
          <div class="dash-box-info text-right">
            <h3>100</h3>
            <span class="widget-title2">Orders <i class="fa fa-check" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-box">
          <span class="dash-box-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
          <div class="dash-box-info text-right">
            <h3>100</h3>
            <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="dash-box">
          <span class="dash-box-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
          <div class="dash-box-info text-right">
            <h3>100</h3>
            <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Dash Box Section -->

    <!-- Start Charts Section -->
    <div class="row">
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card">
          <div class="card-body">
            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div style="position: absolute; width: 1000000px; height: 1000000px; left: 0; top: 0;"></div>
              </div>
              <div class="chartjs-size-monitor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div style="position: absolute; width: 200%; height: 200%; left: 0; top: 0;"></div>
              </div>
            </div>
            <div class="chart-title">
              <h4 class="title is-3">Patient Total</h4>
              <span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
            </div>
            <canvas id="canvas" style="display: block; width: 437px; height: 218px;" width="437" height="218" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card">
          <div class="card-body">
            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div style="position: absolute; width: 1000000px; height: 1000000px; left: 0; top: 0;"></div>
              </div>
              <div class="chartjs-size-monitor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div style="position: absolute; width: 200%; height: 200%; left: 0; top: 0;"></div>
              </div>
            </div>
            <div class="chart-title">
              <h4 class="title is-3">Patients In</h4>
              <span class="float-right">
                <ul class="chat-user-total">
                  <li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
                  <li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
                </ul>
              </span>
            </div>
            <canvas id="bargraph" style="display: block; width: 437px; height: 218px;" width="437" height="218" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- End Charts Section -->
  </div>
</section>
<!-- End Wrapper Main Section -->
@endsection