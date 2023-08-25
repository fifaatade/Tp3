<?php

namespace App\Http\Controllers;

use App\Models\ListEtudiant;
use Illuminate\Http\Request;
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
        $etudiants=ListEtudiant::all();
        return view('Etudiants.list', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {

        $etudiant = new ListEtudiant();

        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->hobbies = $request->hobbies;
        $etudiant->bio = $request->bio;
        $etudiant->specialite = $request->specialite;
        $etudiant->datenais = $request->datenais;

        if ($request->photo) {
            $file = $request->file('photo');
            $path = $file->store('imagesEtudiants');

            $etudiant->photo = $path;
        }else{
            $etudiant->photo = 'photo';
        }
      
       $etudiant->save();

        return redirect()->route('home');

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
        $sizeEtudiant=ListEtudiant::all();
        return view('Etudiants.seeMore', compact('etudiantItem','sizeEtudiant','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiantUpdate=ListEtudiant::find($id);
        $etudiantUpdate->fill($request->all());
        if($etudiantUpdate->save()){
            return redirect()->route('home');
        }
        else{
            return response()->json(['message'=>'échec de la mise à jour des informations de l\'étudiant']);
        }
    }

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
}
