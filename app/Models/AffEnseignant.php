<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffEnseignant extends Model
{
    //use HasFactory;
    protected $table='aff_enseignant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_cours',
        'id_enseignant'
    ];
    public function cours(){
        return $this->belongsTo(Cours::class,"id_cours","id");
    }
}
