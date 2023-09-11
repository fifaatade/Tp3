<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Categorie;
use App\Models\AffEtudiant;
use App\Models\ListEtudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
    public function indexCours()
    {
        $cours_list=Cours::all();
        $users=Auth::user();
        $addBy = $users?$users->lastname:"";
        return view('Cours.gestionCours',compact('cours_list','addBy'));
    }
    public function create()
    {
        $categorie =Categorie::all();
        return view('Cours.ajouterCours',compact('categorie'));
    }
    public function store( Request $request){
        $categorie =Categorie::all();
        $data=$request->all();

        $validation =$request->validate([
            "nom" => "required",
            "maxHoraire" =>"required",
            "coef"=>"required",
            "id_categorie"=>"required"
           ]);
        $save=Cours::create([
            'nom'=>$data['nom'],
            'maxHoraire'=>$data['maxHoraire'],
            'coef'=>$data['coef'],
            "addBy"=>Auth::user()->id,
            "id_categorie"=>$data['id_categorie'],
        ]);
        return redirect()->route('cours');
    }
    public function destroy($id)
    {
        Cours::where('id',$id)->delete();
        return redirect()->route('cours');
    }
    public function show($id=null)
    {
        $coursItem=Cours::find($id);
        return view('Cours.voirCours',compact('coursItem','id'));
    }
    public function edit(Request $request, $id)
    {
        $coursExistant=Cours::find($id);
        if($coursExistant){
            $cours = $coursExistant->toArray();
            return view('Cours.modifierCours',compact('cours','id'));
        }
        else{
            return redirect()->route('cours')->with('error','le cours n\'existe pas ');
        }
    }
    public function update(Request $request, $id){
        $data = Cours::find($id);
    
        $request->validate([
            "new_nom" => "required",
            "new_maxHoraire" => "required",
            "new_coef" => "required",
        ]);
    
        $data->update([
            'nom' => $request->input('new_nom'),
            'maxHoraire' => $request->input('new_maxHoraire'),
            'coef' => $request->input('new_coef'),
        ]);
    
        return redirect()->route('cours');
    }
    
    public function affCours(){
        $etudiants = ListEtudiant::all();
        $cours = Cours::all();
        $affCours=AffEtudiant::all();
        return view('Cours.affecterCours',compact("cours",'etudiants','affCours'));
    }
}
