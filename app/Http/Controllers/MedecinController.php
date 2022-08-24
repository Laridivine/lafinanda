<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['medecins'] = Medecin::orderBy('id','desc')->paginate(5);
return view('medecins.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('medecins.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'nom' => 'required',
'prenom' => 'required',
'specialite' => 'required',
'numero_telephone' => 'required',


]);
$medecin = new Medecin();
$medecin->nom = $request->nom;
$medecin->prenom = $request->prenom;
$medecin->specialite = $request->specialite;
$medecin->numero_telephone = $request->numero_telephone;
$medecin->save();
return redirect()->route('medecins.index')
->with('success','Medecin créé avec succès.');
}
/**
* Display the specified resource.
*
* @param  \App\Medecin  $medecin
* @return \Illuminate\Http\Response
*/
public function show(Medecin $medecin)
{
return view('medecins.show',compact('medecin'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Medecin $medecin
* @return \Illuminate\Http\Response
*/
public function edit(Medecin $medecin)
{
return view('medecins.edit',compact('medecin'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\medecin  $medecin
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'specialite' => 'required',
        'numero_telephone' => 'required',
        
        
        ]);
        $medecin = new Medecin();
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->specialite = $request->specialite;
        $medecin->numero_telephone = $request->numero_telephone;
        $medecin->save();
return redirect()->route('medecins.index')
->with('success','Medecin mis à jour avec succès');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Medecin $medecin)
{
$medecin->delete();
return redirect()->route('medecins.index')
->with('success','Medecin supprimé');
}
}
