@extends('adminlte::page')

@section('title')
Affichage D'un Stagiaire
@endsection


@section('content')
    @include('layouts.alert')


    <div class="container mx-auto" style="margin: 10px">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3>{{$trainee-> prenom}}</h3>
                        </div>
                    </div>
                    <div class="text-center font-weight-bold text-uppercase mt-3">
                        <a href="{{route('certificate.request',$trainee-> id)}}" class="btn btn-outline-dark">
                            Demande D'Attestation
                        </a>
                    </div>
                    <hr>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="nom">Nom</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="nom" placeholder="Nom"
                                        value="{{$trainee-> nom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="prenom">Prenom</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="prenom" placeholder="Prenom"
                                        value="{{$trainee-> prenom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" disabled class="form-control rounded-0" 
                                        name="email" placeholder="Email"
                                        value="{{$trainee-> email}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="telephone">Telephone</label>
                                <input type="tel" disabled class="form-control rounded-0" 
                                        name="telephone" placeholder="Telephone"
                                        value="{{$trainee-> telephone}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="domaine">Domaine</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="domaine" placeholder="Domaine"
                                        value="{{$trainee-> domaine}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_debut">Date Debut</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="date_debut" placeholder="yy-mm-dd"
                                        value="{{$trainee-> date_debut}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="ville">Ville</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="ville" placeholder="Ville"
                                        value="{{$trainee-> ville}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="formation">Formation</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="formation" placeholder="Formation"
                                        value="{{$trainee-> formation}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="age">Age</label>
                                <input type="age" disabled class="form-control rounded-0" 
                                        name="age" placeholder="--"
                                        value="{{$trainee-> age}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="adresse">Adresse</label>
                                <input type="text" disabled class="form-control rounded-0" 
                                        name="adresse" placeholder="Adresse"
                                        value="{{$trainee-> adresse}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="date_fin">Date Fin</label>
                                <input type="date" disabled class="form-control rounded-0" 
                                        name="date_fin" placeholder="Date Fin"
                                        value="{{$trainee-> date_fin}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection