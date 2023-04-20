@php
    Request::is('apropos');
@endphp

@extends('layouts.app_admin')

@section("title")
A propos - Admin
@endsection 

@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Identité de l'ONG</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin_apropos.index') }}">Retour</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    
    <form action="{{ route('admin_apropos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Objectif princpal<span class="text-danger">*</span> : </strong>
                    <input type="text" name="main_goal" class="form-control" placeholder="Objectif principal de l'ONG">
                    @error('main_goal')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Objectifs spécifiques :</strong>
                    <br>
                    <textarea name="spec_goal" id="" cols="60" rows="5" ></textarea>
                    @error('spec_goall')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Mission :</strong>
                    <input type="text" name="mission" class="form-control" placeholder="Objectifs spécifiques de l'ONG">
                    @error('mission')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Vision :</strong>
                    <br>
                    <textarea name="vision" id="" cols="60" rows="5" ></textarea>
                    @error('vision')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Valeurs :</strong>
                    <br>
                    <textarea name="values" id="" cols="60" rows="5" ></textarea>
                    @error('values')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success ml-3">Définir</button>
            </div>
        </div>
    </form>
</div>
@endsection 