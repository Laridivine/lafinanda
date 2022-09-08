<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use Illuminate\Http\Request;


class SpecialiteController extends Controller
{
     /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['specialites'] = Specialite::orderBy('id','asc')->paginate(5);
return view('specialites.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('specialites.create');
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
'libelle' => 'required',


]);
$specialite = new Specialite();
$specialite->libelle = $request->libelle;
$specialite->save();
return redirect()->route('specialites.index')
->with('success','Spécialité créé avec succès.');
}
/**
* Display the specified resource.
*
* @param  \App\Specialite $specialite
* @return \Illuminate\Http\Response
*/
public function show(Specialite $specialite)
{
return view('specialites.show',compact('specialite'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Specialite $specialite
* @return \Illuminate\Http\Response
*/
public function edit(Specialite $specialite)
{
return view('specialites.edit',compact('specialite'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Specialite  $specialite
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'libelle' => 'required',
        
        
        
        ]);
        $specialite = specialite::find($id);
        $specialite->libelle = $request->libelle;
        $specialite->save();
return redirect()->route('specialites.index')
->with('success','Spécialité mis à jour avec succès');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Specialite $specialite)
{
$specialite->delete();
return redirect()->route('specialites.index')
->with('success','Spécialité supprimée');
}
}
