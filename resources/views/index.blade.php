@extends('layouts.side')
 
@section('content')
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Lafiapp</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('patients.create') }}"> Enregistrer un patient</a>
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
<th>S.No</th>
<th>Patient Nom</th>
<th> Patient Prenoms</th>
<th>Patient Adresse</th>
<th>Patient Numéro de téléphone</th>
<th>Patient Dernière consultation</th>
<th width="280px">Action</th>
</tr>
@foreach ($patients as $patient)
<tr>
<td>{{ $patient->id }}</td>
<td>{{ $patient->nom }}</td>
<td>{{ $patient->prenoms }}</td>
<td>{{ $patient->adresse }}</td>
<td>{{ $patient->numero_telephone }}</td>
<td>{{ $patient->derniere_consultation }}</td>

<td>
<form action="{{ route('patients.destroy',$patient->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Modifier</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $patients->links() !!}
</body>
</html>
@endsection