@php
    Request::is('projets');
@endphp

@extends('master')

{{-- @section("title", "Projets et zones d'interventions") --}}
@section("content")

 <!-- ======= projets Section ======= -->
 <section id="projets" class="projets">
  <div class="container">

    <div class="section-title my-4">
      <h2>Nos projets contre la pauvreté</h2>
      <p>Nous intervenons dans les zones suivants : Distribution alimentaire, Création de centres de formations, Collecte de vêtements, Forage de puits.</p>
    </div>

    <div class="row mb-2">
      <h2>Distribution alimentaire</h2>
        <div class="col-md-6">
          <p> Nous entreprenons des activités de production et de la transformation jusqu'à distribuer les aliments aux destinataires finaux peuvent les acquérir pour consommation ultérieure ou les consommer sur place.</p>
        </div>

        <div class="col-md-6">
          <div class="col-auto d-none d-lg-block">
            <img src="assets/img/accueil/projets-aliment.jpg" alt="" class="img-fluid">
          </div>
        </div>
    </div>

    <div class="row mb-2">
      <h2>Création de centres de formations</h2>
        <div class="col-md-6">
          <p>Nous mettons en place des centres de formations professionnelles avec le but de développer les compétences professionnelles des démunis.</p>          
        </div>

        <div class="col-md-6">
          <div class="col-auto d-none d-lg-block">
            <img src="assets/img/accueil/projets-centre.jpg" alt="" class="img-fluid">            
          </div>
        </div>
    </div>

    <div class="row mb-2">
      <h2>Collecte de vêtements</h2>
        <div class="col-md-6">
          <p>Nous collectons des vêtements pour les distribuer aux gens qui en manquent.</p>
        </div>

        <div class="col-md-6">
          <div class="col-auto d-none d-lg-block">
            <img src="assets/img/accueil/projets-vetement.jpg" alt="" class="img-fluid">            
          </div>
        </div>
    </div>

    <div class="row mb-2">
      <h2>Forage de puits d'eau</h2>
        <div class="col-md-6">
          <p>Nous fournissons de l’Eau Potable en Contribuant à la construction de conduits d’Eau Et Pompes afin de protéger les démunis de maladies d’origine hydrique et d'améliorer la santé des communautés.</p>          
        </div>

        <div class="col-md-6">
          <div class="col-auto d-none d-lg-block">
            <img src="assets/img/accueil/projets-eau.jpg" alt="" class="img-fluid">            
          </div>
        </div>
    </div>

  </div>
</section><!-- End projets Section -->

@endsection 