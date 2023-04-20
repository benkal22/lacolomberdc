@php
    Request::is('actualites');
@endphp

@extends('layouts.app_admin')

@section("title")
actualites - Admin
@endsection 

@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Publier actualité</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_actualites.index') }}">Retour</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    
    <form action="{{ route('admin_actualites.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Titre :</strong>
                    <input type="text" name="title" class="form-control" placeholder="Titre du actualite">
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Domaine :</strong>
                    <input type="text" name="domain" class="form-control" placeholder="Domaine d'actualité">
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Photo de couverture : </strong>(1000px X 1000 px)
                    <input type="file" name="picture" class="form-control" placeholder="Photo de couverture">
                    @error('picture')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Description :</strong>
                    <br>
                    <textarea name="content" id="" cols="60" rows="10" ></textarea>
                    {{-- <input type="text" name="content" class="form-control" placeholder="Description du actualite"> --}}
                    @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success ml-3">Publier</button>
            </div>
        </div>
    </form>
</div>
@endsection 