<a class="btn btn-success mb-3 "  href="{{route('detail')}}" data-bs-target="#modal">ajouter un étudiant</a>

<table class="table table-bordered" >
    <thead>
      <tr>
        <th class="text-center" scope="col">Numéro</th>
        <th class="text-center" scope="col">Photo</th>
        <th class="text-center" scope="col">Nom et Prénoms</th>
        <th class="text-center" scope="col">Hobbies</th>
        <th class="text-center" scope="col">Spécialité</th>
        <th class="text-center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @if($etudiants)
            @foreach($etudiants as $items)
                <tr>
                    <th scope="row">{{$items['id']}}</th>
                    <th scope="row" ><div class="center"><img class="rounded object " src="{{asset($items['photo'])}}" alt="" width="200px" height="200px"></div></th>
                    <td class=" text-center ">{{$items['nom']}} {{$items['prenom']}}</td>
                    <td class="text-center">{{$items['hobbies']}}</td>
                    <td class="text-center">{{$items['specialite']}}</td>
                    <td class="text-center ">
                        <a class="btn btn-outline-info" href="{{route('detail',$items['id'])}}" width="">voir plus</a>
                        <a class="btn btn-outline-warning mx-2 my-2"  href="{{route('updateEtudiantStore',$items['id'])}}">modifier</a>
                        <a class="btn btn-outline-danger" href="{{route('delete',$items['id'])}}">supprimer</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
  </table>