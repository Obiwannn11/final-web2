<?php

namespace Database\Seeders;

use App\Models\Quiz as ModelsQuiz;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Quiz extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        ModelsQuiz::factory()->create([
            'soal' => soal(5),
            'pilihan1' => pilihan(5),
            'pilihan2',
            'pilihan3',
            'pilihan4',
            'type',
        ]);
    }
}
