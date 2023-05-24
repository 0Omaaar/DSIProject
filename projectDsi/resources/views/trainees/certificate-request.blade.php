@extends('adminlte::page')

@section('title')
    Certificate Request
@endsection
    
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card p-4 my-5">
                        <div class="card-header">
                            <h3 class="text text-center text-bold"><u>CERTIFICAT DE FIN DE STAGE</u></h3>
                        </div>
                        <div class="card-body">
                            <p class="lead" style="letter-spacing: 3px; font-size: 25px">
                                Je soussigné <b>KOUNAIDI Houssin</b>, encadrant en departement informatique de la <b>DSI</b> a RABAT atteste 
                                et certifie la par la presente que : 
                                <b> Mr  {{$trainee-> nom}} {{$trainee-> prenom}} </b>, demeurant <b>{{$trainee-> adresse}}</b>, <b>{{$trainee-> ville}}</b>. <br><br>
                                - a effectue un stage au sein de notre direction en domaine <b>{{$trainee-> domaine}}</b>, du <b>{{$trainee-> date_debut}}</b>
                                au <b>{{$trainee-> date_fin}}</b>. <br> <br>
                                - a effectué son projet accompagné d'un rapport.
                                <br>
                                <br>
                                <br>
                                Cette attestation est delivrée a la demande du stagiaire pour servir et valoir ce que le droit.
                                Fait a <b>Rabat</b>, le <b>{{\Carbon\Carbon::today()->toDateString()}}</b> a <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
                                <br><br><br>
                                <img style="width: 150px; margin-left: 500px" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/35bbb530-07f5-4084-8899-fc576def6bb4/d8ttlhe-4080847c-7721-40e7-9e69-a9e0fca24a41.png/v1/fill/w_1024,h_333,strp/ataturk_signature_in_png_format_by_garyosavan_d8ttlhe-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD0zMzMiLCJwYXRoIjoiXC9mXC8zNWJiYjUzMC0wN2Y1LTQwODQtODg5OS1mYzU3NmRlZjZiYjRcL2Q4dHRsaGUtNDA4MDg0N2MtNzcyMS00MGU3LTllNjktYTllMGZjYTI0YTQxLnBuZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.vKjM8fm3jRswbGjn5D02zsMJPeizH3T6Hy58l4f0k4E" alt="">
                            </p>
                            <div class="my-4">
                                <a  href="#"
                                    onclick="
                                    document.getElementById('printLink').style.display='none';
                                        setTimeout(function(){
                                    document.getElementById('printLink').style.display='inline-block'; 
                                        },2000)
                                        window.print()
                                        " 
                                    class="btn btn-sm btn-dark" id="printLink">
                                    <i  class="fas fa-print"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection