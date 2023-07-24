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
        Schema::create('demande_reservs', function (Blueprint $table) {
            $table->id();
            $table->string('raison_res');
            $table->integer('id_user')->unsigned();
            $table->integer('id_salle')->unsigned();
            $table->integer('id_reservation')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_reservs');
    }
};
