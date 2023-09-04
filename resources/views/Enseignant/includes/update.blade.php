@if($enseignant)
    <div>
        <a class="btn btn-outline-danger text-body-secondary mb-5" href="{{route('enseignant')}}">retour</a>
    </div>
    <form action="{{route('updateEnseignant',$enseignant['id'])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1"  name="new_nom" value="{{$enseignant['nom']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">Nom de l'enseignant</label>
            </div>
        </div>
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1" name="new_prenom" value="{{$enseignant['prenom']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">Prénom</label>
            </div>
        </div>
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1" name="new_tel" value="{{$enseignant['tel']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">tel</label>
            </div>
        </div>
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1" name="new_adresse" value="{{$enseignant['adresse']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">adresse</label>
            </div>
        </div>
        <div class="button">
            <button type="submit" class="btn mt-3 btn-outline-success">modifier</button>
        </div>
    </form>
@endif
