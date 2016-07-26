<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSectionTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_section_teachers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('course_section_id')->unsigned();
            $table->foreign('course_section_id')->references('id')->on('course_sections');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('users');

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
        Schema::drop('course_section_teachers');
    }
}
