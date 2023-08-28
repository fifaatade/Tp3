<a href="{{ route('detail') }}"><button type="submit" class="btn btn-success mb-3">ajouter un étudiant</button></a>


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
                        <td class="text-center " scope="col">
                            @if($items['status']==1)
                                <a class="btn btn-outline-info" href="{{route('detail',$items['id'])}}" width="">voir plus</a>
                                <a class="btn btn-outline-warning mx-2 my-2"  href="{{route('updateEtudiant',$items['id'])}}">modifier</a>
                                <a class="btn btn-outline-danger" href="{{route('delete',$items['id'])}}">supprimer</a>
                            @else
                                <a onclick="return false" href="{{route('detail',$items['id'])}}" width=""> <button disabled type="button" class="btn btn-outline-info ">voir plus</button></a>
                                <a onclick="return false"  href="{{route('updateEtudiant',$items['id'])}}"> <button disabled type="button" class="btn btn-outline-warning mx-2 my-2" >modifier</button></a>
                                <a onclick="return false" href="{{route('delete',$items['id'])}}"><button disabled type="button" class="btn btn-outline-danger">supprimer</button></a>
                            @endif
                            <form action="{{ route('activate', $items['id']) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-{{ $items['status'] ? 'danger' : 'success' }}">
                                    {{ $items['status'] ? 'Désactiver' : 'Activer' }}
                                </button>
                            </form>                            
                        </td>
                    </tr>
            @endforeach
        @endif
    </tbody>
  </table>