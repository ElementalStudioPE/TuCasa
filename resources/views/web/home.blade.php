@extends('layouts.master')

@section('content')

<!-- Header-->
<header> 
  <div class="container">

  </div>


  <!-- Slide -->           
  <div class="">
    <!-- Item Slide -->  
    <div style="background-image: url({{asset('static/img/header.png')}});height: 100vh;
background-size: cover;
background-position: 50% 50%;"  data-src="">
<div class="">
  <div class="container"> 
    <div style="margin-top: 30% !important;">
      <div style="text-align: center;line-height: 35px;margin-bottom: 40px;" id="whitex">
        <h1 class="blanco media-slider-s">La casa que buscas está aquí</h1>
        <p class="blanco text-title-mid">Real estate for sale & rent, suburb reviews and local</p>
      </div>
      <div class="search_box row-fluid form-slider saes">
        <form action="propertys.html">
          <div class="span3">
            <label class="inputs-form-sli">Ciudad</label>
            <select name="location">
              <option value="info_location">Lima</option>
              <option value="info_location">New York</option>
              <option value="info_location">Miami</option>
              <option value="info_location">Toronto</option>
              <option value="info_location">Italy</option>
            </select>
          </div>
          <div class="span3">
            <label class="inputs-form-sli">Distrito</label>
            <select name="price">      
              <option>Santiago de Surco</option>                                  
              <option value="info_price">0 - 300.000</option>
              <option value="info_price">300.000 - 500.000</option>
              <option value="info_price">500.000 - 800.000</option>
              <option value="info_price">800.000 - 1.000.000</option>
              <option value="info_price">10.000.000 +</option>
            </select>
          </div>
          <div class="span3">
            <label class="inputs-form-sli">Rango de precio</label>
            <select name="area">
              <option>300.000 - 500.000</option>
              <option value="info_area">0 - 60 m²</option>
              <option value="info_area">60 m² - 90 m²</option>
              <option value="info_area">90 m² - 150 m²</option>
              <option value="info_area">150 m² - 240 m²</option>
              <option value="info_area">240 m² - 360 m²</option>
              <option value="info_area">360 m² - 480 m²</option>
              <option value="info_area">480 m² - 600 m²</option>
              <option value="info_area">More 600 m²</option>
            </select>
          </div>
          <div class="span3">
            <input type="submit" class="button button-form-slider" value="Filtrar búsqueda">
          </div> 
        </form>                               
      </div>  
    </div>                                    
    <br>                    
  </div> 
</div>
</div>
<!-- End Item Slide -->   
</div>  
<!-- End Slide -->   
</header>
<!-- End Header-->

<section class="padd-bttms" style="background: white;">
  <div  class="container">
    <div class="row-fluid">
      <div class="span6" style="margin-top: 20px;">
        <h1 class="title-house">Encuentra <span style="font-weight: bold;">La casa</span> que deseas</h1>
        <p class="enc-casa">
          Filter apartments by price, rooms, neighborhoods, and subway line. We highlight the best places in each hood with beautiful photo stories.
        </p>
        <p class="celeste sub- media-dub">Empieza tu búsqueda <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
      </div>
      <div class="span6">
        <img src="{{asset('static/img/grafico01.png')}}" alt="">
      </div>
    </div>
  </div>
</section>

