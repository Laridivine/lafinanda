@extends('layouts.menu')

@section('content')

    <div class="container" style="margin-top: 90px; margin-right:60px;" >
        <div class="row">
            <div class="row margin-tb">
                <div class="col-sm-9">
                    <h3>Liste des specialite</h3>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-primary" href="{{ route('specialites.create') }}"> Enregistrer une specialité</a>
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
            <th>Libelle</th>
            <th width="230px">Actions</th>
        </tr>
        @foreach ($specialites as $specialite)
        <tr>
                <td>{{ $specialite->id }}</td>
                <td>{{ $specialite->libelle }}</td>
            <td class="shadow">
                <form action="{{ route('specialites.destroy',$specialite->id) }}" method="POST">

                    <a class="btn btn-success btn-sm" href="{{ route('specialites.show',$specialite->id) }}"><i class="fa-solid fa-eye"></i>Voir</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('specialites.edit',$specialite->id) }}"><i class="fa-solid fa-pen-to-square"></i>Modifier</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Etes-vous sûr?')"class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>Supprimer</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>

    {!! $specialites->links() !!}
@endsection