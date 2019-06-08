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
                    <th>ID</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Department</th>
                    <th>Address</th>

                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->student_email}}</td>
                    <td><img src="{{asset('image/'.$student->student_image)}}" style="height:80px; weight:80px;"/></td>
                    <td>{{$student->student_department}}</td>
                    <td>{{$student->student_address}}</td>

                    <td>
                      <a class="btn btn-outline-primary" href="{{route('student_view',$student->id)}}"> View </a>
                      <a class="btn btn-warning" href="{{route('student_edit',$student->id)}}"> Edit </a>
                      <a href="{{route('student_delete',$student->id)}}" id="delete"><button class="btn btn-danger">Delete</button> </a>

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
