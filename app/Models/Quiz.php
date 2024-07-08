<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal',
        'pilihan1',
        'pilihan2',
        'pilihan3',
        'pilihan4',
        'type',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
