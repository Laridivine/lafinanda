@extends('layouts.menu')

@section('content')

    <div class="container" style="margin-top: 90px; margin-right:60px;" >
        <div class="row">
            <div class="row margin-tb">
                <div class="col-sm-9">
                    <h3>Liste des patients</h3>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-primary" href="{{ route('patients.create') }}"> Enregistrer un Patient</a>
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
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Telephone</th>
            <th>Dernière consultation</th>
            <th>Pathologie</th>
            <th>Traitement</th>

            <th width="230px">Actions</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->nom }}</td>
                <td>{{ $patient->prenoms }}</td>
                <td>{{ $patient->adresse }}</td>
                <td>{{ $patient->numero_telephone }}</td>
                <td>{{ $patient->derniere_consultation }}</td>
                <td>{{ $patient->pathologie->libelle }}</td>
                <td>{{ $patient->traitement }}</td>
            <td class="shadow">
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">

                    <a class="btn btn-success btn-sm" href="{{ route('patients.show',$patient->id) }}"><i class="fa-solid fa-eye"></i>Voir</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('patients.edit',$patient->id) }}"><i class="fa-solid fa-pen-to-square"></i>Modifier</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Etes-vous sûr?')"class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>Supprimer</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    {!! $patients->links() !!}
@endsection