@php
    Request::is('actualites');
@endphp

@extends('layouts.app')

@section("title")
Actualités
@endsection 

@section("content")
  <!-- ======= projets Section ======= -->
<section id="news" class="">
  <div class="container">
    <div class="section-title my-4">
      <h2>Découvrez ce qui se passent</h2>
      <p></p>
    </div>
  </div>
</section><!-- End projets Section -->

<!-- ======= Actualite Section ======= -->
@foreach ($news as $new)
<section id="" class="p-0">
  <div class="container">
      <div class="row">
          <div class="col-8">
              <h6 class="bg-primary text-white p-3 mb-0" id="title-actualite">{{ $new->title }}</h6>
              <strong class="d-inline-block mb-2 text-primary">{{ $new->domain }}</strong>
              <p>{{ $new->content }}</p>
              <div class="mb-1 text-muted">{{ $new->created_at }}</div>
          </div>

          <div class="col-4">
              <div class="content">
                  <picture>
                      <source srcset="" type="image/svg+xml">
                          <img src="{{ 'storage/'.$new->picture }}" class="img-fluid img-thumbnail" alt="{{ $new->title }}">
                    </picture>
                </div>
          </div>
      </div>
  </div>
</section><!-- End Actualite -->
@endforeach

@endsection 