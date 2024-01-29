<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_respuestas', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('id_pregunta');
            $table->string('opcion');
            $table->boolean('es_correcta');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_respuestas');
    }
};
