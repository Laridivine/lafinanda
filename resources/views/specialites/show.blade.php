@extends('layouts.side')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Voir spécialités</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('specialites.index') }}"> Retour</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Libellé:</strong>
                {{ $specialite->libelle }}
            </div>
        </div>
    </div>
@endsection
<p class="text-center text-primary"><small></small></p>