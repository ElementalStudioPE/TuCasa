@extends('layouts.master')

@section('content')

<!-- Header-->
<header> 
  <div class="container">

  </div>

</header>

<section class="container" style="padding-top: 50px;padding-bottom: 50px;">
  <!-- Bar properties-->
  <div class="bar_properties back-cels resp-menu-68">
    <div class="row-fluid">
      <div class="span8">
        <div class="search_box row-fluid search_box1">
          <form action="propertys.html">
            <div class="span4">
              <select class="mar-top-9 height-37" name="location">
                <option value="info_location">Ciudad</option>
                <option value="info_location">New York</option>
                <option value="info_location">Miami</option>
                <option value="info_location">Toronto</option>
                <option value="info_location">Italy</option>
              </select>
            </div>
            <div class="span4">
              <select class="mar-top-9 height-37" name="location">
                <option value="info_location">Distrito</option>
                <option value="info_location">New York</option>
                <option value="info_location">Miami</option>
                <option value="info_location">Toronto</option>
                <option value="info_location">Italy</option>
              </select>
            </div>
            <div class="span2">
              <select class="mar-top-9 height-37" name="area">
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
              <input type="submit" class="button button-propiedades" value="Filtrar">
            </div> 
          </form>                               
        </div>
      </div>
      <div class="span4 res-nones">
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

@stop