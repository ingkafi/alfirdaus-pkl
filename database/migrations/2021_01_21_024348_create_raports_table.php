<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nis')->unique();
            $table->timestamps();
            $table->string('raport_7_1')->nullable();
            $table->string('raport_7_2')->nullable();
            $table->string('raport_8_1')->nullable();
            $table->string('raport_8_2')->nullable();
            $table->string('raport_9_1')->nullable();
            $table->string('raport_9_2')->nullable();
            $table->string('raport_10_1')->nullable();
            $table->string('raport_10_2')->nullable();
            $table->string('raport_11_1')->nullable();
            $table->string('raport_11_2')->nullable();
            $table->string('raport_12_1')->nullable();
            $table->string('raport_12_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raports');
    }
}
