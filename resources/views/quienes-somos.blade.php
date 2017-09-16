<style>
  body{
    background: white !important;
  }
  @media only screen and (max-width: 767px){
.suscr-blue{
    height: 38px !important;
    width: 97% !important;
  }
</style>
@extends('layouts.master')

@section('content')

<div>
  <div class="conta-100 resp-menu-100">
    <div class="row-fluid"> 
      <div class="span12">
        <img src="{{asset('static/img/quienesomos_banner.png')}}" alt="" class="img-100-2">
        <div class="titulo-img">
          <h1 style="color:white;" class="h1-wtf">Quiénes somos</h1>
          <p class="white-img">Real estate for sale & rent, suburb rewiews and local</p>
        </div>
      </div>                    
    </div>
  </div>            
</div>


<section class="topybot">
  <div class="container">
    <div class="row-fluid pdd-bot-50">
      <div class="span2 pd-top-10">
      </div>
      <div class="span8">
        <h1 class="titulo-servicios">Overview</h1>
        <p><span class="celeste" style="font-weight:bold;">tucasa.pe </span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem itaque labore sapiente ad repellat quam animi exercitationem, recusandae asperiores id provident eum deserunt, sed, deleniti ipsum eveniet. Quas, sunt, libero Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, dolor officia esse, voluptas harum numquam corporis dolorem! Voluptatem inventore, atque in dolores velit, totam, assumenda dolorum cupiditate esse corporis aspernatur!</p>
      </div>
      <div class="span2 pd-top-10">
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <img src="{{asset('static/img/linea-azul.png')}}" alt="" class="img-respo img-respo2">
      </div>
    </div>
    <div class="row-fluid pdd-bot-50 padd-top-50">
      <div class="span4">
        <h3 class="ama-nara">Quienes somos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem itaque labore sapiente ad repellat quam animi exercitationem, recusandae asperiores id provident eum deserunt, sed, deleniti ipsum evenie, dolor officia esse, voluptas harum numquam corporis dolorem! Voluptatem inventore, atque in dolores velit, totam, assumenda dolorum cupiditate esse corporis aspernatur!</p>
      </div>
      <div class="span4">
        <h3 class="ama-nara">Nuestra misión</h3>
        <p>Lorem ipsum dolor sit amet, consrcitationem, recusandae asperiores id provident eum deserunt, sed, deleniti ipsum eveniet. Quas, sunt, libero Lor¿ elit. Rerum, dolor officia esse, voluptas harum numquam corporis dolorem! Voluptatem inventore, atque in dolores velit, totam, assumenda dolorum cupiditate esse corporis aspernatur!</p>
      </div>
      <div class="span4">
        <h3 class="ama-nara">Nuestra filosofía</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem itaque labore sapiente ad repellat quam animi exercitationem, r¿, sunt, libero Lorem ipsum dolor sit amet, consectetur adipisicing einventore, atque in dolores velit, totam, assumenda dolorum cupiditate esse corporis aspernatur!</p>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <img src="{{asset('static/img/linea-azul.png')}}" alt="" class="img-respo img-respo2">
      </div>
    </div>
    <section class="full_info">
        <div class="row">
        <h2 class="celeste margin-30">Te orientamos</h2>

          <!-- Step 1 -->
          <div class="span6 display-in-bx">
            <div>
              <img src="http://localhost/proyectos/tucasape/public/static/img/icono01.png" alt="" class="m-w-100">
            </div>
            <div class="mar-left-right-20">
              <h4>¿Alguilar o comprar?</h4>
              <p>No está seguro si debe alquilar o comprar? Podemos ayudarle a hacer los cálculos y tomas la decisión correcta.</p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="span6 display-in-bx">
            <div>
              <img src="http://localhost/proyectos/tucasape/public/static/img/icono02.png" alt="" class="m-w-100">
            </div>
            <div class="mar-left-right-20">
              <h4>Cotizaciones</h4>
              <p>Facilitar el movimiento. Recibe hasta 4 cotizaciones libres de los motores de alta calidad con moving.com</p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="span6 display-in-bx">
            <div>
              <img src="http://localhost/proyectos/tucasape/public/static/img/icono03.png" alt="" class="m-w-100">
            </div>
            <div class="mar-left-right-20">
              <h4>El valor de tu casa</h4>
              <p>Encontrar al instante el valor de su casa y conectar con un agente local para guiarlo a través del proceso de venta.</p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="span6 display-in-bx">
            <div>
              <img src="http://localhost/proyectos/tucasape/public/static/img/icono04.png" alt="" class="m-w-100">
            </div>
            <div class="mar-left-right-20">
              <h4>¿Deseas vender?</h4>
              <p>Hay muchos para pensar en la hora de vender, y estamos aquí para ayudar. Echa un vistazo a estos consejos y trucos</p>
            </div>
          </div>
        </div>
    </section>
  </div>
</section>
<!-- End content info-->

@stop