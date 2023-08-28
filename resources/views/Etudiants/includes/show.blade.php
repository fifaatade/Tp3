@if($etudiantItem)
    <h2 class="text-center mt-5 mb-5">INFORMATIONS DE L'ETUDIANT NUMERO {{$etudiantItem['id']}}</h2>
    <div class="detail">
        <div class="card mb-3 padding " style="max-width: 800px;">
            <div class="row g-0 ">
                <div class="col-md-4 ">
                    <div class="center width"><img class="object rounded-start" src="{{asset($etudiantItem['photo'])}}" alt="" width="100%" height="100%"></div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><strong class="underline">nom:</strong> {{$etudiantItem['nom']}}</h5>
                    <h5 class="card-title"><strong class="underline">prénom: </strong>{{$etudiantItem['prenom']}}</h5>
                    <h5 class="card-title"><strong class="underline">date de naissance: </strong> {{$etudiantItem['datenais']}}</h5>
                    <h5 class="card-title"><strong class="underline">hobbies:</strong>{{$etudiantItem['hobbies']}}</h5>
                    <h5 class="card-title"><strong class="underline">spécialité: </strong>{{$etudiantItem['specialite']}}</h5>
                    </div>
                </div>
                <p class="padding"><strong class="underline mt-3">bio:</strong> {{$etudiantItem['bio']}}</p>
                <div class="button">
                    <a class="btn btn-outline-success" href="{{route('detail',$etudiantItem['id']-1)}}">précédent</a>
                    <a class="btn btn-outline-warning"  href="{{route('detail',$etudiantItem['id']+1)}}">suivant</a>
                </div>
                <div>
                    <a class="btn btn-outline-danger text-body-secondary" href="{{route('home')}}">retour</a>
                </div>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

@endif
