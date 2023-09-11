<?php

namespace App\Http\Controllers;

use App\Models\AffEtudiant;
use App\Models\ListEtudiant;
use Illuminate\Http\Request;

class AffEtudiantController extends Controller
{
    public function storeAff( Request $request){
        $data=$request->all();
        //$etudiants=ListEtudiant::find($id);

        $validation =$request->validate([
            "id_etudiant" => "required",
            "cours" =>"required",
           ]);
        $dataCours=$request->input('cours');
        foreach ($dataCours as $item){
            AffEtudiant::updateOrCreate([
                'id_etudiant'=>$data['id_etudiant'],
                'id_cours'=>$item,
            ]);
        }
        
        return redirect()->route('affCours');
    }

}
