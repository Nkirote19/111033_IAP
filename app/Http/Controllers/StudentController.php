<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
 
    public function save(Request $request)
    {

    	$obj_student = new Student();

    	$request->validate([
            'student_number' => 'required',
            'surname' => 'required',
            'first_name' => 'required',
            'other_name' => 'required',
            'gender' => 'required',
            'dob' => 'required|date',
            'phonenumber' => 'required',
            'email' => 'required|email',
        ]);

    	$obj_student->student_number = $request->input('student_number');
    	$obj_student->surname = $request->input('surname');
    	$obj_student->first_name = $request->input('first_name');
    	$obj_student->other_name = $request->input('other_name');
    	$obj_student->gender = $request->input('gender');
    	$obj_student->dob = $request->input('dob');
    	$obj_student->phonenumber = $request->input('phonenumber');
    	$obj_student->email = $request->input('email');

    	$obj_student->save();
    	return back()->with('success','Student is successfully registered.');
    }
    
    public function destroy($student_number) {
      DB::delete('delete from students where student_number = ?',[$student_number]);
      return back()->with('success','Student record is removed from the system.');
   }

   public function show($student_number) {
      // $student_number = DB::select('select * from students where student_number = ?',[$student_number]);
      // return Redirect::back()->with('code',['data'=>$student_number]);
    $students = Student::where('student_number',$student_number)->first();
  return view('111033.edit_students')->with('data',$students);
   }

   public function edit(Request $request,$student_number) {
        $surname = $request->input('surname');
        $first_name = $request->input('first_name');
        $other_name = $request->input('other_name');
        $gender = $request->input('gender');
        $dob= $request->input('dob');
        $phonenumber = $request->input('phonenumber');
        $email = $request->input('email');
 
      DB::update('update students set surname = ?, first_name = ?, other_name = ?, gender = ?, dob = ? , phonenumber = ? , email = ? where student_number = ?',[$surname, $first_name,$other_name,$gender,$dob,$phonenumber,$email,$student_number]);
      echo "Record updated successfully.<br/>";
       // return back()->with('success','Student record is updated in the system.');
     return redirect()->route('all_students');

}}