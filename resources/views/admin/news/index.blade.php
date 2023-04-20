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
    <div class="col-12">
        <div class="pull-left">
            <h2>Administrez vos actualités</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('admin_actualites.create') }}" class="btn btn-success">
                Publiez une actualité
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
              <th>Domaine</th>
              <th>Titre</th>
              <th>Contenu</th>
              <th>Image</th>
              <th>Date de publication</th>
              <th width="280px">Action</th>
          </tr>
          @foreach ($news as $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->domain }}</td>
                <td>{{ $new->title }}</td>
                <td>{{ $new->content }}</td>
                <td><img src="storage/{{ $new->picture }}" alt="" class="img-fluid"> </td>
                <td>{{ $new->created_at }}</td>
                <td>
                    <form action="{{ route('admin_actualites.destroy', $new->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div class="pull-right">
                            <a href="{{ url('admin_actualites') . '/' . $new->id }}" class="btn">
                                Voir
                            </a>

                            <a href="{{ url('admin_actualites') . '/' . $new->id . '/edit' }}" class="btn btn-primary">
                                Modifier
                            </a>
                            {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('city-delete', $result->my_id)}}"><i class="fa fa-trash"></i></a> --}}
                            <button type="submit" onclick="return confirm('Etes-vous sûr de le supprimer ?')" class="btn btn-danger">Supprimer</button>
                        </div>
                    </form>
                </td>
            </tr>
          @endforeach
      </table>
      {!! $news->links() !!}

    </div>
</div>

@endsection 