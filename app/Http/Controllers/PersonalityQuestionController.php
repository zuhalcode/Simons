<?php

namespace App\Http\Controllers;

use App\Models\PersonalityQuestion;
use Illuminate\Http\Request;

class PersonalityQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.personalities.index',[
            'questions' => PersonalityQuestion::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.personalities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'question' => 'required|max:255',
        ]);

        PersonalityQuestion::create($validatedData);
        return redirect('/personality')->with('success', 'Soal baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalityQuestion  $personalityQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalityQuestion $personalityQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalityQuestion  $personalityQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalityQuestion $personalityQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalityQuestion  $personalityQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalityQuestion $personalityQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalityQuestion  $personalityQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalityQuestion $personalityQuestion)
    {
        //
    }
}
