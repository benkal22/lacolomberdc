@php
    Request::is('admin_projets');
@endphp

@extends('layouts.app_admin')

@section("title")
Dons - Admin
@endsection 

@section("content")
<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="pull-left">
            <h2>Dons reçus</h2>
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
              <th>Noms</th>
              <th>Email</th>
              <th>Don</th>
              <th>Date</th>
          </tr>
          {{-- @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at }}</td>
            </tr>
          @endforeach --}}
      </table>
      {{-- {!! $dons->links() !!} --}}
    </div>
</div>
@endsection 