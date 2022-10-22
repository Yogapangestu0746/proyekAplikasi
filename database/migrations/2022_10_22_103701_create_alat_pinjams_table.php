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
        Schema::create('alat_pinjams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ruangan');
            $table->unsignedBigInteger('id_tugastambahan');
            $table->date('tgl_pinjam');
            $table->date('tgl_pengembalian');
            $table->date('tgl_pesan');
            $table->foreign('id_ruangan')->references('id')->on('ruangans')->onDelete('cascade');
            $table->foreign('id_tugastambahan')->references('id')->on('tugas_tambahans')->onDelete('cascade');
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
        Schema::dropIfExists('alat_pinjams');
    }
};
