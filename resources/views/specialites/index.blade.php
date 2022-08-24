@extends('layouts.backend')
 
@section('content')
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Lafiapp</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('specialites.create') }}"> Enregistrer une spécialité</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th> Libellé</th>
<th width="280px">Action</th>
</tr>
@foreach ($specialites as $specialite)
<tr>
<td>{{ $specialite->id }}</td>
<td>{{ $specialite->libelle }}</td>
<td>
<form action="{{ route('specialites.destroy',$specialite->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('specialites.show',$specialite->id) }}">Voir</a>
<a class="btn btn-primary" href="{{ route('specialites.edit',$specialite->id) }}">Modifier</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $specialites->links() !!}
</body>
</html>
@endsection