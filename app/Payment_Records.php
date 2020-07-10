<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_Records extends Model
{
	protected $table = 'payment_records';
 	protected $fillable = [
        'student_number',
        'amount_paid', 
        'amount_left',
        'date_of_payment',
    ];

     public function relationsPayStu()
	{
    return $this->belongsTo('App\Student','student_number');
	}
}
