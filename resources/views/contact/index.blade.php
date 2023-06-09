@php
    Request::is('contact');
@endphp

@extends('master')
@section("content")

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact mt-5 ">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Laissez-nous un message, ici :</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.0242970374197!2d15.28909515015269!3d-4.4065540482142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3a0c9fd91343%3A0xe0590bc9bbc77160!2s108%20By%20Pass%2C%20Kinshasa!5e0!3m2!1sfr!2scd!4v1678908735423!5m2!1sfr!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Adresse :</h4>
              <p>15, Av. Basoko, Q.Basoko, C/Ngaliema, Kinshasa</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email :</h4>
              <p>benkal@benkalsoft.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Téléphone :</h4>
              <p>+243 82 82 26 705</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          @if(Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif
          <form action="{{ route('contact.store') }}" method="post" role="form">
            {{ csrf_field() }}
            {{-- <div class="my-3">
                <div class="loading ">Chargement</div>
                <div class="error-message">Message non envoyé. Renvoyez votre message svp !</div>
                <div class="sent-message">Votre message a été envoyé. Merci !</div>
              </div> --}}
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
              </div>  
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <br>
            {{-- <div class="text-center"><button type="submit">Envoyer message</button></div> --}}
            <button class="text-center btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" type="submit">
              Envoyer message
            </button>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection 