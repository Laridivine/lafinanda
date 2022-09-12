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
        'email',
    ];
    public function specialite(){
        return $this->belongsTo(Specialite::class, "specialite_id");
    }
}
