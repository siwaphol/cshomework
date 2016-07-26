<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSectionStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_section_students', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('course_section_id')->unsigned();
            $table->foreign('course_section_id')->references('id')->on('course_sections');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users');
            // empty = OK , W, P
            $table->char('status',1)->nullable();

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
        Schema::drop('course_section_students');
    }
}
