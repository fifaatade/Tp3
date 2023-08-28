<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListEtudiant extends Model
{
    //use HasFactory;
    protected $table='listetudiant';
    protected $fillable=[
        'nom',
        'prenom',
        'photo',
        'hobbies',
        'specialite',
        'datenais',
        'bio',
        'status',
        //protected $guarde=[]  //pour faire afficher toutes les colonnes dans la base de données
    ];
    
}
