<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExit_sTable extends Migration
{
    public function up()
    {
        Schema::create('exit_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->date('date');
            $table->string('reason');
            $table->timestamps();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exit_s');
    }
}
