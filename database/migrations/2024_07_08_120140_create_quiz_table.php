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
        Schema::create('quiz', function (Blueprint $table) { 
            $table->id();
            $table->string('soal');
            $table->enum('type',['pilihan_ganda','essay']);
            $table->string('pilihan1');
            $table->string('pilihan2');
            $table->string('pilihan3');
            $table->string('pilihan4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz');
    }
};
