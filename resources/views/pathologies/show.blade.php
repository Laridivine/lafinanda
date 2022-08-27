
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Voir pathologie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('patologies.index') }}"> Retour</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Libellé:</strong>
                {{ $pathologie->libelle }}
            </div>
        </div>
    </div>
<p class="text-center text-primary"><small></small></p>