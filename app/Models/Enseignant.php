<?php

namespace App\Models;

use App\Models\AffEnseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    //use HasFactory;
    protected $table='enseignant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'adresse',
    ];
    public function affectationsEnseignant(){
        return $this->hasMany(AffEnseignant::class,'id_enseignant','id');
    }
}
