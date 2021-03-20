<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>VeniConmigo</title>

  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&family=Leckerli+One&display=swap" rel="stylesheet">
<!--link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">-->
  <link id="css-preset" href="{{asset('css/presets/preset1.css')}}" rel="stylesheet">


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

 <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
  <link rel="shortcut icon" href="{{asset('images/logo2.png')}}">
</head><!--/head-->

<body>
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">

        <div class="item active" style="background-image: url({{asset('images/slider/1.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> Veni <span style="color: #929394;">CONMIGO</span></h1>
            <p class="animated fadeInRightBig">Invitaciones digitales para #EVENTOS</p>
            <p class="animated fadeInRightBig">Simples, modernas, divertidas y elegantes</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Conocer más</a>
          </div>
        </div>

        <div class="item" style="background-image: url({{asset('images/slider/event.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> VENI <span style="color:crimson;">CONMIGO</span></h1>
            <p class="animated fadeInRightBig">Dale un estilo diferente y moderno a tu fiesta de #15 o #GRADUACIÓN</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Conocer más</a>
          </div>
        </div>

        <div class="item" style="background-image: url({{asset('images/slider/wed.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> VENI <span>CONMIGO</span></h1>
            <p class="animated fadeInRightBig">Invitaciones digitales y sustentables para una #BODA única</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Conocer más</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <!--<div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="{{asset('images/Logo3.png')}}" width="10%" alt="logo"></h1>
          </a>
        </div>-->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Nuestros servicios</a></li>
            <li class="scroll"><a href="#invitaciones">Nuestras invitaciones</a></li>
            <li class="scroll"><a href="#portfolio">Muestras</a></li>
            <li class="scroll"><a href="#contact">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Nuestros Servicios</h2>
            <p>Reemplazá la tarjeta de papel tradicional para tu evento con nuestras invitaciones digitales. Creamos una página web personalizada que se adapta a todos los dispositivos, para que puedas compartir los detalles de tu evento con los que más querés de una manera simple, sustentable y elegante...</p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
      <div class="row">
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>UBICACION E INDICACIONES</h3>
              <p>Compartí con tus invitados la dirección exacta y la ubicación de tu ceremonia y fiesta, con las indicaciones de cómo llegar en Google Maps.</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
            <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>LISTA DE REGALOS</h3>
              <p>Agregá un link a tu lista de regalos o indicá los datos de tu cuenta bancaria.</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>INSTAGRAM WALL</h3>
              <p>¿Ya tenés el #hashtag de tu evento? No dejes que las fotos tuyas y de tus invitados se pierdan dentro de instagram. Con la Instagram Wall vas a poder ver todo en un solo lugar.</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>ADAPTABLES</h3>
              <p>Simples, elegantes y funcionales tanto en desktop como en mobile.</p>
            </div>
          </div>
          
        </div>

        <div class="row">
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
            <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>LISTA DE INVITADOS ONLINE</h3>
              <p>Tus invitados confirman online la asistencia. ¡Y vos recibís y manejás la lista de los asistentes en una planilla de Google Docs! Todo sincronizado en tiempo real.</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>CUENTA REGRESIVA</h3>
              <p>¡El tiempo pasa volando! Con la cuenta regresiva vas a poder seguir con tus invitados cuántos días, horas y minutos faltan para el gran día.</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
            <i class="fa fa-camera" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>ALBUM DE FOTOS</h3>
              <p>Compartí en la invitación todo el camino recorrido hasta el evento, con un álbum que muestra los momentos más emotivos.</p>
            </div>
          </div>
          <div class="col-sm-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
            <i class="fa fa-music" aria-hidden="true"></i>
            </div>
            <div class="service-info">
              <h3>LISTA DE CANCIONES</h3>
              <p>Una opción divertida para brindar la oportunidad a tus invitados de que envíen las canciones que quieren escuchar.</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/#services-->

  <section id="portfolio"  class="parallax">
     <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <br><br><br><br><br><br>
        </div>
      </div>
     </div>

  </section><!--/#portfolio-->
  <section id="invitaciones">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        <h2>Nuestras Invitaciones</h2>
            <p>Te brindamos un diseño personalizado, para que tu fiesta sea única. Conectamos a miles de novios, graduados y quinceañeras con sus invitados. Diseñamos prestando especial atención al detalle y a los requerimientos con una atención personalizada.</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <img class="img-responsive" src="{{asset('images/slider/oro.jpg')}}"  width="250" height="250" alt="">
            
            </div>
            <div class="entry-header">
            <h3>Invitación Oro</h3>
            </div>
            <div class="entry-content">
            <p>Esta invitación cuenta con la información básica para tu casamiento u evento. Foto con presentación, ubicación de la ceremonia, dirección de la fiesta y confirmación de asistencia de los invitados.</p>
            </div>
          </div>

          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <img class="img-responsive" src="{{asset('images/slider/platino.jpg')}}"  width="250" height="250"  alt="">
            
            </div>
            <div class="entry-header">
            <h3>Invitación Platino</h3>
            </div>
            <div class="entry-content">
            <p>Además de todo lo anterior incluye una cuenta regresiva con el tiempo que falta para tu casamiento, el botón "Hacenos un Regalo" y una slider con fotos de la pareja.</p>
            </div>
          </div>
         <!-- <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img class="img-responsive" src="{{asset('images/products/icm.jpg')}}" alt="">
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="{{asset('images/products/mondis.jpg')}}" alt="">
                  </div>
                  <div class="item">
                    <img class="img-responsive" src="{{asset('images/products/relaciones.jpg')}}" alt="">
                  </div>
                </div>
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>
              <div class="post-icon">
                <i class="fa fa-picture-o"></i>
              </div>
            </div>
            <div class="entry-header">
            <h3><a href="#">{{ __('msg.incidentCaseManagement')}}</a></h3>
              <span class="date">June 26, 2020</span>
              <span class="cetagory">in <strong>Photography</strong></span>
            </div>
            <div class="entry-content">
            <p>{{ __('msg.dataIncidenteCaseManagement')}}</p>
            </div>
          </div>-->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <img class="img-responsive" src="{{asset('images/slider/diamante.jpg')}}"  width="250" height="250" alt="">
            
            </div>
            <div class="entry-header">
            <h3>Invitación Diamante</h3>
            </div>
            <div class="entry-content">
            <p>Es nuestra invitación más elegida, ya que incluye toda la información del evento más funciones que la diferencian de las otras como selección de canciones y wall de Instagram con tu #hashtag,. ¡Hacé participar a tus invitados!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#blog-->
 

 <!-- <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>{{ __('msg.aboutUs')}}</h2>
            <p>{{ __('msg.dataAboutUs1')}}</p>
            <p>{{ __('msg.dataAboutUs2')}}</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">{{ __('msg.userExp')}}</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">{{ __('msg.webDesign')}}</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">{{ __('msg.programming')}}</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">{{ __('msg.fun')}}</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->


  <!--<section id="twitter" class="parallax">
    <div style="height: 400px;">
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>TWITTER</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>   <a class="twitter-timeline" data-width="1200" data-height="300" data-theme="dark" href=""></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
                </div>
                <div class="item wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p><br><br><br><a href="" class="twitter-follow-button" data-size="large" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->



  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>CONTACTATE CON NOSOTROS</h2>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form method="post" action="{{url('/')}}">
                {{ csrf_field() }}
                 <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                   <div class="col-sm-6">
                     <div class="form-group">
                       <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                     </div>
                   </div>
                   <div class="col-sm-6">
                     <div class="form-group">
                       <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                 </div>
                 <div class="form-group">
                   <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                 </div>
                 <div class="form-group">
                   <button type="submit" class="btn-submit">Send Now!</button>
                 </div>
                </form>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Contactanos!</p>
                <ul class="address">
                  <!-- <li><i class="fa fa-map-marker"></i> <span> {{ __('msg.address')}}</span> Juan Carlos Cruz 2360, Vicente López</li> -->
                  <li><i class="fa fa-phone"></i> <span> Telefono: </span> +54 11 67834985  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> leanceps2@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span>Web: </span> <a href="#">www.veniConmigo.com</a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=1176834985&text=Veni%20Conmigo%20Invitaciones!"><img src="images/whatsapp.png" alt="Whats App!" style="float:right;" width="150" height="100" /></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
      <!--  <div class="footer-logo">
          <center><a href="index.html"><img class="img-responsive" src="{{asset('images/Logo3.png')}}" width="7%" alt=""></a></center>
        </div>-->
        <div class="social-icons">
          <ul>
          
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>

          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>



</body>
</html>