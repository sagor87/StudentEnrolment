@extends('admin.layouts.master')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">ALL Student</h2>

                  @php $allstudents = count(App\Student::get());@endphp
                  <p style="font-family: cursive; font-size:20px;font-weight:bold;text-align:center">{{$allstudents}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teacher</h2>
                  @php $allteachers = count(App\Teacher::get());@endphp
                <p style="font-family: cursive; font-size:20px;font-weight:bold;text-align:center">{{$allteachers}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution fee</h2>
                  <p style="font-family: cursive; font-size:20px;font-weight:bold;text-align:center">12</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                  <p style="font-family: cursive; font-size:20px;font-weight:bold;text-align:center">12</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>



        </div>
        <!-- content-wrapper ends -->
@endsection
