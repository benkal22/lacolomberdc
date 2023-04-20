@php
    Request::is('equipe');
@endphp

@extends('layouts.app_admin')

@section("title")
A propos Equipe - Admin
@endsection 

@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Modifier membre</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_team.index') }}">Annuler</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    
    <form action="{{ route('admin_team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Noms<span class="text-danger">*</span> : </strong>
                    <input type="text" name="names" class="form-control" placeholder="Noms" value="{{ $team->names }}">
                    @error('names')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                <div class="form-group">
                    <strong>Poste<span class="text-danger">*</span> : </strong>
                    <input type="text" name="post" class="form-control" placeholder="Poste occupé" value="{{ $team->post }}">
                    @error('post')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                <div class="form-group">
                    <strong>Tâche<span class="text-danger">*</span> : </strong>
                    <input type="text" name="task" class="form-control" placeholder="Tâches" value="{{ $team->task }}">
                    @error('names')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                <div class="form-group">
                    <strong>Lien Twitter : </strong>
                    <input type="text" name="link_twitter" class="form-control" placeholder="Lien Twitter" value="{{ $team->link_twitter }}">
                    @error('link_twitter')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                <div class="form-group">
                    <strong>Lien Facebook : </strong>
                    <input type="text" name="link_facebook" class="form-control" placeholder="Lien Facebook" value="{{ $team->link_facebook }}">
                    @error('link_facebook')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                <div class="form-group">
                    <strong>Lien Instagram : </strong>
                    <input type="text" name="link_instagram" class="form-control" placeholder="Lien Instagram" value="{{ $team->link_instagram }}">
                    @error('link_instagram')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                <div class="form-group">
                    <strong>Lien Linkedin : </strong>
                    <input type="text" name="link_linkedin" class="form-control" placeholder="Lien Linkedin" value="{{ $team->link_linkedin }}">
                    @error('link_linkedin')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Photo<span class="text-danger">*</span> :</strong>
                    <input type="file" name="picture" class="form-control" placeholder="Photo du projet" value="{{ $team->picture }}">
                    @error('picture')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success ml-3">Modifier</button>
            </div>
        </div>
    </form>
</div>
@endsection 