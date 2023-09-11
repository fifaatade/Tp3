@if($cours_list)
    <div>
        <a class="btn btn-outline-danger text-body-secondary me-3" href="{{route('home')}}">retour</a>
        <a href="{{route('ajouter')}}"><button type="submit" class="btn btn-success me-3">créer un cours</button></a>
        <a href="{{route('addCategorie')}}"><button type="submit" class="btn btn-warning float-end">créer une catégorie</button></a>

    </div>
    <table class="table mt-5">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">masse horaire</th>
        <th scope="col">coefficient</th>
        <th scope="col">ajouter par</th>
        <th scope="col">id_catégorie</th>
        <th scope="col" class=" text-center ">action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($cours_list as $items)
            <tr>
            <th scope="row">{{$items['id']}}</th>
            <td class=" text-center ">{{$items['nom']}}</td>
            <td class=" text-center ">{{$items['maxHoraire']}} {{'heures'}}</td>
            <td class=" text-center ">{{$items['coef']}}</td>
            <td class=" text-center ">{{$items['addBy']}}</td>
            <td class=" text-center ">{{$items['id_categorie']}}</td>
            <td class=" text-center ">
                <a class="btn btn-outline-info " href="{{route('show',$items['id'])}}" width="">voir plus</a>
                <a class="btn btn-outline-warning mx-2 my-2"  href="{{route('edit',$items['id'])}}" >modifier</a>
                <a class="btn btn-outline-danger" href="{{route('delete',$items['id'])}}">supprimer</a>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endif