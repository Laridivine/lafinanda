<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>lafinanda</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="col-sm-12 col-xl-6">
<div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medecins.index') }}"> Retour</a>
            </div>
    <div class="bg-light rounded h-100 p-4">
            <div class="pull-left mb-2">
                <h2>Enregistrer un medecin</h2>
            </div>
           

                @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
                @endif
            <form action="{{ route('medecins.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Nom</label>
                                <div class="col-sm-10">
                                        <input type="text" name="nom"class="form-control" id="">
                                        @error('nom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Prenom</label>
                                <div class="col-sm-10">
                                        <input type="text" name="prenom"class="form-control" id="">
                                        @error('prenom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label">Spécialité</label>
                                <div class="col-sm-10">
                                <select name="specialite_id" id="">
                                    <option value=""></option>
                                    @foreach ($specialites as $specialite)
                                <option value="{{$specialite->id}}">{{$specialite->id}}</option>
                                    @endforeach
                                </select>
                                @error('specialite')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                                </div>

                                <div class="row mb-3">
                                    <label for=""  class="col-sm-2 col-form-label">Téléphone:</label>
                                <div class="col-sm-10">
                                        <input type="string" name="numero_telephone"class="form-control" id="">
                                        @error('numero_telephone')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>

</form>
</div>
</div>
</body>
</html>