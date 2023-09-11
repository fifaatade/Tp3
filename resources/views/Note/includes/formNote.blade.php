<div>
    <a class="btn btn-outline-danger text-body-secondary mt-5 mb-5" href="{{route('affCours')}}">retour</a>
</div>
<div class="card mb-3 margin " style="max-width: 80%;">
    <div class="d-flex">
        <div class="ms-2">
            <div class="card mt-3 mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset($etudiants->photo)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            
                            <h5 class="card-title">Nom et prénom: {{$etudiants->nom}} {{$etudiants->prenom}}</h5>
                            <h5 class="card-text">Cours: {{$cours['nom']}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <table class="table table-bordered" >
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Type</th>
                        <th class="text-center" scope="col">Note1</th>
                        <th class="text-center" scope="col">Note2</th>
                        <th class="text-center" scope="col">moyennes</th>
                    </tr>
                    </thead>
                    <tbody>
            
                        <tr>
                            <th scope="row">Partielles</th>
                            @foreach($notesPartielles as $item)
                                <td scope="row">{{$item->note}}</td>
                            @endforeach
                            <td scope="row">{{$moyDevoirs}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Devoirs</th>
                            @foreach($notesDevoirs as $item)
                                <td scope="row">{{$item->note}}</td>
                            @endforeach
                            <td scope="row">{{$moyPartielles}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Moyenne</th>
                            <td colspan="3" class="text-center" ><b>{{$moy}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <form action="{{route('storeNote',['id'=>$id,'idCours'=>$idCours])}}" method="POST" class="ms-5 mt-3 mb-3 me-2" style="width: 500px">
            @csrf
            <div>
                <input type="number" name="note" class="form-control" placeholder="note/20">        
            </div>
            <select name="type" class="form-select" aria-label="Default select example" style="width: 100%" >
                <option selected >Sélectionne un type</option>
                <option  value="devoirs" >devoirs</option>
                <option value="partielles">partielles</option>
            </select>
            <div class="button">
                <button type="submit" class="btn mt-5 btn-outline-success">sauvegarder</button>
            </div>    
        </form> 
    </div>
</div>
