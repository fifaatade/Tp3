<div class="detail">

    @if($etudiantItem)
        <div class="card mb-3 padding " style="max-width: 800px;">

            <div class="row g-0 ">
                <div class="col-md-4 ">
                    <div class="center width"><img class=" object rounded-start" src="{{asset('images/'.$etudiantItem['photo'])}}" alt="" width="100%" height="100%"></div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><strong class="underline">nom:</strong> <input type="text" placeholder="{{$etudiantItem['nom']}}"></h5>
                    <h5 class="card-title"><strong class="underline">prénom: </strong> <input type="text" placeholder="{{$etudiantItem['prenom']}}"></h5>
                    <h5 class="card-title"><strong class="underline">date de naissance: </strong> <input type="text" placeholder="{{$etudiantItem['datenais']}}"></h5>
                    <h5 class="card-title"><strong class="underline">hobbies:</strong> <input type="text" placeholder="{{$etudiantItem['hobbies']}}"></h5>
                    <h5 class="card-title"><strong class="underline">spécialité: </strong> <input type="text" placeholder="{{$etudiantItem['specialite']}}"></h5>
                    </div>
                </div>
                <p class="padding"><strong class="underline ">bio:</strong>{{$etudiantItem['bio']}}</p>
                <div class="button">
                    <a class="btn btn-outline-primary  "  href="#" data-bs-toggle="modal" data-bs-target="#modal">ajouter</a>
                    <a class="btn btn-outline-success" href="{{route('detail',$etudiantItem['id']-1)}}">précédent</a>
                    <a class="btn btn-outline-warning" href="{{route('detail',$etudiantItem['id']+1)}}">suivant</a>
                </div>
                <div>
                    <a class="btn btn-outline-danger text-body-secondary" href="{{route('home')}}">retour</a>
                </div>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    @endif

</div>
<form method="POST" action="">
    @csrf
    <div class="modal" id="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ajouter un élève</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">enrégistrer</button>
            </div>
          </div>
        </div>
      </div>
</form>