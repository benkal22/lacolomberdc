
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Message reçu</h2>
      </div>

      <div class="row">
        <div class="col-6">
          <h5>Nom : {{ $data->name }}</h5>
        </div>
        <div class="col-6">
          <h5>Email : {{ $data->email }}</h5>
        </div>
      </div>

      <h5>Sujet :<strong>{{ $data->subject }} </strong></h5>
            
      <h5>Message : {{ $data->message }}</h5>

    </div>
  </section><!-- End Contact Section -->