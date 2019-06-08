@extends('admin.layouts.master')
@section('content')
<div class="content-wrapper">

<div class="col-lg-8 side-right">
        <div class="card">
          <div class="card-body">
                @include('admin.partials.message')
            <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
              <h2 class="card-title">Details</h2>
              <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Avatar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Security</a>
                </li>
              </ul>
            </div>
            <div class="wrapper">
              <hr>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                  <form action="{{route('student_update',$student->id)}}" method="post">
                        @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                    <input type="text" name="student_name" value="{{$student->student_name}}" class="form-control" id="name" placeholder="Change user name">
                    </div>

                    <div class="form-group">
                      <label for="mobile">Father Name</label>
                      <input type="text" name="student_fathername" value="{{$student->student_fathername}}" class="form-control" id="mobile" placeholder="Change mobile number">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mother Name</label>
                      <input type="text" name="student_mothername" value="{{$student->student_mothername}}" class="form-control" id="mobile" placeholder="Change mobile number">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="student_email" value="{{$student->student_email}}" class="form-control id="email" placeholder="Change email address">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea name="student_address"  id="address" rows="6" class="form-control" placeholder="Change address">{{$student->student_address}}</textarea>
                    </div>

                    <div class="form-group mt-5">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <button class="btn btn-outline-danger">Cancel</button>
                    </div>
                  </form>
                </div><!-- tab content ends -->
                <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                  <div class="wrapper mb-5 mt-4">
                    <div class="badge badge-warning text-white">Note : </div>
                    <p class="d-inline ml-3 text-muted">Image size is limited to not greater than 1MB .</p>
                  </div>
                  <form action="{{route('image_update',$student->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="dropify" name="student_image" data-max-file-size="1mb" data-default-file="http://via.placeholder.com/100x100"/>
                    <div class="form-group mt-5">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <button class="btn btn-outline-danger">Cancel</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                  <form>
                    <div class="form-group">
                      <label for="change-password">Change password</label>
                      <input type="password" class="form-control" id="change-password" placeholder="Enter you current password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="new-password" placeholder="Enter you new password">
                    </div>
                    <div class="form-group mt-5">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      <button class="btn btn-outline-danger">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
