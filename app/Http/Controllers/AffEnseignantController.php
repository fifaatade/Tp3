<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffEnseignantController extends Controller
{
    public function storeAffEns( Request $request){
        $data=$request->all();

        $validation =$request->validate([
            "cours" =>"required",
           ]);
        $dataCours=$request->input('cours');
        foreach ($dataCours as $item){
            AffEtudiant::create([
                'id_etudiant'=>$data['id_etudiant'],
                'id_cours'=>$item,
            ]);
        }
        
        return redirect()->route('affCoursEnseignant');
    }
    public function destroy($id)
    {
        AffEtudiant::where('id',$id)->delete();
        return redirect()->route('affCoursEnseignant');
    }
}
