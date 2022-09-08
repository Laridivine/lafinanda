@extends('layouts.menu')

@section('content')

<div class="container shadow-none bg-light mt-3  " style="width: 50rem; margin-top:60px">
    <div class="row card p-5 text-center">
        <div class="row margin-tb">
            <div class="col-sm-11">
                <h2>Enregistrer un patient</h2>
            </div>
        </div>
    </div>
</div>
<br><br>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Errors!</strong>Please chek carefully....<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('patients.store') }}" method="POST">
    @csrf
    <form>

        <div class="container card shadow-lg p-3 mb-5" style="width: 50rem;">
            <div class="row mb-12 p-3">
                <label for="" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input type="string" class="form-control" name="nom" id="nom" placeholder="Nom">
                </div>
            </div>

            <div class="row mb-12 p-3">
                <label for="prenom" class="col-sm-3 col-form-label">Prenom</label>
                <div class="col-sm-9">
                    <input type="string" class="form-control" name="prenoms" id="prenoms" placeholder="Prenom">
                </div>
            </div>

            <div class="row mb-12 p-3">
                <label for="" class="col-sm-3 col-form-label">Adresse</label>
                <div class="col-sm-9">
                    <input type="string" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
                </div>
            </div>

            <div class="row mb-12 p-3">
                <label for="" class="col-sm-3 col-form-label">Telephone</label>
                <div class="col-sm-9">
                    <input type="string" class="form-control" name="numero_telephone" id="patient_telephone" placeholder="Telephone">
                </div>
            </div>

            <div class="row mb-12 p-3">
                <label for="" class="col-sm-3 col-form-label">dernière consultation</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="derniere_consultation" id="" placeholder="Dernière consultation">
                </div>
            </div>

            <div class="row mb-12 p-3">
                <label for="" class="col-sm-3 col-form-label">Pathologie</label>
                <div class="col-sm-9">
                    <select name="pathology_id" class="form-control" id="">
                        <option value=""></option>
                        @foreach ($pathologies as $pathology)
                        <option name="pathology_id" value="{{$pathology->id}}">{{$pathology->libelle}}</option>
                        @endforeach
                    </select>
                
                </div>
            </div>

            <div class="row mb-12 p-3">
                <label for="patient_traitement" class="col-sm-3 col-form-label">Traitement</label>
                <div class="col-sm-9">
                    <input type="string" class="form-control" name="traitement" id="patient_traitement" placeholder="Traitement">
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