@extends('layouts.main')
@section('title', 'Departments')
@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<section class="wrapper__main">
  <!-- Start Department Section -->
  <div class="content patients-section">
    <div class="row">
      <div class="col-sm-4 col-3">
        <h4 class="page-title">Departments</h4>
      </div>
      <div class="col-sm-8 col-9 text-right m-b-20">
        <a href="{{route('departments.create')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Department</a>
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
      @if(session()->has('edit'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div>{{ session()->get('edit') }}</div>
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

    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <div class="wrapper__dataTables container-fluid">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <label>
                  Show Entries
                  <br />
                  <select class="form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <table class="table table-border table-striped custom-table datatable m-b-0 dataTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th class="text-right">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($departments as $department)  
                    <tr>
                      <td>{{$department->id}}</td>
                      <td>{{$department->department_name}}</td>
                      <td>{{$department->department_description}}</td>
                      <td class="text-right">
                        <div class="dropdown dropdown-action patient-action">
                          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('departments.edit', $department->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <form action="{{route('departments.destroy', $department->id)}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                            </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers">
                  <ul class="pagination">
                    {{-- <li class="paginate_button page-item previous disabled">
                      <a href="#!" data-dt-idx="0" tabindex="0" class="page-link">
                        Previous
                      </a>
                    </li> --}}

                    {{-- <li class="paginate_button page-item active">
                      <a href="#!" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                    </li> --}}
                    
                    {{-- <li class="paginate_button page-item next">
                      <a href="#!" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Department Section -->
</section>
<!-- End Wrapper Main Section -->
@endsection