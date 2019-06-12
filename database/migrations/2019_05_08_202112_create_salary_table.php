<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('timekeeping_id')->unsigned();
            // $table->foreign('timekeeping_id')->references('id')->on('timekeeping');
            $table->string('fullname', 50);
            $table->double('salary');
            $table->float('standard_workday');
            $table->float('workday');
            $table->bigInteger('bonus_id')->unsigned();
            // $table->foreign('bonus_id')->references('id')->on('bonus');
            $table->bigInteger('discipline_id')->unsigned();
            // $table->foreign('discipline_id')->references('id')->on('discipline');
            $table->float('OT');
            $table->double('insurance');
            $table->double('tax_code_tax');
            $table->double('allowan');
            $table->double('sum_salary');
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
        Schema::dropIfExists('salary');
    }
}
