<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    //use HasFactory;
    protected $table='cours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'maxHoraire',
        'coef',
        'id_categorie',
        'addBy',
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class,"id_categorie","id");
    }
    public function users(){
        return $this->belongsTo(User::class,"addBy","id");
    }
}
