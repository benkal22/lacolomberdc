@php
    Request::is('admin_apropos');
@endphp

@extends('layouts.app_admin')

@section("title")
A propos - Admin
@endsection 

@section("content")
<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="pull-left">
            <h2>Administrez votre ONG</h2>
        </div>
        <div class="pull-right">
            @foreach ($abouts as $about)
            <a href="{{ url('admin_apropos') . '/' . $about->id . '/edit' }}" class="btn btn-success">
                Définir votre identité
            </a>
            @endforeach
            <a href="{{ route('admin_team.index') }}" class="btn btn-primary">
                Définir votre équipe
            </a>
        </div>

    </div>
    </div>
    
    {{-- //Section ONG --}}
    <div class="mt-3">
        <h1>Votre ONG</h1>
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
      @if ($message = Session::get('error'))
          <div class="alert alert-danger">
              <p>{{ $message }}</p>
          </div>
      @endif
      <table class="table table-bordered">
          <tr>
              <th>Objectif principal</th>
              <th>Objectis spécifiques</th>
              <th>Mission</th>
              <th>Vision</th>
              <th>Values</th>
          </tr>
        @foreach ($abouts as $about)
            <tr>
                <td>{{ $about->main_goal }}</td>
                <td>{{ $about->spec_goal }}</td>
                <td>{{ $about->mission }}</td>
                <td>{{ $about->vision }}</td>
                <td>{{ $about->values }}</td>
            </tr>
            @endforeach
        
      </table>
    </div>

</div>

<div class="container">
    <div class="mt-3">
        <h1>Votre équipe</h1>
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
      @if ($message = Session::get('error'))
          <div class="alert alert-danger">
              <p>{{ $message }}</p>
          </div>
      @endif
      <table class="table table-bordered">
        <tr>
            {{-- <th>ID</th> --}}
            <th>Noms</th>
            <th>Poste</th>
            <th>Tâche</th>
            <th>Lien Twitter</th>
            <th>Lien Facebook</th>
            <th>Lien Instagram</th>
            <th>Lien Linkedin</th>
            <th>Photo</th>
        </tr>
        @foreach ($teams as $team)
            <tr>
                {{-- <td>{{ $team->id }}</td> --}}
                <td>{{ $team->names }}</td>
                <td>{{ $team->post }}</td>
                <td>{{ $team->task }}</td>
                <td>{{ $team->link_twitter }}</td>
                <td>{{ $team->link_facebook }}</td>
                <td>{{ $team->link_instagram }}</td>
                <td>{{ $team->link_linkedin }}</td>
                {{-- <td>{{ $team->picture }}</td> --}}
                <td><img src="storage/{{ $team->picture }}" alt="" class="img-fluid"> </td>
            </tr>
        @endforeach
      </table>
      {!! $teams->links() !!}

    </div>
</div>

@endsection 