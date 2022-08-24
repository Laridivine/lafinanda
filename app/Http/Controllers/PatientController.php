<?php

namespace App\Http\Controllers;

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
$data['patients'] = Patient::orderBy('id','desc')->paginate(5);
return view('patients.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('patients.create');
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
'traitement' => 'required',

]);
$patient = new Patient();
$patient->nom = $request->nom;
$patient->prenoms = $request->prenoms;
$patient->adresse = $request->adresse;
$patient->numero_telephone = $request->numero_telephone;
$patient->derniere_consultation = $request->derniere_consultation;
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
return view('patients.edit',compact('patient'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'prenoms' => 'required',
        'adresse' => 'required',
        'numero_telephone' => 'required',
        'derniere_consultation' => 'required',
        'traitement' => 'required',
        
        ]);
        $patient = new Patient();
        $patient->nom = $request->nom;
        $patient->prenoms = $request->prenoms;
        $patient->adresse = $request->adresse;
        $patient->numero_telephone = $request->numero_telephone;
        $patient->derniere_consultation = $request->derniere_consultation;
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
