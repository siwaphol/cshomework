<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('course_section_id')->unsigned();
            $table->foreign('course_section_id')->references('id')->on('course_sections');

            $table->string('name');
            $table->string('details')->nullable();

            $table->timestamp('assign_date');
            $table->timestamp('due_date');
            $table->timestamp('accept_date');

            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->integer('semester_id')->unsigned();
            $table->foreign('semester_id')->references('id')->on('semesters');

            $table->integer('homework_type_id')->unsigned();
            $table->foreign('homework_type_id')->references('id')->on('homework_types');

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
        Schema::drop('homeworks');
    }
}
