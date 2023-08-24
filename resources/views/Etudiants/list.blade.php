@extends('master')
@section('title','liste des étudiants')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5 mb-5">LISTE DES ETUDIANTS</h1>
        @include('Etudiants.includes.table')
    </div>    
@endsection
    
