<h2 class="text-center mt-5 mb-5">AJOUTER UN NOUVEL ETUDIANT</h2>
<form action="{{route('etudiantStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="detail">
        <div class="card mb-3 padding " style="max-width: 800px;">
            <div class="row g-0 ">
                <div class="col-md-4 ">
                    <div class="center width"><input name="photo" type="file" class="object rounded-start">@error('photo') <span class="text-danger">{{$message}}</span> @enderror</div>     
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><strong class="underline">nom:</strong> <input value="{{old('nom')}}" name="nom" type="text" placeholder="votre nom"></h5>@error('nom') <span class="text-danger">{{$message}}</span> @enderror
                    <h5 class="card-title"><strong class="underline">prénom: </strong> <input name="prenom" value="{{old('prenom')}}" type="text" placeholder="votre prénom"></h5>@error('prenom') <span class="text-danger">{{$message}}</span> @enderror
                    <h5 class="card-title"><strong class="underline">date de naissance: </strong> <input value="{{old('datenais')}}" name="datenais" type="date" ></h5>@error('datenais') <span class="text-danger">{{$message}}</span> @enderror
                    <h5 class="card-title"><strong class="underline">hobbies:</strong> <input name="hobbies" value="{{old('hobbies')}}" type="text" placeholder=" veuillez renseigner vos hobbies"></h5>@error('hobbies') <span class="text-danger">{{$message}}</span> @enderror
                    <h5 class="card-title"><strong class="underline">spécialité: </strong> <input name="specialite" value="{{old('specialite')}}" type="text" placeholder="veuillez renseigner votre spécialité"></h5>@error('specialite') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <strong class="underline ">bio:</strong> <textarea name="bio" id="" cols="30" rows="10">{{old('bio')}}</textarea>@error('bio') <span class="text-danger">{{$message}}</span> @enderror
                <div class="button">
                    <button type="submit" class="btn mt-3 btn-outline-success">enrégistrer</button>
                </div>
                <div>
                    <a class="btn btn-outline-danger text-body-secondary" href="{{route('home')}}">retour</a>
                </div>
            </div>
        </div>
    </div>
</form>