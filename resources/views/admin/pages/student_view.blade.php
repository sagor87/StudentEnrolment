@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
        <h1 class="page-title">Student Profile</h1>
    <div class="col-lg-4 side-left">
        <div class="card mb-4">
            <div class="card-body avatar">
                <h2 class="card-title">Info</h2>
                <img src="{{asset('image/'.$student->student_image)}}"  style="height:80px; weight:80px;" alt="">
                <p class="name">{{$student->student_name}}</p>
                <p class="designation">Student ID: {{$student->student_id}}</p>
                <p class="designation">Department: {{$student->student_department}}</p>
                <a class="email" href="#">Email: {{$student->student_email}}</a>
                <p>Address: {{$student->student_address}}</p>

            </div>
        </div>
    </div>
</div>

@endsection
