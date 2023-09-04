@extends('master')
@section('title','liste des étudiants')

@section('content')
    <div class="container">
        @if(isset($etudiant_list))
            @include('Etudiants.includes.table')
        @elseif(isset($etudiants))
            @include('Etudiants.includes.allStudent')
        @endif
    </div>    
@endsection
    
