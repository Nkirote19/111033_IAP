<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'student_number';
    protected $fillable = [
        'student_number',
        'surname', 
        'first_name',
        'other_name',
        'gender',
        'dob',
        'phonenumber',
        'email'
    ];

      public function relationsStuPay()
        {
            return $this->hasMany('App\Payment_Records', 'student_number', 'student_number');
        }
}
