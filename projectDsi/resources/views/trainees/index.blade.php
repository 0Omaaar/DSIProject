@extends('adminlte::page')

@section('title')
    Liste des Stagiaires
@endsection


@section('content')
<div >
    <div class="container mx-auto" style="">
        <div class="row">
            <div class="col-md-20  mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4 style="">Stagiaires</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>PRENOM</th>
                                    <th>EMAIL</th>
                                    <th>TELEPHONE</th>
                                    <th>DOMAINE</th>
                                    <th>DATE DEBUT</th>
                                    <th>Date Fin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trainees as $key => $trainee)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        <td>{{$trainee -> nom}}</td>
                                        <td>{{$trainee -> prenom}}</td>
                                        <td>{{$trainee -> email}}</td>
                                        <td>{{$trainee -> telephone}}</td>
                                        <td>{{$trainee -> domaine}}</td>
                                        <td>{{$trainee -> date_debut}}</td>
                                        <td>{{$trainee-> date_fin}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{route('trainees.show', $trainee->id)}}" 
                                            class="btn btn-sm btn-dark">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('trainees.edit', $trainee->id)}}" 
                                                class="btn btn-sm btn-warning mx-2">
                                                    <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="{{$trainee->id}}" action="{{route('trainees.destroy', $trainee->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <button type="submit" onclick="deleteEmp({{$trainee->id}})" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy', 'csv', 'pdf', 'print', 'colvis'
                ]
            })
        });
        function deleteEmp(id){
                        Swal.fire({
            title: 'Êtes-vous sûr?',
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimez-le !'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
            }
            })
        }
    </script>  
    @if (session()-> has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()-> get('success')}}",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
@endsection