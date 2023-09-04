@if($enseignant)
    <div>
        <a class="btn btn-outline-danger text-body-secondary me-3" href="{{route('home')}}">retour</a>
    </div>
    <table class="table mt-5">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">prénom</th>
        <th scope="col">tel</th>
        <th scope="col">adresse</th>
        <th scope="col" class=" text-center ">action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($enseignant as $items)
            <tr>
            <th scope="row">{{$items['id']}}</th>
            <td class=" text-center ">{{$items['nom']}}</td>
            <td class=" text-center ">{{$items['prenom']}}</td>
            <td class=" text-center ">{{$items['tel']}}</td>
            <td class=" text-center ">{{$items['adresse']}}</td>
            <td class=" text-center ">{{$items['id_categorie']}}</td>
            <td class=" text-center ">
                <a class="btn btn-outline-info " href="{{route('showEnseignant',$items['id'])}}" width="">voir plus</a>
                <a class="btn btn-outline-warning mx-2 my-2"  href="{{route('editEnseignant',$items['id'])}}" >modifier</a>
                <a class="btn btn-outline-primary " href="{{route('affCoursEnseignant',$items['id'])}}" width="">affecter cours</a>
                <a class="btn btn-outline-danger" href="{{route('deleteEnseignant',$items['id'])}}">supprimer</a>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endif