@extends('adminlte::page')

@section('title')
    Liste of Offers
@endsection

@section('content_header')
    {{-- <h1>Liste Des Offres</h1> --}}
@endsection
@section('content')
    <div class="container mx-auto" style="margin: 10px">
        <div class="row">
            <div class="col-md-20  mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Offres</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SUJET D'OFFRE</th>
                                    <th>DOMAINE D'OFFRE</th>
                                    <th>PROFIL REQUIS</th>
                                    <th>DUREE</th>
                                    <th>LIEU</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offers as $key => $offer)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        <td>{{$offer -> sujet_offre}}</td>
                                        <td>{{$offer -> domaine_offre}}</td>
                                        <td>{{$offer -> profil_requis}}</td>
                                        <td>{{$offer -> duree_stage}}</td>
                                        <td>{{$offer -> lieu_stage}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{route('offers.show', $offer->id)}}" 
                                            class="btn btn-sm btn-dark">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('offers.edit', $offer->id)}}" 
                                                class="btn btn-sm btn-warning mx-2">
                                                    <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="{{$offer->id}}" action="{{route('offers.destroy', $offer->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <button type="submit" onclick="deleteEmp({{$offer->id}})" class="btn btn-sm btn-danger">
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
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy', 'csv', 'excel', 'pdf', 'print', 'colvis'
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
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
                Swal.fire(
                // 'Deleted!',
                // 'Your file has been deleted.',
                // 'success'
                )
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