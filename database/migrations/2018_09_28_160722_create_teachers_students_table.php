<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('teacher_id')->nullable();
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

            $table->unsignedInteger('student_id')->nullable();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('teachers_students');
    }
}
