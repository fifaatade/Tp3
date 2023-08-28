@extends('master')
@section('title','étudiant')

@section('content')
    <div class="container">
        @if(!empty($etudiantItem['id'])) 
            @include('Etudiants.includes.show')            
        @else
            @include('Etudiants.includes.add')
        @endif
    </div>    
@endsection

