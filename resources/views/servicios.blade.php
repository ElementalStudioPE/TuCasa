@extends('layouts.master')
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
@section('content')

<div>
  <div class="conta-100 resp-menu-100">
    <div class="row-fluid"> 
      <div class="span12">
        <img src="{{asset('static/img/servicios_banner.png')}}" alt="" class="img-100-2">
        <div class="titulo-img">
          <h1 style="color:white;" class="h1-wtf">Servicios</h1>
          <p class="white-img">Real estate for sale & rent, suburb rewiews and local</p>
        </div>
      </div>                    
    </div>
  </div>            
</div>


<section class="topybot">
  <div class="container pdd-3030">
    <div class="row-fluid" style="padding-bottom: 50px;">
      <div class="span6 center-2">
        <h1 class="titulo-servicios">Alquiler</h1>
        <p class="size-19-respon"><span class="celeste" style="font-weight:bold;">tucasa.pe </span> , we connect people with a place to call home. Our easy-to-use marketplace helps renters explore verified listings from communities we know and trust. Whether searching for an apartment, or home, renters can make informed decisions.</p>
      </div>
      <div class="span6 pd-top-10">
        <img src="{{asset('static/img/grafico02.png ')}}" alt="">
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <img src="{{asset('static/img/Sintítulo.png')}}" alt="" class="img-respo img-respo2">
      </div>
    </div>
    <div class="row-fluid" style="padding-top: 50px;padding-bottom: 50px;">
      <div class="span6 pd-top-10">
        <img src="{{asset('static/img/grafico03.png ')}}" alt="">
      </div>
      <div class="span6 center-2 padd-top-50">
        <h1 class="titulo-servicios">Venta</h1>
        <p class="size-19-respon"><span class="celeste" style="font-weight:bold;">tucasa.pe </span> , we connect people with a place to call home. Our easy-to-use marketplace helps renters explore verified listings from communities we know and trust. Whether searching for an apartment, or home, renters can make informed decisions.</p>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <img src="{{asset('static/img/Sintítulo.png')}}" alt="" class="img-respo img-respo2">
      </div>
    </div>
    <div class="row-fluid bullet-color2 padd-top-123">
      <div class="span12">
        <h2 class="titulo-servicios">Tambien te ofrecemos</h2>
        <div>
          <li>Warm and inviting - JanetDeBuskHenslet.com is everthing Knoxville. Tennessseeis.</li>
          <li>This custom agent site that is dynamically built on the Wordpress platform is at once stylish and functional.</li>
          <li>Thes crisp images and subtle design elements are balanced with well-curated and well-placed content. Form</li>
          <li>The font to the color scheme, the website alludes to the graciousness and charm of laid- back Knoxville.</li>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End content info-->

@stop