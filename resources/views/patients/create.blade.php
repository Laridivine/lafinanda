<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>lafiapp</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Enregistrer un patient</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom:</strong>
<input type="text" name="nom" class="form-control" placeholder="Nom">
@error('nom')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prenoms:</strong>
<input type="text" name="prenoms" class="form-control" placeholder="Prenoms">
@error('prenoms')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Adresse:</strong>
<input type="string" name="adresse" class="form-control" placeholder="Adresse">
@error('adresse')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Numéro de téléphone:</strong>
<input type="string" name="numero_telephone" class="form-control" placeholder="Numero de telephone">
@error('nom')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Dernière consultation:</strong>
<input type="date" name="derniere_consultation" class="form-control" placeholder="Dernière consultation">
@error('nom')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Traitement:</strong>
<input type="string" name="traitement" class="form-control" placeholder="Traitement">
@error('traitement')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>


<button type="submit" class="btn btn-primary ml-3">Enregistrer</button>
</div>
</form>
</body>
</html>