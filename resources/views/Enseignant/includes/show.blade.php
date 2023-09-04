@if($enseignantItem)
    <h2 class="text-center mt-5 mb-5">INFORMATIONS DE L'ETUDIANT NUMERO {{$enseignantItem['id']}}</h2>
<div>
    <a class="btn btn-outline-danger text-body-secondary mb-5" href="{{route('enseignant')}}">retour</a>
</div>

<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">nom</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$enseignantItem['nom']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">prénom</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$enseignantItem['prenom']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">tel</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$enseignantItem['tel']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">adresse</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$enseignantItem['adresse']}}</</label>
    </div>
</div>
@endif