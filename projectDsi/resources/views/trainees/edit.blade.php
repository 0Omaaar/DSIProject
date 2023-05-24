@extends('adminlte::page')

@section('title')
Modification D'un Stagiaire
@endsection

@section('content_header')
@endsection
@section('content')
    @include('layouts.alert')
    <div class="container mx-auto" style="margin: 10px" >
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Modifier Un Stagiaire</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('trainees.update',$trainee->id ) }}"
                            method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" 
                                        name="nom" placeholder="Nom"
                                        value="{{old('nom', $trainee-> nom)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" 
                                        name="prenom" placeholder="Prenom"
                                        value="{{old('prenom', $trainee-> prenom)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" 
                                        name="email" placeholder="Email"
                                        value="{{old('email', $trainee-> email)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="telephone">Telephone</label>
                                <input type="tel" class="form-control" 
                                        name="telephone" placeholder="Telephone"
                                        value="{{old('telephone', $trainee-> telephone)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="domaine">Domaine</label>
                                <input type="text" class="form-control" 
                                        name="domaine" placeholder="Domaine"
                                        value="{{old('domaine', $trainee-> domaine)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_debut">Date Debut</label>
                                <input type="datetime-local" class="form-control" 
                                        name="date_debut" placeholder="yy-mm-dd"
                                        value="{{old('date_debut', $trainee-> date_debut)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" 
                                        name="ville" placeholder="Ville"
                                        value="{{old('ville', $trainee-> ville)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="age">Age</label>
                                <input type="age" class="form-control" 
                                        name="age" placeholder="--"
                                        value="{{old('age', $trainee-> age)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="formation">Formation</label>
                                <input class="ml-2 text-xl-center" type="text" name="formation" list="formationsName" value="{{old('formation', $trainee-> formation)}}" placeholder="Formation">
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
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" 
                                        name="adresse" placeholder="Adresse"
                                        value="{{old('adresse', $trainee-> adresse)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_fin">Date Fin</label>
                                <input type="datetime-local" class="form-control" 
                                        name="date_fin" placeholder="Date Fin"
                                        value="{{old('date_fin', $trainee-> date_fin)}}">
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
