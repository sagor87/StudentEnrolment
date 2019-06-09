@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">

    <div class="card">
      <div class="card-body">
            @include('admin.partials.success_message')
        <h2 class="card-title">Data table</h2>
        <div class="row">
          <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
              <thead>
                <tr>
                    <th>SL</th>
                    <th>name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>Address</th>

                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->teacher_name}}</td>
                    <td>{{$teacher->teacher_email}}</td>
                    <td>{{$teacher->teacher_mobile}}</td>

                    <td>{{$teacher->teacher_address}}</td>

                    <td>
                      <a class="btn btn-outline-primary" href=""> View </a>
                      <a class="btn btn-warning" href=""> Edit </a>
                      <a href="" id="delete"><button class="btn btn-danger">Delete</button> </a>

                    </td>
                </tr>
                @endforeach



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
