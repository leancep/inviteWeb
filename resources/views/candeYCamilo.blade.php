<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>VeniConmigo</title>

  <!-- BOOTSTRAP  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--end bootstrap-->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
 
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&family=Leckerli+One&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/slider/foto1.jpg')}}" alt="First slide" width="620" height="850">
      <div class="carousel-caption  caption d-none d-md-block">
            <h1 class="animated fadeInLeftBig banner"> Cande y Camilo</h1>
            <p class="animated fadeInRightBig subbanner">6.05.2021</p>
            <a data-scroll class="botoncarousel btn btn-start animated fadeInUpBig" href="#datos">Ver información</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block size w-100" src="{{asset('images/slider/foto10.jpg')}}" alt="Second slide" width="200px" height="850">
      <div class="carousel-caption caption d-none d-md-block">
            <h1 class="animated fadeInLeftBig banner"> Cande y Camilo</h1>
            <p class="animated fadeInRightBig subbanner">6.05.2021</p>
            <a data-scroll class="botoncarousel btn btn-start animated fadeInUpBig" href="#datos">Ver información</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/slider/foto3.jpg')}}" alt="Third slide" width="620" height="850">
      <div class="carousel-caption  caption d-none d-md-block">
            <h1 class="animated fadeInLeftBig banner"> Cande y Camilo</h1>
            <p class="animated fadeInRightBig subbanner">6.05.2021</p>
            <a data-scroll class="botoncarousel btn btn-start animated fadeInUpBig" href="#datos">Ver información</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <!--  <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">

        <div class="item active" style="background-image: url({{asset('images/slider/foto1.jpg')}})">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> Cande y Camilo</h1>
            <p class="animated fadeInRightBig">05/05/2021</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Ver información</a>
          </div>
        </div>

        <div class="item" style="background-image: url({{asset('images/slider/fotoHome.jpg')}})">
          <div class="caption">
          <h1 class="animated fadeInLeftBig"> Cande y Camilo</h1>
            <p class="animated fadeInRightBig">05/05/2021</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Ver información</a>
          </div>
        </div>

        <div class="item" style="background-image: url({{asset('images/slider/yanose3.jpg')}})">
          <div class="caption">
          <h1 class="animated fadeInLeftBig"> Cande y Camilo</h1>
            <p class="animated fadeInRightBig">05/05/2021</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Ver información</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    
  </header><!--/#home-->

  <!-- ======= My Services Section ======= -->
  <section id="datos" class="datos">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
</svg><i class='fas fa-heart'></i></div>
              <h3 class="title">Civil:</h4>
              <p class="description">Se realizará en el Registro Civil de San Isidro, ubicado en Av. Centenario 77, en fecha y horario a confirmar.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa fa-glass" aria-hidden="true"></i></div>
              <h4 class="title">Fiesta:</h4>
              <p class="description">Te esperamos desde las 18:00 hs para seguir festejando en Lagos del Rocio, Pilar - Provincia de Buenos Aires.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-tshirt"></i></div>
              <h4 class="title"><a href="">Dress Code:</a></h4>
              <p class="description">Queremos verte con toda la pinta. El tipo de vestimenta elegida es: <br> Elegante</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  

  <section id="instagram">
     <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2" >
          <h2>#CandeyCamilo</h2>
          <h3>¡¡Preparate para nuestro casamiento!! Ya podés entrar a Instagram y etiquetarnos con nuestro hashtag en tus fotos o videos.</h3>
          <br>  
          <div class="caption2">
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="https://www.instagram.com/explore/tags/candeycamilo/">Ver Fotos!</a>
          </div>
        </div>
      </div>
     </div>

  </section><!--/#instagram-->

  <section id= "frase1">
  <div class="container">
      <div class="row">
        <div class="heading fraseh2 text-center col-sm-8 col-sm-offset-2" >
          <h2>Ahora mismo el universo parece tan tremendamente inmenso!<i class='fas fa-heart'></i></h2>
        </div>
      </div>
  </div>
  </section><!--/#frase1-->
  <section id= "asistencia">
  <div class="container">
      <div class="row">
        <div class="heading fraseh2 text-center col-sm-8 col-sm-offset-2" >
          <h2>Te esperamos !! </h2>
          <h3>Para que formes parte de esta gran celebración. Tenés tiempo hasta el 01/05. ¡Confirmanos tu asistencia!</h3>
          <div class="caption2">
            <a data-scroll class="btn btn-start boton animated fadeInUpBig" href="https://docs.google.com/forms/d/e/1FAIpQLSeeYohoii7uY3W1XOj0SRsHCnhlpkBgaKHjlwIOPfgWg4wEvg/viewform?usp=sf_link" target="_blanck">CONFIRMAR ASISTENCIA</a>
          </div>
        </div>
      </div>
  </div>
  </section><!--/#asistencia-->

  <section id= "regalo">
  <div class="container">
      <div class="row">
        <div class="heading fraseh2 text-center col-sm-8 col-sm-offset-2" >
          <h1><i class="fa fa-gift" aria-hidden="true"></i></h1>
          <h2>Si desean hacernos un regalo, pueden colaborar con la luna de miel.</h2>
     
          <div class="caption2">
              <button class="btn btn-start boton animated fadeInUpBig" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                DATOS CBU
              </button>

            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                  Titular: Menganito Perez <br>
                  CUIT/CUIL :  XX-XXXXXXXX-X  <br>
                  CBU: XXXXXXXXXXXXXXXXXXXXXXX  <br>
                  Alias: XX.ZZZZ.YYYY   <br>
                  Banco: Provincia   <br>
                  Sucursal: XXX - XXXXX   <br>
                  Cuenta única: XXX-XXXXXX/X   <br>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section><!--/#asistencia-->

  <section id= "musica" class="musica">
  <div class="container">
      <div class="row">
        <div class="heading fraseh2 text-center col-sm-8 col-sm-offset-2" >
          <h1><i class="fa fa-music" aria-hidden="true"></i></h1>
          <h2>¡Ayudanos sugiriendo las canciones que pensás que no pueden faltar en la fiesta! <i class="fa fa-instagram"></i></h2>
     
          <div class="caption2">
            <a data-scroll class="btn btn-start botonmusica animated fadeInUpBig" href="https://docs.google.com/forms/d/e/1FAIpQLSfzcY95wwxbZvs9euAFv_sdPscNuTOJccMyT5WdpJF_aurLJQ/viewform?usp=sf_link" target="_blanck">SUGERIR CANCIÓN</a>
          </div>
        </div>
      </div>
  </div>
  </section><!--/#asistencia-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
      <!--  <div class="footer-logo">
          <center><a href="index.html"><img class="img-responsive" src="{{asset('images/Logo3.png')}}" width="7%" alt=""></a></center>
        </div>-->
        <div class="social-icons">
          <ul>
          
            <li><a class="twitter" href="#"><i class='fab fa-twitter'></i></a></li>
            <li><a class="facebook" href="#"><i class='fab fa-facebook-f'></i></a></li>
            <li><a class="instagram" href="#"><i class='fab fa-instagram'></i></a></li>

          </ul>
        </div>
        VeniConmigo <a href="/">Web principal</a>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>


</body>


</html>