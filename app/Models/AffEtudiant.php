<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffEtudiant extends Model
{
    //use HasFactory;
    protected $table='aff_etudiant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_etudiant',
        'id_cours'
    ];

}