<!-- End content info -->
<section class="container pdd50">
  <!-- Bar properties-->
  <div class="bar_properties back-cels" id="filtro-2">
    <div class="row-fluid">
      <div class="span8">
        <div class="search_box row-fluid search_box1">
          <form action="propertys.html">
            <div class="span4">
              <select class="mar-top-9" name="location">
                <option value="info_location">Ciudad</option>
                <option value="info_location">New York</option>
                <option value="info_location">Miami</option>
                <option value="info_location">Toronto</option>
                <option value="info_location">Italy</option>
              </select>
            </div>
            <div class="span4">
              <select class="mar-top-9" name="location">
                <option value="info_location">Distrito</option>
                <option value="info_location">New York</option>
                <option value="info_location">Miami</option>
                <option value="info_location">Toronto</option>
                <option value="info_location">Italy</option>
              </select>
            </div>
            <div class="span2">
              <select class="mar-top-9" name="area">
                <option>Area</option>
                <option value="info_area">0 - 60 m²</option>
                <option value="info_area">60 m² - 90 m²</option>
                <option value="info_area">90 m² - 150 m²</option>
                <option value="info_area">150 m² - 240 m²</option>
                <option value="info_area">240 m² - 360 m²</option>
                <option value="info_area">360 m² - 480 m²</option>
                <option value="info_area">480 m² - 600 m²</option>
                <option value="info_area">More 600 m²</option>
              </select>
            </div>
            <div class="span2">
              <input type="submit" class="button" value="Filtrar">
            </div> 
          </form>                               
        </div>
      </div>
      <div class="span4">
        <strong>Ordenar por:</strong>
        <ul>                            
          <li>
            <a href="#">Reciente</a>
            <a href="#" title="Sort Ascending" class="tooltip_hover"><i class="icon-caret-up"></i></a>
            <a href="#" title="Sort Descending" class="tooltip_hover"><i class="icon-caret-down"></i></a>
          </li>
          <li>
            <a href="#">Precio</a>
            <a href="#" title="Sort Ascending" class="tooltip_hover"><i class="icon-caret-up"></i></a>
            <a href="#" title="Sort Descending" class="tooltip_hover"><i class="icon-caret-down"></i></a>
          </li>                            
        </ul>
      </div>
    </div>
  </div>
  <!-- End Bar properties-->

  <!-- End Title-->
  <div class="row-fluid padding_top_mini">
    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title rent"></div>
          <img src="{{asset('static/img/property/1.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->

    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title sale"></div>
          <img src="{{asset('static/img/property/2.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->

    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title sale"></div>
          <img src="{{asset('static/img/property/3.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->

    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title rent"></div>
          <img src="{{asset('static/img/property/4.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->
  </div>
  <!-- End Row-->

  <div class="row-fluid">
    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title rent"></div>
          <img src="{{asset('static/img/property/5.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->

    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title sale"></div>
          <img src="{{asset('static/img/property/6.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->

    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title sale"></div>
          <img src="{{asset('static/img/property/7.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->

    <!-- Item Property-->
    <div class="span3">
      <div class="item_property">
        <a href="{{route('propiedades-detalle')}}">
        <div class="head_property">
          <div class="title rent"></div>
          <img src="{{asset('static/img/property/8.jpg')}}" alt="Image">
        </div>                        
        <div class="info_property">                                  
          <ul>
            <li class=""><strong>Precio: </strong><span>$ 56 000.00</span></li>
            <li><strong>Localización:</strong><span>Chicago</span></li>
            <li class=""><strong>Superficie: </strong><span>100 mts²</span></li>
            <li><strong>Dirección:</strong><span>Chicago City 639</span></li>
          </ul>                                 
        </div>
        </a>
      </div>
    </div>
    <!-- Item Property-->
  </div>
  <!-- End Row-->
</section>
<!-- End content info-->


<!-- Full info-->
<section class="full_info">
  <div class="container">
    <div class="row">
      <h2 class="celeste media-center-blue" style="margin: 0px 10px;">Te orientamos</h2>

      <!-- Step 1 -->
      <div class="span6 display-in-bx">
        <div>
          <img src="{{asset('static/img/icono01.png')}}" alt="" class="m-w-100">
        </div>
        <div class="mar-left-right-20">
          <h4>¿Alguilar o comprar?</h4>
          <p>No está seguro si debe alquilar o comprar? Podemos ayudarle a hacer los cálculos y tomas la decisión correcta.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="span6 display-in-bx">
        <div>
          <img src="{{asset('static/img/icono02.png')}}" alt="" class="m-w-100">
        </div>
        <div class="mar-left-right-20">
          <h4>Cotizaciones</h4>
          <p>Facilitar el movimiento. Recibe hasta 4 cotizaciones libres de los motores de alta calidad con moving.com</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="span6 display-in-bx">
        <div>
          <img src="{{asset('static/img/icono03.png')}}" alt="" class="m-w-100">
        </div>
        <div class="mar-left-right-20">
          <h4>El valor de tu casa</h4>
          <p>Encontrar al instante el valor de su casa y conectar con un agente local para guiarlo a través del proceso de venta.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="span6 display-in-bx">
        <div>
          <img src="{{asset('static/img/icono04.png')}}" alt="" class="m-w-100">
        </div>
        <div class="mar-left-right-20">
          <h4>¿Deseas vender?</h4>
          <p>Hay muchos para pensar en la hora de vender, y estamos aquí para ayudar. Echa un vistazo a estos consejos y trucos</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Full info-->
@stop