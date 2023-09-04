@if($etudiants)
<h2 class=" mt-5 text-danger-emphasis">Voici la liste de tous les étudiants disponible!..</h2> 

    <div style="" class="d-flex align-items-center justify-content-center mt-5 mb-5 float-end">
        <a href="{{route('home')}}" type="button" class="btn btn-outline-success me-5">voir mes étudiants</a>
        <a href="#" type="submit" class="btn btn-dark">attribution de cours</a>
    </div >
    <div class="d-flex align-items-center justify-content-center mb-5 mt-5 float-start">
        <a href="{{route('detail')}}"><button type="submit" class="btn btn-success me-3">ajouter un étudiant</button></a>
        <a href="{{route('cours')}}"><button type="submit" class="btn btn-secondary me-3">gestion des cours</button></a>
    </div>
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
            @foreach($etudiants as $items)
                <tr>
                    <th scope="row">{{$items['id']}}</th>
                    <th scope="row" ><div class="center"><img class="rounded object " src="{{asset($items['photo'])}}" alt="" width="200px" height="200px"></div></th>
                    <td class=" text-center ">{{$items['nom']}} {{$items['prenom']}}</td>
                    <td class="text-center">{{$items['hobbies']}}</td>
                    <td class="text-center">{{$items['specialite']}}</td>
                    <td class="text-center d-flex justify-content-center align-items-center" scope="col">
                        @if($items['status']==1)
                            <a class="btn btn-outline-info " href="{{route('detail',$items['id'])}}" width="">voir plus</a>
                            <a class="btn btn-outline-warning mx-2 my-2"  href="{{route('updateEtudiant',$items['id'])}}">modifier</a>
                            <a class="btn btn-outline-danger" href="{{route('delete',$items['id'])}}">supprimer</a>
                        @else
                            <a onclick="return false" href="{{route('detail',$items['id'])}}" width=""> <button disabled type="button" class=" btn btn-outline-info  ">voir plus</button></a>
                            <a onclick="return false"  href="{{route('updateEtudiant',$items['id'])}}"> <button disabled type="button" class="btn btn-outline-warning mx-2 my-2" >modifier</button></a>
                            <a onclick="return false" href="{{route('delete',$items['id'])}}"><button disabled type="button" class="btn btn-outline-danger">supprimer</button></a>
                        @endif
                        <form action="{{ route('activate', $items['id']) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn ms-2 btn-{{ $items['status'] ? 'danger' : 'success' }}">
                                {{ $items['status'] ? 'Désactiver' : 'Activer' }}
                            </button>
                        </form>                            
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@if($etudiants)
    {{$etudiants->links()}}
@endif

