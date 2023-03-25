@php
    Request::is('projets_admin');
@endphp

@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Modifier projet</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_projets.index') }}"> Retourner</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif

	<!-- Le formulaire est géré par la route "projets.store" -->
	<form method="POST" action="{{ route('admin_projets.update', $projet->id) }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
		@method('PUT')
		<p>
			<label for="title" >Titre</label><br/>
			<input type="text" name="title" value="{{  $projet->title }}"  id="title" placeholder="Le titre du projet" >

			<!-- Le message d'erreur pour "title" -->
			@error("title")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="picture" >Couverture</label><br/>
			<input type="file" name="picture" id="picture" value="{{  $projet->picture }}">

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="content" >Contenu</label><br/>
			<textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du projet" >{{  $projet->content }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("content")
			<div>{{ $message }}</div>
			@enderror
		</p>

		{{-- <input type="submit" name="valider" value="Valider" > --}}
		<button type="submit" class="btn btn-primary ml-3">Valider</button>

	</form>
</div>	
@endsection
