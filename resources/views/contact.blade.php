@extends('layouts.plantilla')
@section('title', 'Madajero | Inicio')

@section('contenido')

<style>
  .banner-image {
    background-image: url('img/fondos/fondo-contactanos.jpg');
    background-size: cover;
  }
</style>

<!-- Banner Image heroes  -->
<section class="banner-image">
  <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
      <h1 class="text-white text-center">Contactenos</h1>
      <h1 class="text-white text-center">Para todas sus dudas y aclaraciones</h1>
    </div>
  </div>
</section>

<!--  Form  -->
<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Contact us</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label">First Name</label>
                  <input class="form-control" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="input-group mb-4 input-group-static">
              <label>Your message</label>
              <textarea name="message" class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-switch mb-4 d-flex align-items-center">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                  <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

  

@endsection