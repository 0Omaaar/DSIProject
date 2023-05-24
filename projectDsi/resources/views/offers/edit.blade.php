@extends('adminlte::page')

@section('title')
Modification D'une Offre
@endsection

@section('content_header')
    {{-- <h1 align="center"><b>Modifier Une Offre</b></h1> --}}
@endsection
@section('content')
    @include('layouts.alert')
    <div class="container mx-auto" style="margin: 10px">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Modifier Une Offre</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('offers.update',$offer->id ) }}"
                            method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="sujet_offre">SUJET D'OFFRE</label>
                                <input type="text" class="form-control" 
                                        name="sujet_offre" placeholder="sujet_offre"
                                        value="{{old('sujet_offre', $offer-> sujet_offre)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="domaine_offre">DOMAINE D'OFFRE</label>
                                <input type="text" class="form-control" 
                                        name="domaine_offre" placeholder="domaine_offre"
                                        value="{{old('domaine_offre', $offer-> domaine_offre)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="profil_requis">PROFIL REQUIS</label>
                                <input type="text" class="form-control" 
                                        name="profil_requis" placeholder="profil_requis"
                                        value="{{old('profil_requis', $offer-> profil_requis)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="duree_stage">DUREE STAGE</label>
                                <input type="tel" class="form-control" 
                                        name="duree_stage" placeholder="00 mois"
                                        value="{{old('duree_stage', $offer-> duree_stage)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="lieu_stage">LIEU STAGE</label>
                                <input type="text" class="form-control" 
                                        name="lieu_stage" placeholder="lieu_stage"
                                        value="{{old('lieu_stage', $offer-> lieu_stage)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description_stage">DESCRIPTION DE STAGE</label>
                                <input type="text" class="form-control" 
                                        name="description_stage" placeholder="description_stage"
                                        value="{{old('description_stage', $offer-> description_stage)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mode_stage">MODE DE STAGE</label>
                                <input type="text" class="form-control" 
                                        name="mode_stage" placeholder="mode_stage"
                                        value="{{old('mode_stage', $offer-> mode_stage)}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Modifier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
