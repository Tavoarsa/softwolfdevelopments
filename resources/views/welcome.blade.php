<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Servicios Técnicos Alvarez') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/isotope.css') }}" type="text/css" media="screen">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('js/fancybox/jquery.fancybox.css' ) }}" type="text/css" media="screen"  >
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
  
</head>
<body>
   
       <div id="app"> 
                               
           
       
    <header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
            <div class="navbar-brand">
              <a href=""><h1><span>Servicios </span>Técnicos <span>Alvarez</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{'/'}}" class="active">Home</a></li>
                <li role="presentation"><a href="{{'/services'}}">Servicios</a></li>
                <!--<li role="presentation"><a href="">Blog</a></li>-->
                <li role="presentation"><a href="{{'/portafolio'}}">Portfolio</a></li>
                <li role="presentation"><a href="{{'/contact'}}">Contacto</a></li>
                <li role="presentation"><a href="{{'/login'}}">Ingresar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="slider">
    <div class="img-responsive">
      <ul class="bxslider">
        <li><img src="images/slider/1.jpg" alt="" /></li>        
        <li><img src="images/slider/2.jpg" alt="" /></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="text-center">
      <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
        <h3>Proveer</h3>
      </div>
      <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
        <h2>Seguridad & Confianza</h2>
      </div>
    </div>
  </div>

  <div class="box">
    <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.4s">
      <div class="col-sm-3">
        <i class="fa fa-cogs fa-3x"></i>
        <h4>SOLUCIONES CREATIVAS </h4>
      </div>
    </div>
    <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.8s">
      <div class="col-sm-3">
        <i class="fa fa-leaf fa-3x"></i>
        <h4>EFICACIA</h4>
      </div>
    </div>
    <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.2s">
      <div class="col-sm-3">
        <i class="fa fa-heart-o fa-3x"></i>
        <h4>RAPIDEZ</h4>
      </div>
    </div>
    <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="1.6s">
      <div class="col-sm-3">
        <i class="fa fa-laptop fa-3x"></i>
        <h4>TECNOLOIGIA</h4>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Principales Carateristicas</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Damos soporte a equipos de ordeño, automatización que ayudaran al productor lechero contar con mas seguridad en le manejo de l producto lacteo<br></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-lg-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.5s">
      <img src="images/7.jpeg" class="img-responsive">
    </div>

    <div class="col-lg-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.5s">
      <img src="images/8.jpeg" class="img-responsive">
    </div>
  </div>
<!--
  <div class="main-feature">
    <div class="container">
      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
        <div class="media">
          <div class="media-left">
            <i class="fa fa-rocket fa-3x"></i>
          </div>

          <div class="media-body">
            <h4 class="media-heading">SEO Optimized</h4>
            <p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
        <div class="media">
          <div class="media-left">
            <i class="fa fa-camera fa-3x"></i>
          </div>

          <div class="media-body">
            <h4 class="media-heading">Easy to Install</h4>
            <p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
        <div class="media">
          <div class="media-left">
            <i class="fa fa-heart-o fa-3x"></i>
          </div>

          <div class="media-body">
            <h4 class="media-heading">Unlimited Possibilities</h4>
            <p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
        <h2>Easily Customizable & Unlimited Support </h2>
      </div>
      <div class="wow bounceInUp" data-wow-offset="0" data-wow-delay="0.6s">
        <p>Integer orci enim varius vel accumsan vel porttitor tellus. Vivamus odio. Donec metus libero semper</p>
      </div>

      <button type="button" class="btn btn-default">Purchase Now</button>
      <button type="button" class="btn btn-default">learn More</button>
    </div>

  </div>
-->
  <div class="about-us">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h3>Quienes Somos</h3>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <h2>Acerca de Nosotros</h2>
        </div>
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-3">
            <img src="images/about/man4.jpg" alt="">
            <h3>Allan Alvarez Salas</h3>
            <p>Técnico Especializado</p>
          </div>
        </div>

        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="col-md-3">
            <img src="images/about/man2.jpg" alt="">
            <h3>Allan Alvarez Salas</h3>
            <p>Técnico Especializado</p>
          </div>
        </div>

        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-3">
            <img src="images/about/man3.jpg" alt="">
            <h3>Allan Alvarez Salas</h3>
            <p>Técnico Especializado</p>
          </div>
        </div>

        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="col-md-3">
            <img src="images/about/man4.jpg" alt="">
            <h3>Allan Alvarez Salas</h3>
            <p>Técnico Especializado</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer">
      <div class="container">
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
          <h2>Servicios Técnicos Alvarez</h2>
          <p>Nos caraterizamos por ofrecer servicios de calidad y contamos con el respaldo de la experiencia y la honestidad.</p>

          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
    
        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
          <!--<h3>RECENT POSTS</h3>
          <ul>
            <li>Awesome Design with Overviews</li>
            <hr>
            <li>Great Design with Features </li>
            <hr>
            <li>Limitless functions & Works </li>
            <hr>
            <li>Multi is simple and clean design</li>
          </ul>-->
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
          <h3>INFORMACIÓN DE CONTACTO</h3>
          <ul>
            <li><i class="fa fa-home fa-2x"></i> Dulce Nombre, Cuidad Quesada</li>
            <hr>
            <li><i class="fa fa-phone fa-2x"></i> 8704 1666</li>
            <hr>
            <li><i class="fa fa-envelope fa-2x"></i> info@serviciostecnicosalvarez.com</li>
          </ul>
        </div>

      </div>
    </div>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">           
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Multi
              -->
             Designed by <a href="https://bootstrapmade.com/">TAVOARSA</a>
            </div>
          </div>
           <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="{{'/home'}}" class="active">Home</a></li>
                <li role="presentation"><a href="">Servicios</a></li>
                <!--<li role="presentation"><a href="">Blog</a></li>-->
                <li role="presentation"><a href="{{'/portafolio'}}">Portfolio</a></li>
                <li role="presentation"><a href="{{'/contact'}}">Contacto</a></li>
              </ul>
            </div>
        </div>
        <div class="pull-right">
          <a href="" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>
      </div>
    </div>
  </footer>

    @yield('content')   

</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/functions.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     <!-- Login-->
  <script>
    wow = new WOW({}).init();
  </script>

  

    @yield('scripts')
</body>
</html>
