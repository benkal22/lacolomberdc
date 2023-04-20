@php
    Request::is('admin_projets');
@endphp

@extends('layouts.app_admin')

@section("title")
Projets - Admin
@endsection 

@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Modifier projet</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_projets.index') }}">Annuler</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    
    <form action="{{ route('admin_projets.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Titre du projet :</strong>
                    <input type="text" name="title" class="form-control" placeholder="Titre du projet" value="{{ $project->title }}">
                     {{-- <h1>{{ old('name') }}</h1> --}}
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Photo :</strong>
                    <input type="file" name="picture" class="form-control" placeholder="Photo du projet" value="{{ $project->picture }}">
                    @error('picture')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Description :</strong>
                    <br>
                    <textarea name="content" id="" cols="60" rows="10" >{{ $project->content }}</textarea>
                    {{-- <input type="text" name="content" class="form-control" placeholder="Description du projet"> --}}
                    @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary ml-3">Modifier</button>
            </div>
        </div>
    </form>
</div>
@endsection 