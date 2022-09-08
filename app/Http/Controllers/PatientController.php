<?php

namespace App\Http\Controllers;

use App\Models\Pathologie;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$patients = Patient::orderBy('id','asc')->paginate(10);
$pathologies = Pathologie::orderBy('id','desc')->get();
return view('patients.index',compact(['patients','pathologies']));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$pathologies = Pathologie::orderBy('id','desc')->get();
return view('patients.create',compact(['pathologies']));
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
'prenoms' => 'required',
'adresse' => 'required',
'numero_telephone' => 'required',
'derniere_consultation' => 'required',
'derniere_consultation' => 'required',
'pathology_id' => 'required',
'traitement' => 'required',

]);
$patient = new Patient();
$patient->nom = $request->nom;
$patient->prenoms = $request->prenoms;
$patient->adresse = $request->adresse;
$patient->numero_telephone = $request->numero_telephone;
$patient->derniere_consultation = $request->derniere_consultation;
$patient->pathology_id = $request->pathology->libelle;
$patient->traitement = $request->traitement;
$patient->save();
return redirect()->route('patients.index')
->with('success','Patient créé avec succès.');
}
/**
* Display the specified resource.
*
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function show(Patient $patient)
{
return view('patients.show',compact('patient'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Patient $patient)
{
$patients = Patient::orderBy('id','desc')->get();
$pathologies = Pathologie::orderBy('id','desc')->get();
return view('patients.edit',compact('pathologies','patient'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'prenoms' => 'required',
        'adresse' => 'required',
        'numero_telephone' => 'required',
        'derniere_consultation' => 'required',
        'pathology_id' => 'required',
        'traitement' => 'required',
        
        ]);
        $patient = patient::find($id);
        $patient->nom = $request->nom;
        $patient->prenoms = $request->prenoms;
        $patient->adresse = $request->adresse;
        $patient->numero_telephone = $request->numero_telephone;
        $patient->derniere_consultation = $request->derniere_consultation;
        $patient->pathology_id = $request->pathology->libelle;
        $patient->traitement = $request->adresse;
        $patient->save();
return redirect()->route('patients.index')
->with('success','Patient mis à jour avec succès');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Patient $patient)
{
$patient->delete();
return redirect()->route('patients.index')
->with('success','Patient supprimé');
}
}
