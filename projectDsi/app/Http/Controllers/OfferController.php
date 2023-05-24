<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;


class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer:: all();
        return view('offers/index') -> with([
            'offers' => $offers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this -> validate($request, [
            'id' => 'unique:offers, id',
            'sujet_offre' => 'required',
            'domaine_offre' => 'required',
            'profil_requis' => 'required',
            'duree_stage' => 'required',
            'lieu_stage' => 'required',
            'description_stage' => 'required',
            'mode_stage' => 'required',
        ]);
        Offer :: create($request-> except('_token'));
        return redirect()-> route('offers.index')-> with([
            'success' => 'Offre Ajoutée'
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
        $offer = Offer::where('id', $id)->first();
        return view('offers.show')->with([
                'offer' => $offer
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
        $offer = Offer::where('id', $id)->first();
        return view('offers.edit')-> with([
            'offer' => $offer
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
        $offer = Offer::where('id', $id) -> first();
        $this -> validate($request, [
            'sujet_offre' => 'required',
            'domaine_offre' => 'required',
            'profil_requis' => 'required',
            'duree_stage' => 'required',
            'lieu_stage' => 'required',
            'description_stage' => 'required',
            'mode_stage' => 'required',
        ]);
        $offer->update($request-> except('_token', '_method'));
        return redirect()-> route('offers.index')-> with([
            'success' => 'Offre Modifiée'
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
        $offer = Offer::where('id', $id) -> first();
        $offer->delete();
        return redirect()-> route('offers.index')-> with([
            'success' => 'Offre Suprimée'
        ]);
    }
}
