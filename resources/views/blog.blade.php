<style>
  body{
    background: white !important;
  }
  @media only screen and (max-width: 767px){
.suscr-blue{
    height: 38px !important;
    width: 97% !important;
  }
}

</style>
@extends('layouts.master')

@section('content')

<div>
  <div class="conta-100">
    <div class="row-fluid"> 
      <div class="span12 resp-menu-100">
        <img src="{{asset('static/img/blog_banner.png')}}" alt="" class="img-100-2">
        <div class="titulo-img">
          <h1 style="color:white;" class="h1-wtf">Blog</h1>
          <p class="white-img">Real estate for sale & rent, suburb rewiews and local</p>
        </div>
      </div>                    
    </div>
  </div>            
</div>


<section class="topybot HZ1 media-top-95">
  <div class="container">
    <div class="row-fluid pdd-bot-50">
      <div class="span9 responsive-bot btton-mar-padd">
        <div style="text-align: center;" class="bottom-respons">
          <img src="{{asset('static/img/ama.png ')}}" alt="" style="width: 100%;">
          <h5 class="res-none" style="padding-top: 25px;">Categoría</h5>
          <h3 class="celeste font-600 blog-title" style="padding-bottom: 20px;
          ">Be the one to stand out in the crowed</h3>
          <p class="res-none" style="padding-bottom: 5px;"><i class="fa fa-user" aria-hidden="true" style="margin-right: 15px;"></i>Posteado por Admin <span style="margin-left: 25px;"><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 15px;"></i>1 de Junio del 2017</span></p>
          <p style="padding-bottom: 25px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque at hic dolorum, autem fugit odio fuga a enim ipsam nam, quidem harum. Odit porro veniam repellat consequuntur impedit. Rerum, praesentium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ullam ea ex quam, consequuntur soluta, expedita animi nesciunt fugiat nam dicta, rerum. Laborum, obcaecati ipsam delectus vitae inventore sapiente omnis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quis necessitatibus perspiciatis,obcaecati fugiat sunt ut esse quibusdam officiis. <span class="celeste  font-600">Leer más</span></p>
          <img src="{{asset('static/img/Sintítulo.png')}}" alt="" class="img-respo img-respo4">
          <div class="res-none" style="padding-top: 15px;">
            <p class="celeste font-600" style="float: left;">10 Comentarios</p>
            <p style="float: right;"><i class="fa fa-dribbble font-pad" aria-hidden="true"></i><i class="fa fa-facebook font-pad" aria-hidden="true"></i><i class="fa fa-twitter font-pad" aria-hidden="true"></i><i class="fa fa-pinterest font-pad" aria-hidden="true" style="padding-right:0px;"></i></p>
          </div>
        </div>
        <div style="text-align: center;" class="bottom-respons">
          <img src="{{asset('static/img/ama.png ')}}" alt="" style="width: 100%;">
          <h5 class="res-none" style="padding-top: 25px;">Categoría</h5>
          <h3 class="celeste font-600 blog-title" style="padding-bottom: 20px;
          ">Be the one to stand out in the crowed</h3>
          <p class="res-none" style="padding-bottom: 5px;"><i class="fa fa-user" aria-hidden="true" style="margin-right: 15px;"></i>Posteado por Admin <span style="margin-left: 25px;"><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 15px;"></i>1 de Junio del 2017</span></p>
          <p style="padding-bottom: 25px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque at hic dolorum, autem fugit odio fuga a enim ipsam nam, quidem harum. Odit porro veniam repellat consequuntur impedit. Rerum, praesentium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ullam ea ex quam, consequuntur soluta, expedita animi nesciunt fugiat nam dicta, rerum. Laborum, obcaecati ipsam delectus vitae inventore sapiente omnis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quis necessitatibus perspiciatis,obcaecati fugiat sunt ut esse quibusdam officiis. <span class="celeste  font-600">Leer más</span></p>
          <img src="{{asset('static/img/Sintítulo.png')}}" alt="" class="img-respo img-respo4 res-none">
          <div class="res-none" style="padding-top: 15px;">
            <p class="celeste font-600" style="float: left;">10 Comentarios</p>
            <p style="float: right;"><i class="fa fa-dribbble font-pad" aria-hidden="true"></i><i class="fa fa-facebook font-pad" aria-hidden="true"></i><i class="fa fa-twitter font-pad" aria-hidden="true"></i><i class="fa fa-pinterest font-pad" aria-hidden="true" style="padding-right:0px;"></i></p>
          </div>
        </div>
      </div>
      <div class="span3 cate-border">
        <div style="padding-bottom: 20px;" class="bloc-sff media-top-k">
          <input class="input-blog " type="text" required="" placeholder="¿Qué deseas buscar?" id="icon-s">
        </div>
        <img class="res-none" src="{{asset('static/img/ad1.png')}}" alt="" style="width: 100%;">
        <h4 class="celeste categoria-blog res-none">Categorias</h4>
        <ul class="res-none" style="padding-bottom: 25px;">
          <li>Departamentos</li>
          <li>Buen Vivir</li>
          <li>Decoración</li>
          <li>Economía</li>
          <li>Gestión Empresarial</li>
          <li>Casas</li>
        </ul>
        <img class="res-none" src="{{asset('static/img/ad2.png ')}}" alt="" style="padding-bottom: 25px;width: 100%;">
        <h4 class="celeste bold res-none" style="padding-bottom: 25px;">Últimos post</h4>
        <div style="display: flex;padding-bottom: 20px;" class="responsive-ults-posts res-none">
          <div class="res-none">
            <img src="{{asset('static/img/ultimos-posts.png ')}}" alt="">
          </div>
          <div class="res-none" style="padding-left: 16px;">
            <h5 class="celeste" style="line-height: 18px;">Be Stand out in the crowed</h5>
            <p>1 de Junio del 2017</p>
          </div>
        </div>
        <div style="display: flex;padding-bottom: 20px;" class="responsive-ults-posts res-none">
          <div>
            <img class="res-none" src="{{asset('static/img/ultimos-posts.png ')}}" alt="">
          </div>
          <div style="padding-left: 16px;">
            <h5 class="celeste" style="line-height: 18px;">Be Stand out in the crowed</h5>
            <p>1 de Junio del 2017</p>
          </div>
        </div>
        <div style="display: flex;padding-bottom: 20px;" class="responsive-ults-posts res-none">
          <div>
            <img src="{{asset('static/img/ultimos-posts.png ')}}" alt="">
          </div>
          <div style="padding-left: 16px;">
            <h5 class="celeste" style="line-height: 18px;">Be Stand out in the crowed</h5>
            <p>1 de Junio del 2017</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End content info-->

@stop