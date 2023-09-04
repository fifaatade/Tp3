@extends('masterRegister')
@section('title','Authentification')


@section('content')
    <form action="{{route('relogin')}}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-warming alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li><br />
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{old('email')}} " name="email" class="form-control" placeholder="veuillez entrer votre email" id="">
        </div>
        <button type="submit" class="btn btn-success float-end "> Envoyer</button>
    </form>
    <p class="mt-3">Vous n'avez pas un compte? <a href="{{route('register')}}">cliquez ici</a></p>

@endsection

