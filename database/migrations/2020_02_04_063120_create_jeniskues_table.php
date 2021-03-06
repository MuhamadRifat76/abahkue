<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeniskuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeniskues', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('foto');
            $table->Integer('categoris_id')->unsigned();
            $table->foreign('categoris_id')->references('id')->on('categoris')->onDelete('CASCADE');

            $table->integer('harga');
            $table->string('nama');
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
        Schema::dropIfExists('jeniskues');
    }
}
