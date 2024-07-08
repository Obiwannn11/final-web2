<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'soal' => 'apa ini?',
            'pilihan1' => 'ini adalah itu',
            'pilihan2' => 'ini adalah ini',
            'pilihan3' => 'ini bukan itu',
            'pilihan4' => 'ini bukan ini',
            'type' => 'pilihan_ganda',
        ];
        [
            'soal' => 'apa ini?',
            'pilihan1' => 'ini adalah itu yang bukan ini',
            'pilihan2' => null,
            'pilihan3' => null,
            'pilihan4' => null,
            'type' => 'essay',
        ];
    }
}
