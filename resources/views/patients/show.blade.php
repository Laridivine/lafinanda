@extends('layouts.menu')

@section('content')


<div class="container shadow-none bg-light mt-5  " style="width: 50rem; margin-top:100px">
        <div class="row card p-5 text-center">
            <div class="row margin-tb">
                <div class="col-sm-11">
                    <h2>Voir un patient </h2>
                </div>
            </div>
        </div>
        </div>
 
<div class="container card shadow-lg p-3 mb-5" style="width: 50rem;">
    <div class="row mb-12 p-3">
      <label for="nom" class="col-sm-3 col-form-label">Nom</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->nom }}"  name="nom" id="nom" placeholder="Nom" disabled readonly>
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="prenom" class="col-sm-3 col-form-label">Prenom</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->prenoms }}"  name="prenoms" id="patient_prenom" placeholder="Prenom" disabled readonly>
      </div>
    </div>
 
    <div class="row mb-12 p-3">
      <label for="adresse" class="col-sm-3 col-form-label">Adresse</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->adresse }}"  name="adresse" id="patient_adresse" placeholder="Adresse" disabled readonly>
      </div>
    </div>
 
    <div class="row mb-12 p-3">
      <label for="telephone" class="col-sm-3 col-form-label">Telephone</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->numero_telephone }}"  name="numero_telephone" id="patient_telephone" placeholder="Telephone" disabled readonly>
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="pathology" class="col-sm-3 col-form-label">Pathologie</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->pathologie->libelle }}"  name="pathology" id="patient_pathology" placeholder="Pathologie" disabled readonly>
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="traitement" class="col-sm-3 col-form-label">Traitement</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $patient->traitement }}"  name="traitement" id="patient_traitement" placeholder="Traitement" disabled readonly>
      </div>
    </div>
</div>

@endsection