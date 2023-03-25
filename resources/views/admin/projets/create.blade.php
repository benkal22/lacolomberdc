@php
    Request::is('products_admin');
@endphp

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif

    <div>

        <form action="{{ route('admin_projets.store') }}" method="post" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
            <div class="form-group">
                <label>Titre du Projet</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
			<div class="form-group">
                <label>Contenu du Projet</label>
                <input type="text" class="form-control" name="content" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        
    </div>
</div>
@endsection
