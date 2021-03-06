@extends('layouts.plantilla')
@section('title', 'Madajero | Inicio')

@section('contenido')

   
<style>
  .banner-image {
    background-image: url('img/fondos/fondo-home.jpg');
    background-size: cover;

  }
</style>

  <!-- Banner Image heroes  -->
  <section id="banner-image" class="banner-image">
    <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <h1>Planeacion, desarrollo y ejecucion de servicios de ingenieria</h1>
      </div>
    </div>
  </section>

    <!-- Banner text  -->

    <section id="banner-text" class="banner-text ">
      <div class="p-5 mb-4 ">
        <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h2 class="col-md-10">Ingenieria es lo que hacemos</h2>
            <h3 class="display-6 fw-bold ">Grupo constructor Madajero proyectos de calidad </h3>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="aliboton">
              <a class="btn btn-main" href="#">Saber más</a>
              </div>
          </div>
        </div>
  
        </div>
      </section>


<!-- Banner text  -->

<!-- Seccion de servicios  -->

<section id="servicios-home" class="d-flex titulo parrafo fondoGriss">
  <div class="container centrarob">
    <div class="container">
      <div class="">
        <h1>Servicios</h1>
      </div>
    </div>
    

    <div class="row icon-boxes">

      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div>
          <div class="icon-box">
          <img src="img/iconos/proyecto-128px.png" class="img-fluid client-services" alt="">
          </div>
          <h4 class="py-3">
            Elaboración de proyectos ejecutivos
          </h4>
      </div>
    </div>

      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
        <div>
          <div class="icon-box">
          <img src="img/iconos/planeacion-128px.png" class="img-fluid client-services" alt="">
          </div>
          <h4 class="py-3">
            Integración y planeación de obras
          </h4>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
      <div>
        <div class="icon-box">
        <img src="img/iconos/supervicion-128px.png" class="img-fluid client-services" alt="">
        </div>
        <h4 class="py-3">
          Coordinación y supervisión de obras
        </h4>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
    <div>
      <div class="icon-box">
      <img src="img/iconos/obras-128px.png" class="img-fluid client-services" alt="">
      </div>
      <h4 class="py-3">
        Ejecución de obras
      </h4>
  </div>
</div>

    </div>
        
  <div class="alibotonser">
    <a class="btn btn-main" href="#">Saber más</a>
  </div>
</div>
</section>


<!-- Seccion de servicios  -->

<!-- Nosotros  -->
<section id="nosotros-home" class="titulo parrafo servicios-text">
  <div class="container p-5 mb-4">
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2 " data-aos="fade-left" data-aos-delay="100">
        <img src="img/fondos/fondo-nosotros-home.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h1>Nosotros</h1>
        <h4>
          Grupo madajero se constituye como una empresa integral para la planeación, desarrollo y ejecución de
          servicios de ingeniería;
          construcción, supervisión y mantenimiento de obras residenciales, comerciales e industrial bajo
          especificaciones o requerimientos propios que demandan el proyecto o lugar de aplicación.
        </h4>
        <div class="aliboton">
        <a class="btn btn-main" href="#">Saber más</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Nosotros  -->
<section id="contador" class="contador-home">
  <div class="container centrarCounter">
    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">

      <!-- primer contador-->
      <div >
        <div class="counters-item">
          <i class="tf-ion-ios-alarm-outline"></i>
          <div>
            <span class="counter" data-count="2003">0</span>
          </div>
          <h3>Año de<br>establecimiento</h3>
        </div>
      </div>

      <!-- segundo item -->
      <div>
        <div class="counters-item">
          <i class="tf-ion-ios-analytics-outline"></i>
          <div>
            <span class="counter" data-count="250">0</span>
          </div>
          <h3>Proyectos<br>completados</h3>
        </div>
      </div>

      <!-- tercer item -->
      <div>
        <div class="counters-item">
          <i class="tf-ion-ios-compose-outline"></i>
          <div>
            <span class="counter" data-count="850">0</span>
          </div>
          <h3>Costrucciones<br>concretadas</h3>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Proyectos  -->
<section id="proyectos-home" class="titulo subtitulo fondoGriss">
  <div class="text-proyectos p-3 text-center">
    <h2>Que hacemos</h2>
    <h1>Nuestros proyectos</h1>
  </div>
  <div class="gallery min-vh-100 container-lg py-3">
    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
      <div class="">
        <img src="img/proyectos/2.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="img/proyectos/3.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="img/proyectos/4.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="img/proyectos/5.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="img/proyectos/6.jpg" class="gallery-item" alt="gallery">
      </div>
      <div class="">
        <img src="img/proyectos/7.jpg" class="gallery-item" alt="gallery">
      </div>
    </div>
  </div>
  <div class="aliboton">
    <a class="btn btn-main" href="#">Saber más</a>
  </div>
</section>
<!-- Proyectos  -->

<!-- Clientes  -->

<section id="clientes-home" class="titulo subtitulo">
  <div class="container">
    <div class="text-clientes p-3 text-center">
      <h2>Nuestros clientes</h2>
      <h1>Creemos que cada cliente es una asociacion a largo plazo</h1>
    </div>
  </div>
    <div class="clientes-h container">
      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo1.png" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo-2.png" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo-3.png" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
          <div>
            <img src="img/logos/logo-4.png" alt="">
          </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo-5.png" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo1.png" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo-2.png" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo-3.png" alt="">
        </div>
      </div>
      
      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
          <div>
            <img src="img/logos/logo-4.png" alt="">
          </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6 mb-4">
        <div>
          <img src="img/logos/logo-5.png" alt="">
        </div>
      </div>
    </div>
</section>


<!-- Clientes  -->

 

@endsection

