<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>lafinanda</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="col-sm-12 col-xl-6">
            
    <div class="bg-light rounded h-100 p-4">
            <div class="pull-left mb-2">
                <h2>Enregistrer un patient</h2>
            </div>
           

                @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
                @endif
            <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                            <div class="row mb-3">
                                    <label for=""  class="col-sm-2 col-form-label">Nom</label>
                                <div class="col-sm-10">
                                        <input type="text" name="nom" class="form-control" id="">
                                        @error('nom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Prenom</label>
                                <div class="col-sm-10">
                                        <input type="text" name="prenoms"class="form-control" id="">
                                        @error('prenoms')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Adresse</label>
                                <div class="col-sm-10">
                                        <input type="text" name="adresse" class="form-control" id="">
                                        @error('adresse')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Téléphone</label>
                                <div class="col-sm-10">
                                        <input type="string" name="numero_telephone" class="form-control" id="">
                                        @error('numero_telephone')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Dernière consultation</label>
                                <div class="col-sm-10">
                                        <input type="date" name="derniere_consultation"class="form-control" id="">
                                        @error('derniere_consultation')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pathologie</label>
                                <div class="col-sm-10">
                                <select name="pathologie_id" id="">
                                    <option value=""></option>
                                    @foreach ($pathologies as $pathologie)
                                <option value="{{$pathologie->id}}">{{$pathologie->libelle}}</option>
                                    @endforeach
                                </select>
                                @error('pathologie')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Traitement</label>
                                <div class="col-sm-10">
                                        <input type="string" name="traitement"class="form-control" id="">
                                        @error('traitement')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div style="display:flex ;">
                                <div class="pull-right" style="margin-right:200px ;">
                                    <a class="btn btn-primary" href="{{ route('patients.index') }}"> Retour</a>
                                </div>

                                <div class="pull-right" style="margin-left:230px ;">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
</div>
</form>
</body>
</html>