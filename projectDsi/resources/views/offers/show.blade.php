@extends('adminlte::page')

@section('title')
Affichage D'une Offre
@endsection

@section('content_header')
    {{-- <h1 align="center"><b>Affichage D'une Offre</b></h1> --}}
@endsection
@section('content')
    @include('layouts.alert')
    <div class="container mx-auto" style="margin: 10px">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>{{$offer->sujet_offre}}</h3>
                        </div>
                    </div>
                    {{-- <div class="text-center font-weight-bold text-uppercase mt-3">
                        <a href="{{route('certificate.request',$trainee->id)}}" class="btn btn-outline-dark">
                            Demande D'Attestation
                        </a>
                    </div> --}}
                    <hr>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="sujet_offre">SUJET D'OFFRE</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="sujet_offre" placeholder="sujet_offre"
                                        value="{{$offer->sujet_offre}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="domaine_offre">DOMAINE D'OFFRE</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="domaine_offre" placeholder="domaine_offre"
                                        value="{{$offer->domaine_offre}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="profil_requis">PROFIL REQUIS</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="profil_requis" placeholder="profil_requis"
                                        value="{{$offer->profil_requis}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="duree_stage">DUREE STAGE</label>
                                <input type="tel" disabled class="form-control rounded-0" 
                                        name="duree_stage" placeholder="duree_stage"
                                        value="{{$offer->duree_stage}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="lieu_stage">LIEU STAGE</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="lieu_stage" placeholder="lieu_stage"
                                        value="{{$offer->lieu_stage}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description_stage">DESCRIPTION STAGE</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="description_stage" placeholder="description_stage"
                                        value="{{$offer->description_stage}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mode_stage">MODE STAGE</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="mode_stage" placeholder="mode_stage"
                                        value="{{$offer->mode_stage}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection