<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('plate');
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
