<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeworkStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework_students', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('homework_id')->unsigned();
            $table->foreign('homework_id')->references('id')->on('homeworks');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users');

            $table->tinyInteger('status')->unsigned();
            $table->timestamp('submitted_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homework_students');
    }
}
