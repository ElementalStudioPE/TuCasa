<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TUCASAPE</title>    
  <meta name="viewport" content="width=device-width,  minimum-scale=1,  maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Your styles -->
  <link href="{{asset('static/css/style.css')}}" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="{{asset('static/css/font-awesome.min.css')}}">  
</head>
<body>


  @include('layouts.nav')

  @yield('content')

  @include('layouts.footer')


</body>
<!-- ======================= JQuery libs =========================== -->
<!-- Always latest version of jQuery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>         
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<!--Nav-->
<script type="text/javascript" src="{{asset('static/js/nav/tinynav.js')}}"></script> 
<script type="text/javascript" src="{{asset('static/js/nav/superfish.js')}}"></script>                
<!--efect_switcher-->
<script type='text/javascript' src='{{asset('static/js/efect_switcher/jquery.content-panel-switcher.js')}}'></script> 
<!--Totop-->
<script type="text/javascript" src="{{asset('static/js/totop/jquery.ui.totop.js')}}" ></script>  
<!--Slide-->
<script type="text/javascript" src="{{asset('static/js/slide/camera.js')}}" ></script>      
<script type='text/javascript' src="{{asset('static/js/slide/jquery.easing.1.3.min.js')}}"></script>         
<!--Ligbox--> 
<script type="text/javascript" src="{{asset('static/js/fancybox/jquery.fancybox-1.3.1.js')}}"></script>
<!-- Bootstrap.js-->
<script src="{{asset('static/js/bootstrap.js')}}"></script>
<!--fUNCTIONS-->
<script type="text/javascript" src="{{asset('static/js/jquery-func.js')}}"></script>
<!--Run Slide Home-->
<script type="text/javascript">
  $('#slide').camera({        
    height: '650px',
    navigation: true  
  });
</script>
<!-- ======================= End JQuery libs =========================== -->
</html>