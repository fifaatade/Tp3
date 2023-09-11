<div>
    <a class="btn btn-outline-warning text-body-secondary mt-3 ms-3 float-end" href="{{route('enseignant')}}">retour</a>
</div>
<div class="d-flex mt-5">
    <form action="{{route('affEnsStore',$enseignantItem['id'])}}" method="POST" class="me-5 ms-3" style="width: 500px">
        @csrf
        <select name="cours[]" class="form-select" aria-label="Default select example" style="width: 100%" multiple>
            <option selected>Sélectionne des cours</option>
            @foreach($cours as $item)
                <option value="{{$item['id']}}">{{$item['nom']}}</option>
            @endforeach
        </select>
        <div class="button mt-5" >
            <button type="submit" class="btn mt-5 btn-outline-success">enregistrer</button>
        </div>    
    </form>   
    @if($affCoursEns)
                         
        <table class="table table-bordered" >
            <thead>
            <tr>
                <th class="text-center" scope="col">id_aff</th>
                <th class="text-center" scope="col">Cours</th>
                <th class="text-center" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($affCoursEns as $items)
                    <tr>
                        <th scope="row">{{$items->id}}</th>
                        <td class=" text-center " title="">
                            {{$items->cours->nom}}
                        </td>
                        <td class="text-center">
                            <a class="btn btn-outline-danger" href="{{route('deleteAffEns',$items->id)}}">supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
