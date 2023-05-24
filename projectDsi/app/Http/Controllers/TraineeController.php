<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = Trainee:: all();
        return view('trainees/index') -> with([
            'trainees' => $trainees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
      
        $this -> validate($request, [
            'id' => 'unique:trainees, id',
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'domaine' => 'required',
            'date_debut' => 'required',
            'ville' => 'required',
            'formation' => 'required',
            'age'=> 'required',
            'date_fin'=> 'required',
            'adresse'=> 'required',
        ]);
        Trainee :: create($request-> except('_token'));
        return redirect()-> route('trainees.index')-> with([
            'success' => 'Stagiaire Ajouté'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $trainee = Trainee::where('id', $id)->first();
        return view('trainees.show')->with([
                'trainee' => $trainee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $trainee = Trainee::where('id', $id)->first();
        return view('trainees.edit')-> with([
            'trainee' => $trainee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $trainee = Trainee::where('id', $id) -> first();
        $this -> validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'domaine' => 'required',
            'date_debut' => 'required',
            'ville' => 'required',
            'formation' => 'required',
            'age'=> 'required',
            'date_fin'=> 'required',
            'adresse'=> 'required',
        ]);
        $trainee->update($request-> except('_token', '_method'));
        return redirect()-> route('trainees.index')-> with([
            'success' => 'Stagiaire Modifié'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $trainee = Trainee::where('id', $id) -> first();
        $trainee->delete();
        return redirect()-> route('trainees.index')-> with([
            'success' => 'Stagiaire Suprimé'
        ]);
    }

    public function certificateRequest($id)
    {
        $trainee = Trainee::where('id', $id)->first();
        return view('trainees.certificate-request')->with([
            'trainee' => $trainee
        ]);
    }
}