<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.new-applicant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.new-applicant.create', [
            'questions' => Question::all(),
        ]);
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
            'birthday' => 'required',
            'birthplace' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'type' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'job' => 'required',
        ]);
        $validatedData['gender_id'] = $validatedData['gender'];
        $validatedData['user_id'] = auth()->user()->id;
        Form::create($validatedData);
        return redirect('/new-applicant/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }

    public function validateForm(Request $req)
    {
        $answersFromTable = Question::all()->pluck('answer')->toArray();
        $answersFromForm = $req->all();
        $answers = [];
        $markPerQuestion = 100 / count($answersFromTable);
        $mark = 0;
        
        for($i = 0; $i < count($answersFromTable); $i++) 
            if($answersFromTable[$i] === $answersFromForm['answer'.$i+1]) array_push($answers, 1);
            
        foreach($answers as $answer) $mark += $markPerQuestion;

        return view('guest.new-applicant.photo', [
            'mark' => $mark,
        ]);
    }

    public function getPhoto()
    {
        return view('guest.new-applicant.photo');
    }

}
