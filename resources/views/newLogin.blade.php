@extends('masterRegister')
@section('title','Authentification')


@section('content')
    <form action="{{route('modifyPassWord')}}" method="POST" autocomplete="off">
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
    
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="new_password" class="form-control" id="">
        </div>
        <div class="mb-3 mt-3">
            <label for="password_confirmation" class="form-label">Confirmation du mot de passe</label>
            <input type="password" name="new_password_confirmation" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-success float-end "> Enregistrer</button>
    </form>
@endsection

