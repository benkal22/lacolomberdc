@php
    Request::is('erreurs');
@endphp

@extends('layouts.app')

@section("title")
Erreur
@endsection 

@section("content")
  <!-- ======= Section ======= -->
  <section>
    <div class="text-center">
        <h1 >Erreur 404</h1>
        <h2>Oups, désolé. Cette page n'a pas été trouvée.</h2>
    </div>
  </section><!-- End Section -->
@endsection 