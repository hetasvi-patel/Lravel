<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->unsignedBigInteger('enrollmentno');
            $table->unsignedBigInteger('programid');
            $table->unsignedBigInteger('departmentid');
            $table->primary('id');
            $table->timestamps();
            $table->foreign('departmentid')->references('id')->on('departments');
            $table->foreign('programid')->references('id')->on('programs');
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
};
