<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('emp_code')->unique();
            $table->string('fullname', 255);
            $table->date('birthday');
            $table->boolean('gender');
            $table->integer('dep_id')->unsigned();
            $table->foreign('dep_id')->references('id')->on('department');
            $table->string('hometown', 255);
            $table->string('address', 255);
            $table->string('level', 255);
            $table->string('possition', 255);
            $table->string('phone', 15);
            $table->string('email', 255);
            $table->string('tax_code', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}

// $table->bigIncrements('id');
//             $table->bigInteger('emp_id')->unsigned();
//             $table->foreign('emp_id')->references('id')->on('employee');
//             $table->string('cause_bonus', 255);
//             $table->string('describe', 255);
//             $table->double('money');
//             $table->date('date_bonus');
//             $table->timestamps();
//             $table->softDeletes();
//             $table->bigIncrements('id');
//             $table->bigInteger('emp_id')->unsigned();
//             $table->foreign('emp_id')->references('id')->on('employee');
//             $table->string('cause_discipline', 255);
//             $table->string('describe', 255);
//             $table->double('money');
//             $table->date('date_discipline');
//             $table->timestamps();
//             $table->softDeletes();
//             $table->bigIncrements('id');
//             $table->string('role_name', 50);
//             $table->timestamps();
//             $table->softDeletes();
//             $table->bigIncrements('id');
//             $table->string('user_code', 10)->unique();
//             $table->string('username', 50);
//             $table->string('password', 100);
//             $table->bigInteger('role_id')->unsigned();
//             $table->foreign('role_id')->references('id')->on('role');
//             $table->timestamps();
//  $table->bigIncrements('id');
//             $table->bigInteger('emp_id')->unsigned();
//             $table->foreign('emp_id')->references('id')->on('employee');
//             $table->float('workday');
//             $table->float('OT');
//             $table->timestamps();
//                     $table->bigIncrements('id');
//             $table->bigInteger('timekeeping_id')->unsigned();
//             $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
//             $table->double('salary');
//             $table->double('bonus');
//             $table->double('discipline');
//             $table->double('insurance');
//             $table->double('tax_code_tax');
//             $table->double('allowan');
//             $table->double('sum_salary');
//             $table->timestamps();
//             $table->softDeletes();