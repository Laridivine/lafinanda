<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenoms',
        'adresse',
        'numero_telephone',
        'derniere_consultation',
        'pathology_id',
        'traitement',

];

public function pathologie(){
    return $this->belongsTo(Pathologie::class, "pathology_id");
}
}
