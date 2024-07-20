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
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_code'); // Contoh foreign key ke soal table
            $table->string('soal_soal');
            $table->string('soal_jawaban1');
            $table->string('soal_jawaban2');
            $table->string('soal_jawaban3');
            $table->string('soal_jawaban4');
            $table->string('soal_jawaban_benar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soals');
    }
};
