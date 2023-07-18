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
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->String('libelle');
            $table->text('description');
            $table->integer('capacite');
            $table->String('adresse');
            $table->String('region');
            $table->String('ville');
            $table->String('localite');
            $table->String('pays');
            $table->String('image');
            $table->integer('prix_res');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salles');
    }
};
