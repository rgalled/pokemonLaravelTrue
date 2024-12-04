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
        Schema::create('real_pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->integer('ataque');
            $table->integer('defensa');
            $table->string('sexo',50);
            $table->text('descripción');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_pokemon');
    }
};
