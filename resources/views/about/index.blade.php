@php
    Request::is('apropos');
@endphp

@extends('layouts.app')

@section("title")
A propos
@endsection

@section("content")
 <!-- ======= Apropos Section ======= -->
 <section id="projets" class="projets">
  <div class="container">
    <div class="section-title my-4">
      <h2>Qui sommes-nous ?</h2>
    </div>
    <div class="row">
      <h2>Nous améliorons la condition des vies de la population congolaise.</h2>
      <div class="col-8">
        <h3>Nos objectifs spécifiques s'articulent autour des points suivants : </h3>
        <p>- Former les acteurs de développement à tous les niveaux ;</p>
        <p>- Développer les activités génératrices de revenus ; </p>
        <p>- Appuyer les initiatives communautaires de développement à la base ;</p>
        <p>- Appuyer les activités des soins de santé primaires et celle de la lutte contre le VIH/SIDA ;</p>
        <p>- Etc.</p>
      </div>
      <div class="col-4">
        <div class="content">
            <picture>
                <source srcset="" type="image/svg+xml">
                    <a href="https://www.freepik.com/free-photo/diverse-hands-touching-white-paper_13463057.htm#query=about&position=16&from_view=search&track=sph"></a>
                <img src="/assets/img/apropos/apropos1.jpg" class="img-fluid img-thumbnail" alt="...">
              </picture>
          </div>
      </div>
    </div>
  </div>
</section><!-- End Apropos -->

<!-- ======= equipe Section ======= -->
<section id="equipe" class="equipe mt-0">
    <div class="container">

      <div class="section-title">
        <h2>Equipe</h2>
        <p></p>
      </div>

      <div class="row">
        @foreach ($teams as $team)
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ 'storage/' . $team->picture }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>{{ $team->names }}</h4>
                <span>{{ $team->post }}</span>
                <p>{{ $team->task }}</p>
              <div class="social">
                <a href="{{ $team->link_twitter }}"><i class="ri-twitter-fill"></i></a>
                <a href="{{ $team->link_facebook }}"><i class="ri-facebook-fill"></i></a>
                <a href="{{ $team->link_instagram }}"><i class="ri-instagram-fill"></i></a>
                <a href="{{ $team->link_linkedin }}"> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

    </div>
</section><!-- End equipe Section -->

@endsection
