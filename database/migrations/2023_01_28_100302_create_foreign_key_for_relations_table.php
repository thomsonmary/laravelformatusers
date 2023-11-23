<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('rps_id')->references('id')->on('rps')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sap_id')->references('id')->on('sap')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mata_kuliah_id')->references('id')->on('matakuliah')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dosen_id')->references('id')->on('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kaprodi_id')->references('id')->on('kaprodi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('template_rps_id')->references('id')->on('templaterps')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('template_sap_id')->references('id')->on('templatesap')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bahan_ajar_id')->references('id')->on('bahanajar')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relations', function (Blueprint $table) {
            $table->dropForeign('relations_rps_id_foreign');
            $table->dropForeign('relations_sap_id_foreign');
            $table->dropForeign('relations_mata_kuliah_id_foreign');
            $table->dropForeign('relations_dosen_id_foreign');
            $table->dropForeign('relations_kaprodi_id_foreign');
            $table->dropForeign('relations_semester_id_foreign');
            $table->dropForeign('relations_time_id_foreign');
            $table->dropForeign('relations_template_rps_id_foreign');
            $table->dropForeign('relations_template_sap_id_foreign');
            $table->dropForeign('relations_bahan_ajar_id_foreign');
      });
    }
}
