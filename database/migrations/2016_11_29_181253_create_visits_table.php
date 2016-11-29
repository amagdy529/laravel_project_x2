<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevisitsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('time');
            $table->text('complaint');
            $table->text('diagnoses');
            $table->integer('patient_id')->unsigned();
						$table->foreign('patient_id')
						      ->references('id')->on('users')
						      ->onDelete('cascade');
            $table->string('visit_status');
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
        Schema::drop('visits');
    }
}
