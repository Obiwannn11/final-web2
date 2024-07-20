<?php

namespace App\Models;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Soal extends Model
{
    use HasFactory;
    protected $fillable = ['soal_soal','soal_jawaban1','soal_jawaban2','soal_jawaban3','soal_jawaban4','soal_jawaban_benar', 'quiz_code'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
