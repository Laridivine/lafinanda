<?php

namespace App\Http\Controllers;

use App\Models\Pathologie;
use Illuminate\Http\Request;


class PathologieController extends Controller
{
     /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['pathologies'] = Pathologie::orderBy('id','asc')->paginate(5);
return view('pathologies.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('pathologies.create');
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
$pathology = new Pathologie();
$pathology->libelle = $request->libelle;
$pathology->save();
return redirect()->route('pathologies.index')
->with('success','Pathologie créé avec succès.');
}
/**
* Display the specified resource.
*
* @param  \App\Specialite $specialite
* @return \Illuminate\Http\Response
*/
public function show(Pathologie $pathology)
{
return view('pathologies.show',compact('pathology'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Specialite $specialite
* @return \Illuminate\Http\Response
*/
public function edit(Pathologie $pathology)
{
return view('pathologies.edit',compact('pathology'));
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
        $pathology = pathologie::find($id);
        $pathology->libelle = $request->libelle;
        $pathology->save();
return redirect()->route('pathologies.index')
->with('success','Pathologie mis à jour avec succès');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Pathologie $pathology)
{
    $pathology->delete();
return redirect()->route('pathologies.index')
->with('success','Pathologie supprimée');
}
}
