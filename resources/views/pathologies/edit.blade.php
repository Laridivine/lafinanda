@extends('layouts.menu')

@section('content')
<div class="container shadow-none bg-light mt-5  " style="width: 50rem; margin-top:100px;">
    <div class="row card p-5 text-center">
        <div class="row margin-tb">
            <div class="col-sm-11">
                <h2>Modifier pathologie </h2>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-warning">
    <strong>Errors!</strong>Please chek carefully....<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('pathologies.update',$pathology->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="container card shadow-lg p-3 mb-5" style="width: 50rem;">
        <div class="row mb-12 p-3">
            <label for="" class="col-sm-3 col-form-label">Libelle</label>
            <div class="col-sm-9">
                <input type="string" class="form-control" value="{{ $pathology->libelle }}" name="libelle" id="" placeholder="">
            </div>
        </div>
        <br>

        <div class="row card text-center">

            <div class="col-sm-12 p-3">
                <button type="submit" class="btn btn-primary btn-lg shadow-lg">Enregistrer</button>
                <a class="btn btn-danger btn-lg shadow-lg" href="{{ route('pathologies.index') }}"> Annuler</a>
            </div>

        </div>

    </div>
</form>
@endsection