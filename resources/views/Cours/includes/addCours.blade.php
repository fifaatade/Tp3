<div>
    <a class="btn btn-outline-danger text-body-secondary mb-5" href="{{route('cours')}}">retour</a>
</div>
<form action="{{route('courStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="text" class="form-control" id="floatingInputGroup1" value="{{old('nom')}}" name="nom"   placeholder="nom" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">Nom du cours</label>
        </div>
    </div>
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="number" class="form-control" id="floatingInputGroup1" value="{{old('maxHoraire')}}" name="maxHoraire"   placeholder="masse horaire" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">Masse horaire</label>
        </div>
    </div>
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="number" class="form-control" id="floatingInputGroup1" value="{{old('coef')}}" name="coef"   placeholder="Coefficient" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">Coefficient</label>
        </div>
    </div>
    <select class="form-select mb-3" aria-label="Default select example" name="id_categorie" style="width: 100%">
        <option selected>Choisir une catégorie</option>
        @foreach($categorie as $item)
            <option value="{{$item['id']}}">{{$item['name']}}</option>
        @endforeach
    </select>
    <div class="button">
        <button type="submit" class="btn mt-3 btn-outline-success">enrégistrer</button>
    </div>
</form>
