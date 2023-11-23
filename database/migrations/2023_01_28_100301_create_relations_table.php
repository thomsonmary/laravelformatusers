<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rps_id')->unsigned();
            $table->bigInteger('sap_id')->unsigned();
            $table->bigInteger('mata_kuliah_id')->unsigned();
            $table->bigInteger('dosen_id')->unsigned();
            $table->bigInteger('kaprodi_id')->unsigned();
            $table->bigInteger('semester_id')->unsigned();
            $table->bigInteger('time_id')->unsigned();
            $table->bigInteger('template_rps_id')->unsigned();
            $table->bigInteger('template_sap_id')->unsigned();
            $table->bigInteger('bahan_ajar_id')->unsigned();
            $table->enum('validasi_gkm',['valid', 'tidakvalid'])->nullable();
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
        Schema::dropIfExists('relations');
    }
}
