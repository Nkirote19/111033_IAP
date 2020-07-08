<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Student;
use App\Payment_Records;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('MySchool');
});

Route::get('dashboard', function () {
    return view('111033/dashboard');
});

Route::get('student', function () {
    return view('111033/student');
});
// Route::get('fees', function () {
//     return view('111033/fees');
// });
Route::get('all_students', function () {
    return view('111033/all_students');
});
Route::get('all_payments', function () {
    return view('111033/all_payments');
});
Route::post('/register_student','StudentController@save');

Route::get ( 'all_students', function () {
    $data = Student::all ();
    return view ( '111033/all_students' )->withData ( $data );
} )->name('all_students');

Route::get('delete/{student_number}','StudentController@destroy');

Route::get('edit1/{student_number}','StudentController@show');

Route::post('edit/{student_number}','StudentController@edit');


// Route::post('/add_payment','Payment_RecordsController@save');

Route::post('/getBalance/{id}','Payment_RecordsController@getBalance');

Route::get('/getID','Payment_RecordsController@getStudentID');

Route::post('/savePayment','Payment_RecordsController@savePayment');

Route::get ( 'all_payments', function () {
    $data = Payment_Records::all ();
    return view ( '111033/all_payments' )->withData ( $data );
} )->name('all_payments');

// Route::get('/test','Payment_RecordsController@test');