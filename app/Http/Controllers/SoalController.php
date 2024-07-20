<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Quiz $quiz)
    {
        $soal = $quiz->quiz;
        return view('soal.index', compact('quiz', 'soal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Quiz $quiz)
    {
        return view('soal.create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'soal_soal' => 'required',
            'soal_jawaban1' => 'required',
            'soal_jawaban2' => 'required',
            'soal_jawaban3' => 'required',
            'soal_jawaban4' => 'required',
            'soal_jawaban_benar' => 'required',
            'quiz_code' => 'required',
        ]);

        $quiz->items()->create($request->all());
        return redirect()->to_route('quiz.soal.index', $quiz)->with('success', 'Item created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz, Soal $soal)
    {
        return view('quiz.soal.show', compact('quiz', 'soal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz, Soal $soal)
    {
        return view('soal.edit', compact('quiz', 'soal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz,  Soal $soal)
    {
        $request->validate(['soal_soal' => 'required',
            'soal_jawaban1' => 'required',
            'soal_jawaban2' => 'required',
            'soal_jawaban3' => 'required',
            'soal_jawaban4' => 'required',
            'soal_jawaban_benar' => 'required',
            'quiz_code' => 'required',
        ]);

        $soal->update($request->all());
        return redirect()->to_route('quiz.soal.index', $quiz)->with('success', 'Item updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz, Soal $soal)
    {
        $soal->delete();
        return redirect()->to_route('quiz.soal.index', $quiz)->with('success', 'Item deleted successfully.');

    }
}
