<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payment_Records', function (Blueprint $table) {
            $table->id();
            $table->string('student_number');
            $table->integer('amount_paid');
            $table->integer('amount_left');
            $table->date('date_of_payment');
            $table->timestamps();
            //$table->foreign('student_number')->references('student_number')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Payment_Records');
    }
}
