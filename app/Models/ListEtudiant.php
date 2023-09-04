<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'user_id',
        //protected $guarde=[]  //pour faire afficher toutes les colonnes dans la base de données
    ];
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    
}
