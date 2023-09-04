@if($cours)
    <div>
        <a class="btn btn-outline-danger text-body-secondary mb-5" href="{{route('cours')}}">retour</a>
    </div>
    <form action="{{route('updateCours',$cours['id'])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1"  name="new_nom" value="{{$cours['nom']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">Nom du cours</label>
            </div>
        </div>
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1" name="new_maxHoraire" value="{{$cours['maxHoraire']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">Masse horaire</label>
            </div>
        </div>
        <div class="input-group mb-3" style="height: 60px">
            <span class="input-group-text" style="height: 100%">@</span>
            <div class="form-floating" style="height: 100%">
                <input type="text" class="form-control" id="floatingInputGroup1" name="new_coef" value="{{$cours['coef']}}" style="height: 100%">
                <label for="floatingInputGroup1" style="height: 100%">Coefficient</label>
            </div>
        </div>
        <div class="button">
            <button type="submit" class="btn mt-3 btn-outline-success">modifier</button>
        </div>
    </form>
@endif
