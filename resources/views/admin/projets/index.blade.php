@php
    Request::is('projets_admin');
@endphp

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>Tous les projets et zones d'interventions</h1>
		<p>
			<!-- Lien pour créer un nouvel article : "projets.create" -->
			<a href="{{ route('admin_projets.create') }}" title="Créer un projet" >Créer un nouveau projet</a>
		</p>

		<!-- Le tableau pour lister les articles/projets -->
		<table border="1" >
			<thead>
				<tr>
					<th>Projet</th>
					<th colspan="2" ></th>
					<th colspan="2" ></th>
				</tr>
			</thead>
			<tbody>
				<!-- On parcourt la collection de projet -->
				@foreach ($projets as $projet)
				<tr>
					<td>
						<!-- Lien pour afficher un projet : "projets.show" -->
						<a href="{{ route('admin_projets.show', $projet) }}" title="Lire le projet" >{{ $projet->title }}</a>
					</td>
					<td>
						<!-- Lien pour modifier un projet : "projets.edit" -->
						<a href="{{ route('admin_projets.edit', $projet) }}" title="Modifier le projet" >Modifier</a>
					</td>
					<td>
						<!-- Formulaire pour supprimer un projet : "projets.destroy" -->
						<form method="POST" action="{{ route('admin_projets.destroy', $projet) }}" >
							<!-- CSRF token -->
							@csrf
							<!-- <input type="hidden" name="_method" value="DELETE"> -->
							@method("DELETE")
							<input type="submit" value="x Supprimer" >
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
@endsection
