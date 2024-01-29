<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToOpcionesRespuestaTable extends Migration
{
    public function up()
    {
        Schema::table('_respuesta', function (Blueprint $table) {
            $table->foreign('id_pregunta')->references('id')->on('preguntas');
        });
    }

    public function down()
    {
        Schema::table('_respuesta', function (Blueprint $table) {
            $table->dropForeign(['id_pregunta']);
        });
    }
}