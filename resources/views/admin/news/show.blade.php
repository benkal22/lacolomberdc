@php
    Request::is('actualites');
@endphp

@extends('layouts.app_admin')

@section("title")
actualites - Admin
@endsection 

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Détails du actualite</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_actualites.index') }}">Retour</a>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Domaine</th>
                <th>Contenu</th>
                <th>Image</th>
                <th width="280px">Action</th>
            </tr>
            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->title }}</td>
                <td>{{ $new->domain }}</td>
                <td>{{ $new->content }}</td>
                <td>{{ $new->picture }}</td>
                {{-- <td><img src="storage/{{ $new->picture }}" alt="" class="img-fluid"> </td> --}}
                <td>
                    <form action="{{ route('admin_actualites.destroy', $new->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div class="pull-right">
                            <a href="{{ url('admin_actualites') . '/' . $new->id . '/edit' }}" class="btn btn-primary">
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
