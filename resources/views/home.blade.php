@extends('layouts.menu')
 
@section('content')

<div class="container" style="margin-top: 90px; margin-right:60px;" >
        <div class="row">
            <div class="row margin-tb">
                <div class="col-sm-9">
                    <h3>Liste des medecins</h3>
                </div>
               
            </div>
        </div>
        </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-primary card shadow">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div style="margin-left:250px; margin-right:50px">

    <table class="table table-bordered table-hover" >
        <tr>
        <th>No</th>
                                    <th> Nom</th>
                                    <th> Prenoms</th>
                                    <th> Spécialité</th>
                                    <th> Numéro de téléphone</th>
            <th width="230px">Actions</th>
        </tr>
        @foreach ($medecins as $medecin)
        <tr>
        <td>{{ $medecin->id }}</td>
                            <td>{{ $medecin->nom }}</td>
                            <td>{{ $medecin->prenom }}</td>
                            <td>{{ $medecin->specialite->libelle }}</td>
                            <td>{{ $medecin->numero_telephone }}</td>  
            <td class="shadow">
                <form action="{{ route('medecins.destroy',$medecin->id) }}" method="POST">

                    <a class="btn btn-success btn-sm" href="{{ route('medecins.show',$medecin->id) }}"><i class="fa-solid fa-eye"></i>Voir</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('medecins.edit',$medecin->id) }}"><i class="fa-solid fa-pen-to-square"></i>Modifier</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Etes-vous sûr?')"class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>Supprimer</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    {!! $medecins->links() !!}


            @endsection


            