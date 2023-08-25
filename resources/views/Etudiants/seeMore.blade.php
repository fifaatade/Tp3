@extends('master')
@section('title','étudiant')

@section('content')
    <div class="container">
        @if(!empty($etudiantItem['id'])) 
            @include('Etudiants.includes.show')            
        @elseif(empty($etudiantItem['id']))
            @include('Etudiants.includes.add')
        @elseif($etudiantItem['id']->exists())
            @include('Etudiants.includes.update')
        @endif
    </div>    
@endsection

