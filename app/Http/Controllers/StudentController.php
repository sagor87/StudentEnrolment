<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Image;
use DB;
Use File;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.add_student');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allstudent()
    {
        $students = Student::get();

        return view('admin.pages.all_student',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'student_name'=> 'required',
            'student_id'=> 'required|numeric',
            'student_fathername'=> 'required',
            'student_mothername'=> 'required',
            'student_email'=> 'required',
            'student_address'=> 'required',
            'student_password'=> 'required',
            'student_department'=> 'required',
            'student_admissionyear'=> 'required',
            'student_image'=> 'required'

            ]);

            $student=new Student;
            $student->student_name=$request->student_name;
            $student->student_id=$request->student_id;
            $student->student_fathername=$request->student_fathername;
            $student->student_mothername=$request->student_mothername;
            $student->student_email=$request->student_email;

            $student->student_address=$request->student_address;
            $student->student_password=md5($request->student_password);
            $student->student_department=$request->student_department;
            $student->student_admissionyear=$request->student_admissionyear;


            if (count($request->student_image) > 0) {
                $image = $request->file('student_image');
                $img=str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_name=$img.time().'.'.$ext;
                $location = public_path('image/'.$image_name);
                Image::make($image)->save($location);

                $student->student_image=$image_name;
        }
        $student->save();

        return redirect(route('all.student'))->with('successMsg', 'Student successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student,$id)
    {
        $student = Student::find($id);
        return view ('admin.pages.student_view',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {
        $student = Student::find($id);
        return view ('admin.pages.update_student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'student_name' => 'required',
            'student_fathername' => 'required',
            'student_mothername' => 'required',
            'student_email' => 'required',
            'student_address' => 'required'
        ]);

        $student = Student::find($id);
        $student->student_name = $request->student_name;
        $student->student_fathername = $request->student_fathername;
        $student->student_mothername = $request->student_mothername;
        $student->student_email = $request->student_email;
        $student->student_address= $request->student_address;
        $student->save();

        return redirect(route('all.student'))->with('successMsg', 'information successfully update');

    }

    public function image_update(Request $request, $id)
    {
         $student = Student::find($id);

         if (count($request->student_image) > 0) {

            if (!is_null($student)) {

                if (File::exists('image/'.$student->student_image)) {
                    File::delete('image/'.$student->student_image);
                }


            }

            $image = $request->file('student_image');
            $img=str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_name=$img.time().'.'.$ext;
            $location = public_path('image/'.$image_name);
            Image::make($image)->save($location);

            $student->student_image=$image_name;
            $student->save();

            return redirect(route('all.student'))->with('successMsg', 'information successfully update');
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete(Student $student , $id)
    {
        $student=Student::find($id);
        if (!is_null($student)) {

            if (File::exists('image/'.$student->student_image)) {
                File::delete('image/'.$student->student_image);
            }

            $student->delete();
        }

        return redirect(route('all.student'))->with('successMsg', 'information successfully Delete');


    }
}
