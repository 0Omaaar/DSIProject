@extends('adminlte::page')

@section('title')
Creation D'un Nouveau Stagiaire
@endsection

@section('content_header')
    {{-- <h1 align="center"><b>Creation D'un Nouveau Stagiaire</b></h1> --}}
@endsection
@section('content')
    @include('layouts.alert')
    <div class="container mx-auto" style="margin: 10px">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Ajouter Un Nouveau Stagiaire</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('trainees.store')}}"
                            method="POST" class="mt-3" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" 
                                        name="nom" placeholder="Nom"
                                        value="{{old('nom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" 
                                        name="prenom" placeholder="Prenom"
                                        value="{{old('prenom')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" 
                                        name="email" placeholder="test@test.com"
                                        value="{{old('email')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="telephone">Telephone</label>
                                <input type="tel" class="form-control" 
                                        name="telephone" placeholder="0000000000"
                                        value="{{old('telephone')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="domaine">Domaine</label>
                                <input class="ml-2 text-xl-center" type="text" name="domaine" list="domaineNames" value="{{old('domaine')}}" placeholder="Domaine">
                                <datalist id="domaineNames">
                                    <option value="Informatique">
                                    <option value="Economie">
                                    <option value="Finance">
                                    <option value="Droit">
                                    <option value="Reseau">
                                    <option value="Developpement">
                                </datalist>
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_debut">Date Debut</label>
                                <input type="datetime-local" class="form-control" 
                                        name="date_debut" placeholder="yy-mm-dd"
                                        value="{{old('date_debut')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" 
                                        name="ville" placeholder="Ville"
                                        value="{{old('ville')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="formation">Formation</label>
                                <input class="ml-2 text-xl-center" type="text" name="formation" list="formationsName" value="{{old('formation')}}" placeholder="Formation">
                                <datalist id="formationsName">
                                    <option value="EST">
                                    <option value="ENSA">
                                    <option value="ENCG">
                                    <option value="FAC">
                                    <option value="FST">
                                    <option value="OFPPT">
                                    <option value="ENSIAS">
                                    <option value="EMI">
                                    <option value="EMSI">
                                    <option value="ENSAM">  
                                    <option value="Autre">
                                </datalist>
                            </div>
                            <div class="form-group mb-3">
                                <label for="agr">Age</label>
                                <input type="age" class="form-control" 
                                        name="age"placeholder="00 ans"
                                        value="{{old('age')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_fin">Date Fin</label>
                                <input type="datetime-local" class="form-control" 
                                        name="date_fin" placeholder="Date Fin"
                                        value="{{old('date_fin')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" 
                                        name="adresse" placeholder="Adresse"
                                        value="{{old('adresse')}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
