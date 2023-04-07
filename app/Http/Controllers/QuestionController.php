<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     *? Menampilkan halaman pertanyaan dengan semua data
     */
    public function index()
    {   
        $questions = Question::all(); // sama dengan SELECT *
        return view('questions.index', compact('questions'));
    }


    /**
     * ? Menampilkan question sesuai id
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);

        return view('questions.detail', compact('question'));
    }

    /**
     *? Menampilkan halaman form untuk membuat pertanyaan
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     *? Menyimpan data ke database
     */
    public function store(Request $request)
    {
        // melakukan validasi input
        $validated = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:5'
        ]);

        if (!$validated) {
            return back()->withInput()->withErrors($validated);
        }

        $validated['username'] = 'andi'; // Ini akan kita ganti dengan login session
        Question::create($validated);

        return response()->redirectTo('questions')
                ->with('success', 'Berhasil menambahkan pertanyaan');
    }


    /**
     * ? Menampilkan halaman edit question
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('questions.edit', compact('question'));
    }

    /**
     * ? Memeperbarui data 
     */
    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:5'
        ]);

        $question = Question::findOrFail($id);
        $question->update($validated);

        return redirect('/questions/' . $id)->with('success', 'Berhasil update data');
    }


    /**
     * ? Menhapus data
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect('/questions')->with('success', 'Berhasil menghapus data');
    }
}
