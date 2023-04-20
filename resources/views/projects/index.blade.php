@php
    Request::is('projets');
@endphp

@extends('layouts.app')

@section("title")
Projets
@endsection 

@section("content")
  <!-- ======= projets Section ======= -->
  <section id="projets" class="projets">
    <div class="container">

    <div class="section-title my-4">
      <h2>Nos projets contre la pauvreté</h2>
      <p>Nous intervenons dans les zones suivants : Distribution alimentaire, Création de centres de formations, Collecte de vêtements, Forage de puits.</p>
    </div>

    @foreach ($projects as $project)
    <div class="row mb-2">          
      <h2>{{ $project->title }}</h2>
        <div class="col-md-6">
          <p>{{ $project->content }}</p>
        </div>

        <div class="col-md-6">
          <div class="col-auto d-none d-lg-block">
            <img src="storage/{{ $project->picture }}" alt="" class="img-fluid">
          </div>
        </div>
    </div>
    @endforeach


    </div>
  </section><!-- End projets Section -->

@endsection 