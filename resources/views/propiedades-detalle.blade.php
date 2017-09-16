@extends('layouts.master')

@section('content')

<div class="section_title properties celes-top">
  <div class="container responsive-container">
    <div class="row-fluid"> 
      <div class="span9">
        <p class="mar-lleft-21"><span>Home</span><span>></span><span>Propiedades</span><span>></span><span class="celeste">Departamento en miraflores</span></p>
      </div>                    
    </div>
  </div>            
</div>


<section class="topybot">
  <div class="container" style="background: white;padding-bottom: 0px;">
    <div class="row-fluid padd-bott-39">
      <div class="span7 izq-slid">
        <div>
          <h2 class="celeste">Miraflores</h2>
          <p class="celeste font-18">Av. Comandante Espinar 256</p>
          <p style="font-weight: 700;"><span class="precio-st">$2,700 |</span>Localización: Chicago <span>|</span>Superficie: 100 mts²</p>
        </div>
        <div>
          <div class="camera_wrap" id="slide_details" style="height: 406px;"><div class="camera_fakehover"><div class="camera_src camerastarted paused">
            <!-- Item Slide -->  
            <div data-src="{{asset('static/img/property/5.jpg')}}">

            </div>
            <!-- End Item Slide -->  
            <!-- Item Slide -->  
            <div data-src="{{asset('static/img/property/7.jpg')}}">

            </div>
            <!-- End Item Slide -->                             
          </div><div class="camera_target">
          <div class="cameraCont">
            <div class="cameraSlide cameraSlide_0" style="visibility: visible; display: none; z-index: 1; margin-left: 0px; margin-top: 0px;">
              <img src="{{asset('static/img/property/5.jpg')}}" class="imgLoaded" data-alignment="" data-portrait="" width="700" height="438" style="visibility: visible; height: 457.397px; margin-left: 0px; margin-top: -25.6986px; position: absolute; width: 731px;">
              <div class="camerarelative" style="width: 731px; height: 406px;">
              </div>
            </div>
            <div class="cameraSlide cameraSlide_1 cameracurrent" style="display: block; z-index: 999;">
              <img src="{{asset('static/img/property/7.jpg')}}" class="imgLoaded" data-alignment="" data-portrait="" width="700" height="438" style="visibility: visible; height: 457.397px; margin-left: 0px; margin-top: -25.6986px; position: absolute; width: 731px;">
              <div class="camerarelative" style="width: 731px; height: 406px;">            
              </div>
            </div>
            <div class="cameraSlide cameraSlide_2 cameranext" style="z-index: 1; display: none;">
              <div class="camerarelative" style="width: 731px; height: 406px;">            
              </div>
            </div>
          </div>
        </div>
        <div class="camera_overlayer">
        </div>
        <div class="camera_target_content">
          <div class="cameraContents">
            <div class="cameraContent" style="display: none;">
              <div class="camera_property fadeFromBottom" style="visibility: hidden; opacity: 1; bottom: 0px;">
                <a href="#">
                  <h4>196 ROYAL BLUFF RD JACKSONVILLE NORTH CAROLINA 50212</h4>
                </a>
                <h1>
                  <span>$</span> 500</h1>
                  <p>Pellentesque habitant morbi tristique senectus et netus et.</p>            
                </div>
              </div>
            </div>
          </div>
          <div class="camera_pie"><canvas id="pie_1" width="38" height="38" style="position: absolute; z-index: 1002; right: 0px; top: 0px; opacity: 0.8; display: none;">
          </canvas>
        </div>
        <div class="camera_prev" style="opacity: 0;">
          <span>
          </span>
        </div>
        <div class="camera_next" style="opacity: 0;">
          <span>
          </span>
        </div>
      </div>
      <div class="camera_loader" style="display: none; visibility: visible;">
      </div></div>
    </div>
  </div>
  <div class="span5">
    <div class="description espacio-right mar-00">
      <div class="white-form">
        <h3>Contacta al propietario</h3>
        <p class="font-s-16"><span>Llama: </span> (+51) 205-4191 o envía un e-mail</p>
      </div>
      <div style="margin-top: 40px;">
      <form action="calculator.php" id="calculator" class="forms-1">
        <p style="margin: 0 0 10px 0;"><span class="bold">Para: </span> Eduardo Jimenez</p>
        <div>                                                
          <textarea name="para" id="" cols="30" rows="10" style="width: 96%;height: 95px;"></textarea>
        </div> 
        <p style="margin: 0 0 10px 0;"><span class="bold">Para: </span></p>
        <div>                                                
          <input type="text" required="" placeholder="Price Propertie" name="price" style="width: 96%;height: 28px;">
        </div> 
        <div>                                                
          <input type="text" required="" placeholder="Price Propertie" name="price" style="width: 96%;height: 28px;">
        </div>
        <div>                                                
          <input type="text" required="" placeholder="Price Propertie" name="price" style="width: 96%;height: 28px;">
        </div>                                                                      
        <div>
          <input type="submit" class="button boton-detalle" value="Enviar">
        </div> 
      </form>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid res-none">
  <div class="span12">
    <img src="{{asset('static/img/Sintítulo.png')}}" alt="" class="img-respo">
  </div>
</div>
<div class="row-fluid bullet-color" style="padding-top: 30px;padding-bottom: 30px;">
  <div class="span7 media-left-30">
    <h2 style="color: #00a7f7;font-weight: 500;">Acerca del lugar</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa odit, hic numquam alias velit nulla quia, sint dolore illo repellat quas architecto totam quae dolores. Sequi dolore non vero, dignissimos Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ullam quas officiis tempore aperiam, ipsa minus, incidunt commodi similique eum amet laudantium corporis aliquid maiores aspernatur placeat unde molestias quidem?</p>
  </div>
  <div class="span2 media-left-31">
    <h5 style="color: #f3ba05;">Comodidades</h5>
    <div>
      <li>Hardwood Floors</li>
      <li>Exposed brick</li>
      <li>Central A/C</li>
      <li>High Ceilings</li>
      <li>Laundry in building</li>
      <li>Bike storage</li>
      <li>Eat in Kitchen</li>
    </div>
  </div>
  <div class="span3 media-left-31" style="margin-top: 36px;">
    <div>
      <li>Stone countertops</li>
      <li>Skyline view</li>
      <li>Roof acess</li>
      <li>Common courtyard</li>
      <li>Pets allowed</li>
    </div>
  </div>
</div>
<div class="row-fluid">
  <div class="span12" style="margin-bottom: -8px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.3228745055703!2d-71.1063726487202!3d42.33563914453341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3798c01b024c3%3A0x3144173f3d44723a!2sHarvard+Medical+School!5e0!3m2!1ses!2spe!4v1497253394812" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<div style="background: #f1f1f1;" class="res-none">
<h3 style="color: #00a7f7;padding-top: 30px;">Propiedades similares</h3>
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
</div>
</section>
<!-- End content info-->

@stop









