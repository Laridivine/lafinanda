@extends('layouts.menu')

@section('content')


<div class="container shadow-none bg-light mt-5  " style="width: 50rem; margin-top:100px">
        <div class="row card p-5 text-center">
            <div class="row margin-tb">
                <div class="col-sm-11">
                    <h2>Voir un médecin </h2>
                </div>
            </div>
        </div>
        </div>
 
<div class="container card shadow-lg p-3 mb-5" style="width: 50rem;">
    <div class="row mb-12 p-3">
      <label for="nom" class="col-sm-3 col-form-label">Nom</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $medecin->nom }}"  name="nom" id="nom" placeholder="Nom" disabled readonly>
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="prenom" class="col-sm-3 col-form-label">Prenom</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $medecin->prenom }}"  name="prenom" id="prenom" placeholder="Prenom" disabled readonly>
      </div>
    </div>
 

    <div class="row mb-12 p-3">
      <label for="" class="col-sm-3 col-form-label">Spécialité</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $medecin->specialite->libelle }}"  name="specialite_id" id="specialite" placeholder="Spécialité" disabled readonly>
      </div>
    </div>

    <div class="row mb-12 p-3">
      <label for="prenom" class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input type="string" class="form-control" value="{{ $medecin->email }}"  name="email" id="" placeholder="Email" disabled readonly>
      </div>
    </div>

    
</div>

@endsection