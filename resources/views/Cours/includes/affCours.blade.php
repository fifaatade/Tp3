<a class="btn btn-outline-danger text-body-secondary mb-3" href="{{route('home')}}">retour</a>
<div class="d-flex">
    @if($affCours)
        <table class="table table-bordered" >
            <thead>
            <tr>
                <th class="text-center" scope="col">Etudiant </th>
                <th class="text-center" scope="col">id_aff</th>
                <th class="text-center" scope="col">Cours</th>
        
            </tr>
            </thead>
            <tbody>
                @foreach($affCours as $items)
                    <tr>
                        <th scope="row">{{$items->etudiants->nom}} {{$items->etudiants->prenom}}</th>
                        <td class=" text-center "> {{$items->id}}</td>
                        <td class="text-center" title="categorie">
                            <a href="{{route('note',["id" => $items->etudiants->id, "idCours" => $items->cours->id])}}" class="">{{$items->cours->nom}}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <form action="{{route('affStore')}}" method="POST" class="ms-5" style="width: 500px">
        @csrf
        <select class="form-select mb-3" aria-label="Default select example" name="id_etudiant" style="width: 100%">
            <option selected>Choisir un étudiant</option>
            @foreach($etudiants as $item)
                <option value="{{$item['id']}}">{{$item['nom']}} {{$item['prenom']}}</option>
            @endforeach
        </select>
        <select name="cours[]" class="form-select" aria-label="Default select example" style="width: 100%" multiple>
            <option selected>Sélectionne des cours</option>
            @foreach($cours as $item)
                <option value="{{$item['id']}}" >{{$item['nom']}}</option>
            @endforeach
        </select>
        <div class="button">
            <button type="submit" class="btn mt-5 btn-outline-success">sauvegarder</button>
        </div>    
    </form>                            
</div>