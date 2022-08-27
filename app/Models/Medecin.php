<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'specialite',
        'numero_telephone',
    ];
    public function Specialite(){
        return $this->belongsTo(Specialite::class, "specialite_id");
    }
}
