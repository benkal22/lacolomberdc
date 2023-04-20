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
                <td>{{ $about->id }}</td>
                <td>{{ $about->main_goal }}</td>
                <td>{{ $about->spec_goal }}</td>
                <td>{{ $about->mission }}</td>
                <td>{{ $about->vision }}</td>
                <td>{{ $about->values }}</td>
                <td>
                    <div class="pull-right">
                        <a href="{{ url('admin_apropos') . '/' . $about->id . '/edit' }}" class="btn btn-primary">
                            Modifier
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>    
</div>
@endsection
