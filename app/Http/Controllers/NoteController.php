<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Cours;
use App\Models\ListEtudiant;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function indexNote($id,$idCours){
        $etudiants=ListEtudiant::find($id);
        $cours=Cours::find($idCours);
        $notesPartielles=Note::where('id_etudiant',$id)->where('id_cours',$idCours)->where('type','partielles')->get();
        $notesDevoirs=Note::where('id_etudiant',$id)->where('id_cours',$idCours)->where('type','devoirs')->get();
        $moyPartielles=$notesDevoirs->avg('note');
        $moyDevoirs=$notesPartielles->avg('note');
        $moy=($moyPartielles+$moyDevoirs)/2;
        return view('Note.note',compact('id','idCours','etudiants','cours','notesPartielles','notesDevoirs','moyPartielles','moyDevoirs','moy'));
    }
    public function storeNote(Request $request, $id,$idCours){
        $data=$request->all();
        $validation =$request->validate([
            "note" => "required",
            "type"=>'required'
        ]);
        $notesPartielles=Note::where('id_etudiant',$id)->where('id_cours',$idCours)->where('type','partielles')->get()->count();
        $notesDevoirs=Note::where('id_etudiant',$id)->where('id_cours',$idCours)->where('type','devoirs')->get()->count();
        if($notesDevoirs>2 || $notesPartielles>2){
            return redirect()->back()->with('message','on ne dépasse pas deux notes!!');
        }
        else{
            $save=Note::updateOrCreate([
                'note'=>$data['note'],
                'type'=>$data['type'],
                'id_cours'=>$idCours,
                "id_etudiant"=>$id,
            ]);   
            return redirect()->back();
        }
    }
}
