<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rps');
            $table->string('identitas_mk');
            $table->text('team_teaching');
            $table->text('minggu_ke');
            $table->text('sub_cpmk');
            $table->text('bahan_kajian');
            $table->text('metode_pembelajaran');
            $table->text('estimasi_waktu');
            $table->text('bentuk_teknik');
            $table->text('indikator_penilaian');
            $table->text('bobot_penilaian');
            $table->text('norma_akademik');
            $table->text('nilai_akhir');
            $table->text('aturan_penilaian1');
            $table->text('aturan_penilaian2');
            $table->text('daftar_pustaka_wajib');
            $table->text('daftar_pustaka_pendukung');
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
        Schema::dropIfExists('rps');
    }
}
