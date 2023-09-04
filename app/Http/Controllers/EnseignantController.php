<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cours;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Models\AffEnseignant;

class EnseignantController extends Controller
{
    public function indexEnseignant()
    {
        $enseignant=Enseignant::all();
        return view('Enseignant.listEnseignant',compact('enseignant'));
    }
    public function create()
    {
        return view('Enseignant.ajouterEnseignant');
    }
    public function store( Request $request){
        $data=$request->all();

        $validation =$request->validate([
            "nom" => "required",
            "prenom" =>"required",
            "tel"=>"required",
            "adresse"=>"required",
           ]);
        $save=Enseignant::create([
            'nom'=>$data['nom'],
            'prenom'=>$data['prenom'],
            'tel'=>$data['tel'],
            'adresse'=>$data['adresse'],
        ]);
        return redirect()->route('enseignant')->with('success','new blog data saved with success');
    }
    public function destroy($id)
    {
        Enseignant::where('id',$id)->delete();
        return redirect()->route('enseignant');
    }
    public function show($id=null)
    {
        $enseignantItem=Enseignant::find($id);
        return view('Enseignant.voirEnseignant',compact('enseignantItem','id'));
    }
    public function edit(Request $request, $id)
    {
        $enseignantExistant=Enseignant::find($id);
        if($enseignantExistant){
            $enseignant = $enseignantExistant->toArray();
            return view('Enseignant.modifierEnseignant',compact('enseignant','id'));
        }
        else{
            return redirect()->route('enseignant')->with('error','le cours n\'existe pas ');
        }
    }
    public function update(Request $request,$id) {
        $data=Enseignant::where('id',$id)->first();
        $request->validate([
            "new_nom" => "required",
            "new_prenom" =>"required",
            "new_tel"=>"required",
            "new_adresse"=>"required"
        ]);
        $data->update([
            'nom' => $request->input('new_nom'),
            'prenom' => $request->input('new_prenom'),
            'tel' => $request->input('new_tel'),
            'adresse' => $request->input('new_adresse'),
        ]);
        return redirect()->route('enseignant');
    }  
    public function affCoursEnseignant($id=null){
        $enseignantItem=Enseignant::find($id);
        $cours = Cours::all();
        $affCoursEns=AffEnseignant::all();
        return view('Enseignant.affecterCoursEnseignant',compact('enseignantItem','id','cours','affCoursEns'));
    }
}
