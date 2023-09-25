<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('student_name');
            $table->string('gender');
            $table->string('date_of_birth')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('religion');
            $table->string('fathers_name');
            $table->string('fathers_mobile');
            $table->string('mothers_name');
            $table->string('mothers_mobile')->nullable();
            $table->string('present_address');
            $table->string('permanent_address')->nullable();
            $table->string('class_name');
            $table->integer('section_id');
            $table->string('group');
            $table->integer('roll');
            $table->integer('registration')->nullable();
            $table->string('student_image')->default('defaultstudentimage.jpg');
            $table->integer('student_status')->default(1);
            $table->timestamps();
            $table->SoftDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
