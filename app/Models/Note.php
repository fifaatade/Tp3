<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //use HasFactory;
     //use HasFactory;
     protected $table='note';

     /**
      * The attributes that are mass assignable.
      *
      * @var array<int, string>
      */
     protected $fillable = [
         'id_cours',
         'note',
         'id_etudiant',
         'type',
     ];
}
