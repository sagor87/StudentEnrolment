@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 col-lg-6 grid-margin">
            <div class="card">
                <div class="card-body">
                        @include('admin.partials.message')
                    <h2 class="card-title">Add Student</h2>
                <form class="forms-sample" action="{{route('store.student')}}"  method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="student_name">Student Name</label>
                            <input type="text" name="student_name" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="student_name">Student ID</label>
                            <input type="text" name="student_id" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Student Id">
                        </div>
                        <div class="form-group">
                            <label for="student_fathername">Father Name</label>
                            <input type="text" name="student_fathername" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Father name">
                        </div>
                        <div class="form-group">
                            <label for="student_mothername">Mother Name</label>
                            <input type="text" name="student_mothername" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Mother name">
                        </div>
                        <div class="form-group">
                            <label for="student_mothername">Email</label>
                            <input type="email" name="student_email" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="student_address">Address</label>
                            <input type="text" name="student_address" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="student_password">Password</label>
                            <input type="password" name="student_password" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="student_admissionyear">Admission Year</label>
                            <input type="" name="student_admissionyear" class="form-control p-input"
                                aria-describedby="emailHelp" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="form-group">
                            <label for="student_password">Department : </label>
                            <select class="form-control p-input" name="student_department">
                                <option >select</option>
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="ETE">ETE</option>
                                <option value="CE">CE</option>
                            </select>

                        </div>



                        <div class="form-group">
                                <label class="col-sm-4 col-form-label">Upload Your Image file</label>
                                <div class="col-sm-8">
                                  <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                  <input type="file" class="form-control-file" id="exampleInputFile" name="student_image" aria-describedby="fileHelp2">
                                </div>

                            </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
