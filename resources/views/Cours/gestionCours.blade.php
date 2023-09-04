@extends('master')
@section('title','liste des étudiants')

@section('content')

    <div class="container">
        <h1 class="text-center mt-5 mb-5">GESTION DES COURS!..</h1>
        @include('Cours.includes.coursTable')
    </div>    
@endsection
    
