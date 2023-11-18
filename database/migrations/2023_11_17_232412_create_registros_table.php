<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id')->unsigned(false);
            $table->string('nombre');
            $table->integer('cedula')->unique();
            $table->integer('numTelefono');
            $table->string('Direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};