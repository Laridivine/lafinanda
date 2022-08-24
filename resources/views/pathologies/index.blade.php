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
<a class="btn btn-success" href="{{ route('pathologies.create') }}"> Enregistrer une pathologie</a>
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
@foreach ($pathologies as $pathologie)
<tr>
<td>{{ $pathologie->id }}</td>
<td>{{ $pathologie->libelle }}</td>
<td>
<form action="{{ route('pathologies.destroy',$pathologie->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('pathologies.show',$pathologie->id) }}">Voir</a>
<a class="btn btn-primary" href="{{ route('pathologies.edit',$pathologie->id) }}">Modifier</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $pathologies->links() !!}
</body>
</html>
@endsection