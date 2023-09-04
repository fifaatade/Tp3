@if($coursItem)
    <h2 class="text-center mt-5 mb-5">INFORMATIONS DE L'ETUDIANT NUMERO {{$coursItem['id']}}</h2>
<div>
    <a class="btn btn-outline-danger text-body-secondary mb-5" href="{{route('cours')}}">retour</a>
</div>

<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">nom</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$coursItem['nom']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">masse horaire</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$coursItem['maxHoraire']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">coefficient</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$coursItem['coef']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">ajouter par</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$coursItem['addBy']}}</</label>
    </div>
</div>
<div class="input-group mb-3" style="height: 60px">
    <span class="input-group-text" style="height: 100%">id_categorie</span>
    <div class="form-floating" style="height: 100%">
        <label for="floatingInputGroup1" style="height: 100%">{{$coursItem['id_categorie']}}</</label>
    </div>
</div>
@endif