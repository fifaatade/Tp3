@extends('master')
@section('title','étudiant')

@section('content')

    @if($etudiantUpdate)
        <h1 class="text-center mt-5 mb-5">MODIFIER LES INFORMATIONS DE L'ETUDIANT NUMERO {{$etudiantUpdate['id']}}</h1>
        <form action="{{route('update',$etudiantUpdate['id'])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="detail">
                <div class="card mb-3 padding " style="max-width: 800px;">
                    <div class="row g-0 ">
                        <div class="col-md-4 ">
                            <div class="center width"><img class="object rounded-start" src="{{asset($etudiantUpdate['photo'])}}" alt="" width="100%" height="100%"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title"><strong class="underline">nom:</strong> <input name="nom" type="text" value="{{$etudiantUpdate['nom']}}"></h5>
                            <h5 class="card-title"><strong class="underline">prénom: </strong> <input name="prenom" type="text" value="{{$etudiantUpdate['prenom']}}"></h5>
                            <h5 class="card-title"><strong class="underline">date de naissance: </strong> <input name="datenais" type="date" value="{{$etudiantUpdate['datenais']}}"></h5>
                            <h5 class="card-title"><strong class="underline">hobbies:</strong> <input type="text" name="hobbies" value="{{$etudiantUpdate['hobbies']}}"></h5>
                            <h5 class="card-title"><strong class="underline">spécialité: </strong> <input type="text" name="specialite" value="{{$etudiantUpdate['specialite']}}"></h5>
                            </div>
                        </div>
                        <input name="photo" class="mt-3" type="file">
                        <p class="padding"><strong class="underline mb-3 ">bio:</strong> <textarea name="bio" id="" cols="30" rows="10"  style="width: 100%">{{$etudiantUpdate['bio']}}</textarea></p>
                        <div class="button">
                            <button type="submit" class="btn btn-outline-success">modifier</button>
                        </div>
                        <div>
                            <a class="btn btn-outline-danger text-body-secondary" href="{{route('home')}}">annuler</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endsection
