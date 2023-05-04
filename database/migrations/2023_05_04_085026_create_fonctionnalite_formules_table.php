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
        Schema::create('fonctionnalite_formules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_formule');
            $table->foreign('id_formule')->references('id')->on('formules');
            $table->string('libelle_fonctionnalite');
            $table->string('image_fonctionnalite');
            $table->string('ordre_fonctionnalite');
            $table->string('description_fonctionnalite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fonctionnalite_formules');
    }
};
