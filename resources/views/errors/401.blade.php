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
        <h1 >Erreur 401</h1>
        <h2>Accès non autorisé à cette page</h2>
    </div>
  </section><!-- End Section -->
@endsection 