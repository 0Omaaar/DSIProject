@extends('adminlte::page')

@section('title')
Creation D'une Nouvelle Offre
@endsection

@section('content_header')
    {{-- <h1 align="center"><b>Creation D'une Nouvelle Offre</b></h1> --}}
@endsection
@section('content')
    @include('layouts.alert')
    <div class="container mx-auto" style="margin: 10px">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Creer Une Nouvelle Offre</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('offers.store')}}"
                            method="POST" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="sujet_offre">SUJET D'OFFRE</label>
                                <input type="text" class="form-control" 
                                        name="sujet_offre" placeholder="Sujet D'Offre"
                                        value="{{old('sujet_offre')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="domaine_offre">DOMAINE D'OFFRE</label>
                                <input type="text" class="form-control" 
                                        name="domaine_offre" placeholder="Domaine D'Offre"
                                        value="{{old('domaine_offre')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="profil_requis">PROFIL REQUIS</label>
                                <input type="text" class="form-control" 
                                        name="profil_requis" placeholder="Profil Requis"
                                        value="{{old('profil_requis')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="duree_stage">DUREE STAGE</label>
                                <input type="tel" class="form-control" 
                                        name="duree_stage" placeholder="00 Mois"
                                        value="{{old('duree_stage')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="lieu_stage">LIEU STAGE</label>
                                <input type="text" class="form-control" 
                                        name="lieu_stage" placeholder="lieu_stage"
                                        value="{{old('lieu_stage')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description_stage">DESCRIPTION DE STAGE</label>
                                <input type="text" class="form-control" 
                                        name="description_stage" placeholder="description_stage"
                                        value="{{old('description_stage')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mode_stage">MODE DE STAGE</label>
                                <input type="text" class="form-control" 
                                        name="mode_stage" placeholder="mode_stage"
                                        value="{{old('mode_stage')}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Creer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
