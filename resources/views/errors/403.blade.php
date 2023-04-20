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
        <h1 >Erreur 403</h1>
        <h2>Oups, désolé. Vous n'avez pas le droit d'acceder à ce lien.</h2>
    </div>
  </section><!-- End Section -->

@endsection 