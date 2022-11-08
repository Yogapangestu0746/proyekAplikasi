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
        Schema::create('penugasans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lp');
            $table->foreign('id_lp')
                ->references('id')->on('lingkup_pekerjaans')->onDelete('cascade');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('tempat',255);
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
        Schema::dropIfExists('penugasans');
    }
};
