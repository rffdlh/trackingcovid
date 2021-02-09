<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasus1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jumlah_positif');
            $table->string('jumlah_sembuh');
            $table->string('jumlah_meninggal');
            $table->date('tanggal');
            $table->unsignedBigInteger('id_rw');
            $table->foreign('id_rw')->references('id')
                    ->on('rws')->onDelete('cascade');
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
        Schema::dropIfExists('kasus1s');
    }
}
