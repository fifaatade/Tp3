@extends('master')
@section('title','détails des étudiants')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5 mb-5">INFORMATIONS DE L'ETUDIANT NUMERO {{$etudiantItem['id']}}</h1>
        @include('Etudiants.includes.show')
    </div>    
@endsection
    
