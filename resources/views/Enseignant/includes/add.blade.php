<div>
    <a class="btn btn-outline-danger text-body-secondary mb-5" href="{{route('home')}}">retour</a>
</div>
<form action="{{route('enseignantStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="text" class="form-control" id="floatingInputGroup1" value="{{old('nom')}}" name="nom"   placeholder="nom" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">Nom de l'enseignant</label>
        </div>
    </div>
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="text" class="form-control" id="floatingInputGroup1" value="{{old('prenom')}}" name="prenom"   placeholder="prenom" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">prenom</label>
        </div>
    </div>
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="tel" class="form-control" id="floatingInputGroup1" value="{{old('tel')}}" name="tel"   placeholder="tel" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">tel</label>
        </div>
    </div>
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="text" class="form-control" id="floatingInputGroup1" value="{{old('adresse')}}" name="adresse"   placeholder="adresse" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">adresse</label>
        </div>
    </div>
    <div class="button">
        <button type="submit" class="btn mt-3 btn-outline-success">enrégistrer</button>
    </div>
</form>