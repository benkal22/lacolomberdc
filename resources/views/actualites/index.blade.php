@php
    Request::is('actualites');
@endphp

@extends('master')

{{-- @section("title", "Actualites") --}}

@section("content")

 <!-- ======= Apropos Section ======= -->
 <section id="" class="d-flex align-items-center mt-5">
    <div class="container">
      <h1>Découvrez ce qui se passent</h1>
      <div class="row">
        <div class="col-8">
            <h6>Actualité 1</h6>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae facere totam cum, officia numquam vel sunt ullam a quas molestias, reprehenderit fugit quia quibusdam inventore illo animi sed placeat velit?</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt omnis sapiente modi consectetur aut blanditiis laboriosam vero impedit tempore delectus, et eligendi fugiat adipisci ex nostrum alias ducimus dolor esse.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic impedit dolores perferendis accusamus accusantium veritatis, exercitationem ab! Perferendis id ad similique eaque! Alias quibusdam adipisci repellendus explicabo tenetur nesciunt ipsam.
            </p>
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

@endsection 