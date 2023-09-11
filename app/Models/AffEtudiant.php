<?php

namespace App\Models;

use App\Models\Cours;
use App\Models\ListEtudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AffEtudiant extends Model
{
    //use HasFactory;
    protected $table='aff_etudiant';
    protected $with=['cours'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_etudiant',
        'id_cours'
    ];

    public function cours(){
        return $this->belongsTo(Cours::class,"id_cours","id");
    }
    public function etudiants(){
        return $this->belongsTo(ListEtudiant::class,"id_cours","id");
    }
}
