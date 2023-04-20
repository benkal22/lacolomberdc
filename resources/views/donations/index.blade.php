@php
    Request::is('donations');
@endphp

@extends('layouts.app')

@section("title")
Dons
@endsection

@section("content")

<div class="container">
  <!-- ======= Contact Section ======= -->
  <section id="" class="">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Faire un don</h2>
        <p>Le peuple congolais a besoin de vous ! Faites un don et aidez ce peuple démuni.</p>
        <p>Remplissez le formulaire suivant svp :</p>
      </div>
      <div class="alert alert-danger">
        <h2 class="text-center">Désolé, ce service est suspendu. Pour toute donation, veuillez nous contacter par contact@lacolomberdc.com </h2>
      </div>
      <form action="" method="post" role="form" class="mt-4">
        {{ csrf_field() }}
        <div class="row g-5">
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
          @endif

          <!-- ======= Mon Don ======= -->
          <div class="col-md-3">
            <h4 class="">Mon don <span class="badge bg-primary rounded-pill">1</span></h4>
            <p class="mb-3">Donner tous les mois</p>
            <div class="row form-group mb-3">
              <div class="col-md-2">
                <button class="text-center btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                  25$
                </button>
              </div>
              <div class="col-md-2">
                <button class="text-center btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                  50$
                </button>
              </div>
              <div class="col-md-1">
                <button class="text-center btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
                  100$
                </button>
              </div>
            </div>
            <p class="mb-0">Montant libre</p>
            <div class="row form-group">
              <div class="col-5">
                <input type="number" name="montant" class="form-control" id="montant" placeholder="Votre montant">
              </div>
              <div class="col-2">
                <button class="text-center btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" disabled>
                  $
                </button>
              </div>
            </div>
          </div>
          <!-- ======= Mes Coordonnées ======= -->
          <div class="col-md-9 order-md-second">

            <h4 class="mb-3">Mes coordonnées <span class="badge bg-primary rounded-pill">2</span></h4>

            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Prénom</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Svp renseignez le prénom, c'est obligatoire.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Svp renseignez le nom, c'est obligatoire.
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                  <input type="email" class="form-control" id="email" placeholder="vous@exemple.com">
                  <div class="invalid-feedback">
                    Svp renseignez une adresse email valide.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Adresse</label>
                  <input type="text" class="form-control" id="address" placeholder="82 Avenue Leopold, Gombe" required>
                  <div class="invalid-feedback">
                    Svp renseignez votre adresse.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address2" class="form-label">Adresse 2 <span class="text-muted">(Optionel)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Appartement ou bureau">
                </div>

                <div class="col-md-5">
                  <label for="country" class="form-label">Pays</label>
                  <select class="form-select" id="country" required>
                    <option value="">Choisir...</option>
                    <option>Congo - Kinshasa</option>
                  </select>
                  <div class="invalid-feedback">
                    Svp, choisissez un pays valide.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">Ville</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>Kinshasa</option>
                  </select>
                  <div class="invalid-feedback">
                    Svp, choisissez une ville valide.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Adresse postale</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Svp, renseignez une adresse postale.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Paiement</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Carte de crédit</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Carte de débit</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Noms de la carte</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Le nom lié à votre compte</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Numéro de carte</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Svp, Numéro de carte de crédit est obligatoire.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Svp, Date d'expiration de carte est obligatoire.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Svp, le code de sécurité est obligatoire.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <button class="disabled w-100 btn btn-primary btn-lg" type="submit">Continuer envoie</button>
            </form>
          </div>
          <!-- End Mes Coordonnées -->
        </div>
      </form>

    </div>
  </section><!-- End Contact Section -->
</div>

@endsection
