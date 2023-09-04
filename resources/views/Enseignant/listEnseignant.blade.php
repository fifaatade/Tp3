@extends('master')
@section('title','enseignants')

@section('content')

    <div class="container">
        <h1 class="text-center mt-5 mb-5">LISTE DES ENSEIGNANTS!..</h1>
        @include('Enseignant.includes.table')
    </div>    
@endsection
    
