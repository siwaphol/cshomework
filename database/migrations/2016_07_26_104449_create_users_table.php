<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code',9)->unique();
            $table->string('username');
            $table->string('first_name_th')->nullable();
            $table->string('last_name_th')->nullable();
            $table->string('first_name_en')->nullable();
            $table->string('last_name_en')->nullable();
            $table->string('email')->unique();

            $table->integer('role_id')->nullable()->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');

            $table->integer('faculty_id')->nullable()->unsigned();
            $table->foreign('faculty_id')->references('id')->on('faculties');

            $table->integer('semester_id')->unsigned();
            $table->foreign('semester_id')->references('id')->on('semesters');

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
        Schema::drop('users');
    }
}
