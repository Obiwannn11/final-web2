<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quiz = Quiz::all();
        return view('quiz.index', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quiz_judul' => 'required',
            'quiz_code' => 'required',
            'quiz_maker' => 'required'
        ]);

        Quiz::create($request->all());
        return redirect()->route('quiz.index')->with('success', 'Quiz Berhasil dibuat.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view('quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find category
        $quiz = Quiz::findOrFail($id);
        return view('quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'quiz_judul' => 'required',
            'quiz_code' => 'required',
            'quiz_maker' => 'required'
        ]);

        $quiz->update($request->all());
        return redirect()->route('quiz.index')->with('success', 'Quiz Berhasil di Update.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quiz.index')->with('success', 'Quiz Berhasil di Hapus.');

    }
}
