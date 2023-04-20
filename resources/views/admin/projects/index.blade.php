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
    <div class="col-12">
        <div class="pull-left">
            <h2>Administrez vos projets</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin_projets.create') }}" class="btn btn-success">
                Créer nouveau Projet
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
              <th>No</th>
              <th>Titre</th>
              <th>Contenu</th>
              <th>Image</th>
              <th width="280px">Action</th>
          </tr>
          @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->content }}</td>
                {{-- <td>{{ $project->picture }}</td> --}}
                <td><img src="storage/{{ $project->picture }}" alt="" class="img-fluid"> </td>
                {{-- <td><img src="images/1680542366.png" alt="" class="img-fluid"> </td> --}}
                <td>
                    <form action="{{ route('admin_projets.destroy', $project->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div class="pull-right">
                            <a href="{{ url('admin_projets') . '/' . $project->id }}" class="btn">
                                Voir
                            </a>

                            <a href="{{ url('admin_projets') . '/' . $project->id . '/edit' }}" class="btn btn-primary">
                                Modifier
                            </a>
                            <button type="submit" onclick="return confirm('Etes-vous sûr de le supprimer ?')" class="btn btn-danger">Supprimer</button>
                        </div>
                    </form>
                </td>
            </tr>
          @endforeach
      </table>
      {!! $projects->links() !!}
    </div>
</div>
@endsection 