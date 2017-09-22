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
        <img src="{{asset('static/img/contactenos_banner.png')}}" alt="" class="img-100-2">
        <div class="titulo-img">
          <h1 style="color:white;" class="h1-wtf">Contáctenos</h1>
          <p class="white-img">Real estate for sale & rent, suburb rewiews and local</p>
        </div>
      </div>                    
    </div>
  </div>            
</div>


<section class="topybot HZ1">
  <div class="container">
    <div class="row-fluid pdd-bot-50">
      <div class="span6 responsive-bot">
        <h2 class="celeste" style="margin-bottom: 18px;">¿Cómo podemos ayudarte?</h2>
        <p style="font-size: 15px;">Ingrese sus datos en el formulario a continuación y nos contactaremos con usted a la brevedad.</p>
        <p style="font-size: 15px;margin: 0 0 5px 0;" class="bold" style="margin-bottom: 5px;">Central telefónica:</p>
        <p style="font-size: 15px;">+51 965 458 123</p>
      </div>
      <div class="span6 cate-border form-contacto">
        <form action="calculator.php" id="calculator" class="forms-1">
          <p style="margin: 10px 0 5px 0;"><span class="bold">Nombre completo </span></p>
          <div>                                                
          <input type="text" required="" name="price">
          </div> 
          <p style="margin: 10px 0 5px 0;"><span class="bold">Teléfono </span></p>
          <div>                                                
          <input type="text" required="" name="price">
          </div> 
          <p style="margin: 10px 0 5px 0;"><span class="bold">Correo electrónico </span></p>
          <div>                                                
          <input type="text" required="" name="price">
          </div> 
          <p style="margin: 10px 0 5px 0;"><span class="bold">Mensaje </span></p>
          <div>                                                
          <textarea name="para" id="" cols="30" rows="10" style="width: 100%;height: 120px;"></textarea>
          </div> 
          <div>
            <input type="submit" class="button boton-detalle azul" value="Enviar mensaje">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End content info-->

@stop