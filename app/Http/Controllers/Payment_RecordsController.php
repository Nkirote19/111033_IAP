<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Payment_Records;
use App\Student;

class Payment_RecordsController extends Controller
{

    public function getStudentID(){
        $students = Student::all();
        //var_dump($students);

        return view('111033.fees')->with('data',$students);
    }

    public function getBalance($id, Request $request)
    {

        $payment_record = new Payment_Records;
        $fees_original = new Fees; 

        $response = Payment_Records::where('student_number',$id)->count();

        if($response == "0")
        {
            $fees = Fees::where('id',1)->pluck('total_fee')->toArray();
            return $fees;

        }else{

            $fees = Payment_Records::where('student_number',$id)->latest()->first()->pluck('amount_left');
            return $fees;

        }
        echo json_encode(array('data',$fees));
	}

    public function savePayment(Request $request)
    {

         $payment = new Payment_Records();

         $payment->student_number = $request->input('student_number');
         $payment->amount_paid = $request->input('current_amount');
         $payment->amount_left = $request->input('new_balance');
         $payment->date_of_payment = $request->input('date_of_payment');

         $payment->save();
         return back()->with('success','Payment has been successfully recorded.');
    }

    // public function test(){
    //     // $st_name = Payment_Records::with('relationsPayStu')->get();
    //     $student_number = '97876';

    //     $student= Payment_Records::with('relationsPayStu')->where('student_number',$student_number)->get();
    //     $data = Payment_Records::all ();
    //     foreach ($data as $stu) {
    //         echo $stu->student_number;
    //         # code...
    //     }
    //    // var_dump($student);
    // }
}
