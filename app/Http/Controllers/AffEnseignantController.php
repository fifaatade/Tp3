<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\AffEtudiant;
use Illuminate\Http\Request;
use App\Models\AffEnseignant;

class AffEnseignantController extends Controller
{
    public function storeAffEns( Request $request, $id=null){
        $data=$request->all();
        $enseignantItem=Enseignant::find($id);

        $validation =$request->validate([
            "cours" =>"required",
           ]);
        $dataCours=$request->input('cours');
        foreach ($dataCours as $item){
            AffEnseignant::updateOrCreate([
                'id_cours'=>$item,
                'id_enseignant'=>$id
            ]);
        }

        return redirect()->route('affCoursEnseignant',['id' => $id]);
    }
    public function destroy($id)
    {
        AffEtudiant::where('id',$id)->delete();
        return redirect()->route('affCoursEnseignant',['id' => $id]);
    }
}
