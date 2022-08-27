@extends('layouts.Backend')
 
@section('content')
<div class="pull-right mb-2">
                <h2>Liste des médecins</h2>
                </div>
<table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                
                                    <th>No</th>
                                    <th> Nom</th>
                                    <th> Prenoms</th>
                                    <th> Spécialité</th>
                                    <th> Numéro de téléphone</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($medecins as $medecin)
                            </thead>
                            <tbody>
                                <tr>
                            <td>{{ $medecin->id }}</td>
                            <td>{{ $medecin->nom }}</td>
                            <td>{{ $medecin->prenom }}</td>
                            <td>{{ $medecin->specialite->libelle }}</td>
                            <td>{{ $medecin->numero_telephone }}</td>
                            <td>
                            <form action="{{ route('medecins.destroy',$medecin->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('medecins.show',$medecin->id) }}">Voir</a>
                            <a class="btn btn-primary" href="{{ route('medecins.edit',$medecin->id) }}">Modifier</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            </td>
                            </tr>
                            </tbody>
                            @endforeach
                            
                        </table>
                        {!! $medecins->links() !!}
                    </div>
                </div>
@endsection