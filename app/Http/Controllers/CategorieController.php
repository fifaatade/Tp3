<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function indexCategorie(){
        return view('Categorie.ajouterCategorie');
    }
    public function storeCategorie(Request $request){
        
        $data=$request->all();
        $validation =$request->validate([
            "name" => "required",
           ]);
        $save=Categorie::create([
            'name'=>$data['name'],
        ]);
        return redirect()->route('cours');
    }
}
