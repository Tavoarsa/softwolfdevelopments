<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>{{ config('app.name', 'Servicios Técnicos Alvarez') }}</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Multi
    Theme URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
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
                <li role="presentation"><a href="{{'/contact'}}">Ingresar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="services">
    <div class="container">
      <div class="text-center">
        <div class="services-box">
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <h2>Nuestro Servicios</h2>
          </div>
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
            <p>Ofrecemos la instlación y soporte de equipos</p>
          </div>

          <div class="col-md-4">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
              <i class="fa fa-rocket fa-3x"></i>
            </div>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              <h4>Presupuesto</h4>
              <p>Realizamos valoración y le cotizamos con el mejor precio y la mas alta calidad en insumos</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s">
              <i class="fa fa-cogs fa-3x"></i>
            </div>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
              <h4>Instalación</h4>
              <p>Instalamos todo tipo de equipos: electricos, mecanicos  electronicos</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="1.5s">
              <i class="fa fa-eye fa-3x"></i>
            </div>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.5s">
              <h4>Soporte</h4>
              <p>Asistencia y soporte Técnico especializado</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Equipo</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat bus maecenas ultrices sed ipsum lorem<br> dolor sit amet sed ipsum consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-3">
            <img src="images/services/1.jpg" alt="">
            <h3>John Doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
          </div>
        </div>

        <div class="wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="col-md-3">
            <img src="images/services/1.jpg" alt="">
            <h3>John Doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
          </div>
        </div>

        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="col-md-3">
            <img src="images/services/1.jpg" alt="">
            <h3>John Doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
          </div>
        </div>

        <div class="wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
          <div class="col-md-3">
            <img src="images/services/1.jpg" alt="">
            <h3>John Doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="skills">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Habilidades</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Contamos con Habilidades Técnicas</p>
        </div>
      </div>
    </div>
  </div>

  <div class="skill">
    <div class="container">
      <div class="text-center">
        <div class="col-md-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
          <div class="progress-wrap">
            <h4>Trabajo Bajo Presión</h4>
            <div class="progress">
              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                <span class="bar-width">85%</span>
              </div>

            </div>
          </div>

          <div class="progress-wrap">
            <h4>Asitencia</h4>
            <div class="progress">
              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                <span class="bar-width">95%</span>
              </div>
            </div>
          </div>

          <div class="progress-wrap">
            <h4>Rapidez</h4>
            <div class="progress">
              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="bar-width">80%</span>
              </div>
            </div>
          </div>

          <div class="progress-wrap">
            <h4>Responsabilidad</h4>
            <div class="progress">
              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                <span class="bar-width">90%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.col-sm-6-->

      <div class="services-skill">
        <div class="text-center">
          <div class="col-md-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
            <div class="media">
              <div class="media-left">
                <img src="images/services/2.png" alt="">
              </div>

              <div class="media-body">
                <h4 class="media-heading">Bobbh DOE</h4>
                <p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <img src="images/services/3.png" alt="">
              </div>

              <div class="media-body">
                <h4 class="media-heading">John Doe</h4>
                <p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <img src="images/services/4.png" alt="">
              </div>

              <div class="media-body">
                <h4 class="media-heading">Hendrick</h4>
                <p>Cras urna felis accumsan at ultricesid posuere masa um socisd natoque penatibus magnisd Lorem ipsum dolor sit ame onsectea dipe.</p>
              </div>
            </div>
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
                <li role="presentation"><a href="{{'/services'}}">Servicios</a></li>
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
  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>
