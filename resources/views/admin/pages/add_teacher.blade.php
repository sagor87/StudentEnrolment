@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 col-lg-6 grid-margin">
            <div class="card">
                <div class="card-body">
                        @include('admin.partials.message')
                    <h2 class="card-title">Add Student</h2>
                <form class="forms-sample" action="{{route('store.teacher')}}"  method="post">
                        @csrf
                        <div class="form-group">
                            <label for="student_name">Teacher Name</label>
                            <input type="text" name="teacher_name" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="student_mothername">Email</label>
                            <input type="email" name="teacher_email" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="student_address">Address</label>
                            <input type="text" name="teacher_address" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="student_password">Mobile No.</label>
                            <input type="text" name="teacher_mobile" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
