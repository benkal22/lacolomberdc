
@php
    Request::is('projets_admin');
@endphp

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
        <h1>{{ $projet->title }}</h1>

        <img src="{{ asset('storage/'.$projet->picture) }}" alt="Image de couverture" style="max-width: 300px;">
    
        <div>{{ $projet->content }}</div>
    
        <p><a href="{{ route('admin_projets.index') }}" title="Retourner aux articles" >Retourner aux projets</a></p>
    

	</div>	
@endsection
