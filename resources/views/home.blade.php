@php
    Request::is('home');
@endphp

@extends('layouts.app')

@section("title")
Accueil
@endsection

@section('content')
<div class="container">
    <div class="text-center bg-image" style="
      background-image: url('assets/img/banniereWeb.jpg');
      height: 400px;
    ">
      <div class="p-4 mask" style="background-color: rgba(0, 0, 0, 0.6); height: 400px;">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Bienvenue à La Fondation La Colombe RDC</h1>
            <h4 class="mb-3">Nous luttons contre la pauvreté des populations, en soutenant les initiatives des communautés à la base.</h4>
            <a class="btn btn-outline-light btn-lg" href="{{ route('dons') }}" role="button">Faire un don</a>
          </div>
        </div>
      </div>
    </div>
  <!-- Background image -->

    <!-- ======= projets Section ======= -->
    <section id="" class="projets">
    <div class="container">
      <div class="section-title mb-1">
        <h2>Nos projets contre la pauvreté</h2>
        <p>Voici, nos quelques projets phares mis en place pour lutter contre la pauvreté en République Démocratique du Congo :</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Centre agricole</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Centre de formation professionnelle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Ecole rurale de Vunda Di Masengi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Programme : 3ème génération</a>
            </li>
          </ul>
          <a href="{{ route('projets') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Voir </span>plus</a>
        </div>

        <div class="col-lg-9">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Centre agricole</h3>
                  {{-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> --}}
                  <p> Nous entreprenons des activités de production et de la transformation jusqu'à distribuer les aliments aux destinataires finaux peuvent les acquérir pour consommation ultérieure ou les consommer sur place.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/accueil/projets-agricol.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Centre de formation professionnelle</h3>
                  {{-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> --}}
                  <p>Nous avons mis en place un centre de formation professionnel avec le but de développer les compétences professionnelles des démunis.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/accueil/projets-centre.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Ecole rurale de Vunda Di Masengi</h3>
                  {{-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> --}}
                  <p>Aider les enfants démunis du village en leurs fournissant une éducation de qualité.</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/accueil/projets-vunda.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Programme : 3ème génération</h3>
                  <p>Un programme permettant aux potentiels leaders de la nouvelle génération de contribuer positivement à la gestion des biens communs dans les différents secteurs de la société pour le développement de l’entrepreneuriat rural et urbain. </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/accueil/projets-3emegeneration.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End projets Section -->

  <!-- ======= Nos Objectifs Section ======= -->
  <section id="" class="">
    <div class="container">
      <div class="section-title">
        <img src="assets/img/accueil/goal.png" alt="img-fluid" class="img-icon img-circle" max-width="100">
        <h2>Nos Objectifs</h2>
        <h6>Notre objectif principal vise à améliorer les conditions de vie de la population.</h6>
        <p>Ainsi, nos objectifs spécifiques s'articulent autour des points suivants : </p>
        <p>- Former les acteurs de développement à tous les niveaux ;</p>
        <p>- Développer les activités génératrices de revenus ; </p>
        <p>- Appuyer les initiatives communautaires de développement à la base ;</p>
        <p>- Etc.</p>
        <a href="{{ route('apropos') }}" class="btn btn-white border border-secondary">Voir plus</a>
      </div>
    </div>
  </section><!-- End Nos Objectifs Section -->

    <!-- ======= A la UNE Section ======= -->
    <section id="" class="">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="section-title w-50">
            {{-- <img src="assets/img/accueil/goal.png" alt="img-fluid" class="img-icon img-circle" max-width="100"> --}}
            <h2>A la une</h2>
            <p>Actualités, événements et reportages au cœur des activités de la Fondation La Colombe RDC et celles de ses programmes ou institutions spécialisées. </p>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Développement social</strong>
                <h3 class="mb-0">Formation en Entrepreneuriat</h3>
                <div class="mb-1 text-muted">24 Mars</div>
                <p class="card-text mb-auto">Une opportunité pour acquérir l'inspiration et les informations nécessaires pour entreprendre.</p>
                <a href="{{ route('actualites') }}" class="stretched-link">Continuer la lecture</a>
              </div>
              <div class="col-auto d-none d-lg-block">

                <img src="assets/img/accueil/training_business.jpg" width="250" alt="img-fluid" class="bd-placeholder-img" max-width="100">

                {{-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Agronomie</strong>
                <h3 class="mb-0">Culture des tomates</h3>
                <div class="mb-1 text-muted">20 Mars</div>
                <p class="mb-auto">Début des travaux de culture des tomates à la ferme de Kinzimbula.</p>
                <a href="{{ route('actualites') }}" class="stretched-link">Continuer la lecture</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="assets/img/accueil/tomates.jpg" width="180" alt="img-fluid" class="bd-placeholder-img" max-width="100">
                {{-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End A la UNE Section -->

     <!-- ======= Nos Organes Section ======= -->
     <section id="" class="">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="section-title w-50">
            {{-- <img src="assets/img/accueil/goal.png" alt="img-fluid" class="img-icon img-circle" max-width="100"> --}}
            <h2>Nos organes principaux</h2>
            <p>Les organes principaux de la Fondation La Colombe RDC, établis lors sa création en 2003, sont l'Assemblée générale, le Comité Directeur, le Secrétariat Général et la Commission de Surveillance.</p>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-3">
            <div class="section-title">
              <img src="assets/img/accueil/ag.png" alt="img-fluid" class="img-icon img-circle" max-width="100">
              <h4>Assemblée générale</h4>
              <p>L’Assemblée générale est l'organe supême d'orientation et de prise des décisions de l'Association. Elle représente l'universalité des membres effectifs.</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="section-title">
              <img src="assets/img/accueil/cd.png" alt="img-fluid" class="img-icon img-circle" max-width="100">
              <h4>Comité Directeur</h4>
              <p>Le Comité Directeur est l'organe d'exécution et de suivi des décisions de l'Assemblée Générale. Il est composé de 9 membres.</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="section-title">
              <img src="assets/img/accueil/sg.png" alt="img-fluid" class="img-icon img-circle" max-width="100">
              <h4>Secrétariat Général</h4>
              <p>L'organe d'exécution quotidienne de toutes les activités de la Fondation et dont l'organisation est confiée à un organe exécutif.</p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="section-title">
              <img src="assets/img/accueil/cs.png" alt="img-fluid" class="img-icon img-circle" max-width="100">
              <h4>Commission de Surveillance</h4>
              <p>La Commission de Surveillance est un organe de suivi et de contrôle garantissant l'efficacité de la gestion de la FOCOL.</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Nos Organes Section -->

     <!-- ======= Nos Images Section ======= -->
     <section id="" class="">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="section-title w-50">
            {{-- <img src="assets/img/accueil/goal.png" alt="img-fluid" class="img-icon img-circle" max-width="100"> --}}
            <h2>La FOCOL RDC en images</h2>
            <p>Découvrez en images l’action de l’Organisation des Nations Unies et celle de ses fonds, programmes et institutions spécialisées</p>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-6">
            <div class="section-title">
              <div class="col-auto d-none d-lg-block">
                <img src="assets/img/accueil/section_images_1.jpg" width="500" alt="img-fluid" class="bd-placeholder-img" max-width="100">
              </div>
              <p>L'équipe du centre de formation en quête des candidats pour être formés à la FOCOL RDC.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="section-title">
              <div class="col-auto d-none d-lg-block">
                <img src="assets/img/accueil/section_images_2.jpg" width="500" alt="img-fluid" class="bd-placeholder-img" max-width="100">
              </div>
              <p>Les apprenants du Centre la FOCOL en pleine apprentissage (Le cours d'Anglais).</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Nos images Section -->
</div>
@endsection
