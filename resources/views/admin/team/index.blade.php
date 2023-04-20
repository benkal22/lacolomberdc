@php
    Request::is('admin_equipe');
@endphp

@extends('layouts.app_admin')

@section("title")
Equipe - Admin
@endsection 

@section("content")
<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="pull-left">
            <h2>Définissez votre équipe</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin_team.create') }}" class="btn btn-success">
                Ajouter un membre
            </a>
        </div>
    </div>
  </div>

    <div class="mt-3">
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
            <th>ID</th>
            <th>Noms</th>
            <th>Poste</th>
            <th>Tâche</th>
            <th>Lien Twitter</th>
            <th>Lien Facebook</th>
            <th>Lien Instagram</th>
            <th>Lien Linkedin</th>
            <th>Photo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->names }}</td>
                <td>{{ $team->post }}</td>
                <td>{{ $team->task }}</td>
                <td>{{ $team->link_twitter }}</td>
                <td>{{ $team->link_facebook }}</td>
                <td>{{ $team->link_instagram }}</td>
                <td>{{ $team->link_linkedin }}</td>
                {{-- <td>{{ $team->picture }}</td> --}}
                <td><img src="storage/{{ $team->picture }}" alt="" class="img-fluid"> </td>
                <td>
                    <form action="{{ route('admin_team.destroy', $team->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div class="pull-right">
                            <a href="{{ url('admin_team') . '/' . $team->id }}" class="btn">
                                Voir
                            </a>

                            <a href="{{ url('admin_team') . '/' . $team->id . '/edit' }}" class="btn btn-primary">
                                Modifier
                            </a>
                            <button type="submit" onclick="return confirm('Etes-vous sûr de le supprimer ?')" class="btn btn-danger">Supprimer</button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
      </table>

      {!! $teams->links() !!}

    </div>
</div>

@endsection 