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
  </header>

  <section id="portfolio">
    <div class="container">
      <div class="col-lg-12">
        <div class="text-center">
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <h2>Portfolio</h2>
          </div>
          <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
          </div>
        </div>


        <ul class="portfolio-filter text-center">
          <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
          <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
          <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
          <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
        </ul>
        <!--/#portfolio-filter-->

        <div class="row">
          <div class="portfolio-items">
            <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->

            <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
              <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="#">Business theme</a></h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                    <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                  </div>
                </div>
              </div>
            </div>
            <!--/.portfolio-item-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->

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
