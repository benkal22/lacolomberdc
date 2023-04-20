@php
    Request::is('admin_projets');
@endphp

@extends('layouts.app_admin')

@section("title")
Projets - Admin
@endsection 

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Détails du projet</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_projets.index') }}">Retour</a>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Image</th>
                <th width="280px">Action</th>
            </tr>
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->content }}</td>
                <td>{{ $project->picture }}</td>
                {{-- <td><img src="storage/{{ $project->picture }}" alt="" class="img-fluid"> </td> --}}
                <td>
                    <form action="{{ route('admin_projets.destroy', $project->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div class="pull-right">
                            <a href="{{ url('admin_projets') . '/' . $project->id . '/edit' }}" class="btn btn-primary">
                                Modifier
                            </a>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>    
</div>
@endsection
