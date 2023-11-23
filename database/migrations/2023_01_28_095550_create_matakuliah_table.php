<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mk');
            $table->string('kode_mk');
            $table->string('sks_mk');
            $table->string('semester_rps');
            $table->string('kota_waktu');
            $table->string('ketua_prodi');
            $table->text('sinopsis_mk');
            $table->text('cpl_prodi');
            $table->text('media_software');
            $table->text('media_hardware');
            $table->text('prasyarat_mk');
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
        Schema::dropIfExists('matakuliah');
    }
}
