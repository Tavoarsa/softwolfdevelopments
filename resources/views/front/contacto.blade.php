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
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header

  <div class="contact">
    <div class="container">
      <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
          <h2>Contactenos</h2>
        </div>
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
          <p>Es un placer ofrecer nuestros servicios de alta calidad</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="col-md-7">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1362.6852667910916!2d-84.43481295670063!3d10.384400263143434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2scr!4v1557615429194!5m2!1sen!2scr" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="contact-info">
      <div class="col-md-5">
        <h2>Nosotros somos Servicio Técnicos Alvarez</h2>
        <h3>Servicios de Calidad</h3>
        <p>Alta confiabilidad y eficacia en cada uno de nuestros trabajos</p>
        <ul>
          <li><i class="fa fa-home fa-2x"></i> Dulce Nombre, Cuidad Quesada</li>
          <li><i class="fa fa-phone fa-2x"></i>8704 1666</li>
          <li><i class="fa fa-envelope fa-2x"></i> info@serviciostecnicosalvarez.com</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="contact-form">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div id="sendmessage">Su mensaje ha sido enviado. Gracias!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Su Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Su email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
            <div class="validation"></div>
          </div>

          <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button></div>
        </form>
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
                <li role="presentation"><a href="{{'/services'}}">Servicios</a></li>>
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
  <script src="contactform/contactform.js"></script>

</body>

</html>
