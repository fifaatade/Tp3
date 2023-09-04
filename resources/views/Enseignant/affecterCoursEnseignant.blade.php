@extends('master')
@section('title','enseignants')

@section('content')

    <div class="container">
        <div class="block">
            <h1 class="float-start ms-5 mt-3 mb-3"> {{$enseignantItem['nom']}} {{$enseignantItem['prenom']}}</h1>
            <div>
                @include('Enseignant.includes.affCoursEns')
            </div>
        </div>
    </div>    
@endsection
    
