<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            // $table->string('nama');
            $table->string('nama');
            $table->char('nis',25);
            $table->char('j_kel',1);
            $table->string('grade',2);
            $table->string('bulan');
            $table->char('tgl_1',1)->nullable();
            $table->char('tgl_2',1)->nullable();
            $table->char('tgl_3',1)->nullable();
            $table->char('tgl_4',1)->nullable();
            $table->char('tgl_5',1)->nullable();
            $table->char('tgl_6',1)->nullable();
            $table->char('tgl_7',1)->nullable();
            $table->char('tgl_8',1)->nullable();
            $table->char('tgl_9',1)->nullable();
            $table->char('tgl_10',1)->nullable();
            $table->char('tgl_11',1)->nullable();
            $table->char('tgl_12',1)->nullable();
            $table->char('tgl_13',1)->nullable();
            $table->char('tgl_14',1)->nullable();
            $table->char('tgl_15',1)->nullable();
            $table->char('tgl_16',1)->nullable();
            $table->char('tgl_17',1)->nullable();
            $table->char('tgl_18',1)->nullable();
            $table->char('tgl_19',1)->nullable();
            $table->char('tgl_20',1)->nullable();
            $table->char('tgl_21',1)->nullable();
            $table->char('tgl_22',1)->nullable();
            $table->char('tgl_23',1)->nullable();
            $table->char('tgl_24',1)->nullable();
            $table->char('tgl_25',1)->nullable();
            $table->char('tgl_26',1)->nullable();
            $table->char('tgl_27',1)->nullable();
            $table->char('tgl_28',1)->nullable();
            $table->char('tgl_29',1)->nullable();
            $table->char('tgl_30',1)->nullable();
            $table->char('tgl_31',1)->nullable();
            
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
        Schema::dropIfExists('presensi');
    }
}
