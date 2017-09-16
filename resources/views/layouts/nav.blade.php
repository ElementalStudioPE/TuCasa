<div style="position: fixed;top: 0;z-index: 9;width: 100%;">
<!-- Info Head -->
<section class="info_head">   
<div class="container responsive-top-2">          
  <ul>  
    <li> +51 985 654 321</li>
    <li> Contacto</li>
  </ul>     
</div>         
</section>
<!-- Info Head -->

<!-- Nav-->
<nav>
  <div class="container">
    <div class="row-fluid">
      <div class="span3 logo">
      <a href="{{ route('home') }}"><img src="{{asset('static/img/logo.png')}}" alt="Image"></a>
      </div>
      <!-- Menu-->
      <ul id="menu" class="span9 sf-menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('quienes-somos') }}">About</a></li>
        <li><a href="{{ route('servicios') }}">Servicios</a></li>
        <li><a href="{{ route('propiedades') }}">Propiedades</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('contacto') }}">Contáctenos</a></li>
      </ul>
      <!-- End Menu-->
    </div>
  </div>
</nav>
<!-- End Nav-->
</div>
