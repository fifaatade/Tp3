<div>
    <a class="btn btn-outline-danger text-body-secondary mt-5 mb-5" href="{{route('cours')}}">retour</a>
</div>
<form action="{{route('categorieStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3" style="height: 60px">
        <span class="input-group-text" style="height: 100%">@</span>
        <div class="form-floating" style="height: 100%">
            <input type="text" class="form-control" id="floatingInputGroup1" value="{{old('name')}}" name="name"   placeholder="nom" style="height: 100%">
            <label for="floatingInputGroup1" style="height: 100%">Nom de la catégorie</label>
        </div>
    </div>
    <div class="button">
        <button type="submit" class="btn mt-3 btn-outline-success">enrégistrer</button>
    </div>
</form>
