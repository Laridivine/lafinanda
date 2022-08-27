<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>lafiapp</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>

<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Voir medecin</h2>
            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $medecin->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom:</strong>
                {{ $medecin->prenom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Spécialité:</strong>
                {{ $medecin->specialite->libelle}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero de téléphone:</strong>
                {{ $medecin->numero_telephone }}
            </div>
        </div>
    </div>

    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medecins.index') }}"> Retour</a>
            </div>

<p class="text-center text-primary"><small></small></p>
</body>
</html>