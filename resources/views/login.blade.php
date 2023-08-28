@extends('masterRegister')
@section('title','Authentification')


@section('content')
    <form action="" method="get" autocomplete="off">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="veuillez entrer votre email" id="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="">
        </div>
        <a href="{{route('home')}}"><button type="submit" class="btn btn-primary float-end "> Se connecter</button></a>
    </form>
    <p class="mt-3">Vous n'avez pas un compte? <a href="{{route('register')}}">cliquez ici</a></p>

@endsection

