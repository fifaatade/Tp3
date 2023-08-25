<h1 class="text-center mt-5 mb-5">MODIFIER LES INFORMATIONS DE L'ETUDIANT NUMERO {{$etudiantItem['id']}}</h1>
<form action="{{route('updateEtudiantStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="detail">
        <div class="card mb-3 padding " style="max-width: 800px;">
            <div class="row g-0 ">
                <div class="col-md-4 ">
                    <div class="center width"><img class="object rounded-start" src="{{asset($etudiantItem['photo'])}}" alt="" width="100%" height="100%"></div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><strong class="underline">nom:</strong> <input type="text" value="{{$etudiantItem['nom']}}"></h5>
                    <h5 class="card-title"><strong class="underline">prénom: </strong> <input type="text" value="{{$etudiantItem['prenom']}}"></h5>
                    <h5 class="card-title"><strong class="underline">date de naissance: </strong> <input type="date" value="{{$etudiantItem['datenais']}}"></h5>
                    <h5 class="card-title"><strong class="underline">hobbies:</strong> <input type="text" value="{{$etudiantItem['hobbies']}}"></h5>
                    <h5 class="card-title"><strong class="underline">spécialité: </strong> <input type="text" value="{{$etudiantItem['specialite']}}"></h5>
                    </div>
                </div>
                <input type="file">
                <p class="padding"><strong class="underline ">bio:</strong> <input type="text" value="{{$etudiantItem['bio']}}"></p>
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