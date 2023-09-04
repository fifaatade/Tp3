@extends('masterRegister')
@section('title','création de compte')


@section('content')
    <form action="{{route('storeUser')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" name="lastname" class="form-control" placeholder="veuillez entrer votre nom" id="">
        </div>
        <div class="mb-3 mt-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" name="firstname" class="form-control" placeholder="veuillez entrer votre prénom" id="">
        </div>
        <div class="mb-3 mt-3">
            <label for="date" class="form-label">Date de naissance</label>
            <input type="date" name="birthday" class="form-control"  id="">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="fifa@gmail.com" id="">
        </div>
        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="">
        </div>
        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Confirmation du mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" id="">
        </div>
        <a href="{{route('login')}}"><button type="submit" class="btn btn-primary float-end "> S'inscrire</button></a>
    </form>
    <p class="mt-3 mt-3">Vous avez déjà un compte? <a href="{{route('login')}}">cliquez ici</a></p>

@endsection

