@extends('layouts.menu')

@section('content')
<div class="container shadow-none bg-light mt-5  " style="width: 50rem; margin-top:100px;">
  <div class="row card p-5 text-center">
    <div class="row margin-tb">
      <div class="col-sm-11">
        <h2>Edit </h2>
      </div>
    </div>
  </div>
</div>

@if ($errors->any())
<div class="alert alert-warning" style="margin-left:250px; margin-right:250px">
  <strong>Errors!</strong>Please chek carefully....<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('patients.update',$patient->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="container card shadow-lg p-3 mb-5" style="width: 50rem;">
    <div class="row mb-12 p-3">
      <label for="patient_nom" class="col-sm-3 col-form-label">Nom</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->nom }}" name="nom" id="nom" placeholder="Nom">
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="prenom" class="col-sm-3 col-form-label">Prenom</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->prenoms }}" name="prenoms" id="prenom" placeholder="Prenom">
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="patient_adresse" class="col-sm-3 col-form-label">Adresse</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->adresse }}" name="adresse" id="adresse" placeholder="Adresse">
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="telephone" class="col-sm-3 col-form-label">Telephone</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->numero_telephone }}" name="numero_telephone" id="telephone" placeholder="Telephone">
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="" class="col-sm-3 col-form-label">Dernière consultation</label>
      <div class="col-sm-9">
        <input type="date" class="form-control" value="{{ $patient->derniere_consultation }}" name="derniere_consultation" id="" placeholder="Dernière consultation">
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="pathology" class="col-sm-3 col-form-label">Pathologie</label>
      <div class="col-sm-9">
        <select name="pathology_id" class="form-control" id="">
          <option value=""></option>
          @foreach ($pathologies as $pathology)
          <option value="{{$pathology->id}}">{{$pathology->libelle}}</option>
          @endforeach
        </select>
        @error('pathology')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="traitement" class="col-sm-3 col-form-label">Traitement</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->traitement }}" name="traitement" id="traitement" placeholder="Traitement">
      </div>
    </div>
    <br>

    <div class="row card text-center">

      <div class="col-sm-12 p-3">
        <button type="submit" class="btn btn-primary btn-lg shadow-lg">Enregistrer</button>
        <a class="btn btn-danger btn-lg shadow-lg" href="{{ route('patients.index') }}"> Annuler</a>
      </div>

    </div>

  </div>
</form>
@endsection