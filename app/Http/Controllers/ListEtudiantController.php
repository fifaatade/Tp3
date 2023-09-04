<?php

namespace App\Http\Controllers;

use App\Models\ListEtudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreStudentRequest;

class ListEtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$etudiants=ListEtudiant::all();
        $user=Auth::user();
        $nom = $user?$user->firstname:"";
        $prenom = $user?$user->lastname:"";
        $etudiant_list=$user->etudiant()->paginate(10);//ListEtudiant::where('user_id',$user->id)->get();
        return view('Etudiants.list', compact( 'nom','prenom','etudiant_list'));
    }
    public function all(){
        $etudiants = ListEtudiant::paginate(10);//all();
        return view('Etudiants.list',compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Etudiants.seeMore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeStudent(StoreStudentRequest $request)
    {

        $etudiant = new ListEtudiant();

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->hobbies = $request->hobbies;
        $etudiant->bio = $request->bio;
        $etudiant->specialite = $request->specialite;
        $etudiant->datenais = $request->datenais;
        $etudiant->status = true;
        $etudiant->user_id=Auth::user()->id;

        if ($request->photo) {
            $file = $request->file('photo');
            $path = $file->store('imagesEtudiants');
            $etudiant->photo = $path;
        } 
        $etudiant->save();
        return redirect()->route('home');
    }

    public function edit(Request $request, $id){
        $etudiantExistant = ListEtudiant::find($id);
    
        if ($etudiantExistant) {
            $etudiantUpdate = $etudiantExistant->toArray();
    
            return view('Etudiants.update', compact('etudiantUpdate'));
        } else {
            return response()->json(['message'=>'échec de la mise à jour des informations de l\'étudiant']);
        }
    }
    

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $etudiantItem=ListEtudiant::find($id);
        //$sizeEtudiant=ListEtudiant::all();
        $ids=idsDB();
        if(isset($ids)){

            return view('Etudiants.seeMore', compact('etudiantItem','id'));

        }
        else{
            return view('Etudiants.seeMore', compact('etudiantItem'));

        }
        //return view('Etudiants.seeMore', compact('etudiantItem','sizeEtudiant','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $etudiant = ListEtudiant::find($id);
        if($request->photo){
            $file = $request->file('photo');
            $path = $file->store('imagesEtudiants');
            $etudiant->photo = $path;
        }
      
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->hobbies = $request->hobbies;
            $etudiant->bio = $request->bio;
            $etudiant->specialite = $request->specialite;
            $etudiant->datenais = $request->datenais;
    
           
        $etudiant->save();
        return redirect()->route('home');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function update(Request $request, $id)
    {
        $etudiantUpdate=$request->all();
        ListEtudiant::where('id',$id)->update([
            $etudiantUpdate=ListEtudiant::all(),
        ]);
        $etudiantUpdate->save();

        return view('Etudiants.update', compact('etudiantUpdate'));
        /* $etudiantUpdate=ListEtudiant::find($id);
        $etudiantUpdate->fill($request->all());
        if($etudiantUpdate->save()){
            return redirect()->route('home');
        }
        else{
            return response()->json(['message'=>'échec de la mise à jour des informations de l\'étudiant']);
        } 
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ListEtudiant::where('id',$id)->delete();
        return redirect()->route('home');
    }

    public function activate($id) {
        $student = ListEtudiant::find($id);
        if ($student) {
            $student->status = !$student->status; 
            $student->save();
        }
        return redirect()->route('home');
    }
    
}

