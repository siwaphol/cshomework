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

            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections');

            $table->string('name');
            $table->string('details')->nullable();

            $table->timestamp('assign_date');
            $table->timestamp('due_date');
            $table->timestamp('accept_date');

            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('users');
            // semester ได้มาจากตาราง sections แล้วไม่จำเป็นต้องจัดเก็บซ้ำ
//            $table->integer('semester_id')->unsigned();
//            $table->foreign('semester_id')->references('id')->on('semesters');

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
