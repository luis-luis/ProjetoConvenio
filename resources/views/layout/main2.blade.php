<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>GoodPet - O Seu Convênio Pet</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>  

  <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/excanvas/r3/excanvas.min.js"></script>
    <![endif]-->

  <link rel="icon" href="images/veterinario.png" type="image/png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/splide.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">


  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="topo">
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('site.index')}}"><span class="flaticon-pawprint-1 mr-2"></span>Good Pet</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
        

          <li class="nav-item"><a href="#planos" class="nav-link">Planos</a></li>
          <li class="nav-item"><a href="naotemainda.html" class="nav-link">Rede Credenciada</a></li>
          <li class="nav-item"><a href="{{route('site.credenciamentos')}}" class="nav-link">Credenciamento</a></li>
          <li class="nav-item"><a href="naotemainda.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{route('site.convenioempresa')}}" class="nav-link">Para empresas</a></li>
        </ul>

        <div class="dropdown">
          <button class="navbar-button btn btn-success ml-lg-3 mt-2 mt-lg-0 dropdown-toggle"
            type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Entrar
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="naotemainda.html">Área do Tutor</a></li>
            <li><a class="dropdown-item" href="naotemainda.html">Área da Rede Credenciada</a></li>
          </ul>
        </div>


      </div>
      <div class="ml-lg-3 mt-2 mt-lg-0">
        <a class="btn btn-success" href="naotemainda.html" role="button">Simule um plano</a>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <h2 class="footer-heading">Good Pet</h2>
          <p>Conheça nossas redes sociais!</p>
          <ul class="ftco-footer-social p-0">
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        
        <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
          <!-- <h2 class="footer-heading">Quick Links</h2> -->
          <ul class="list-unstyled">
            <li><a href="naotemainda.html" class="py-2 d-block">Termos de uso</a></li>
            <li><a href="naotemainda.html" class="py-2 d-block">Politica de privacidade</a></li>
            <li><a href="naotemainda.html" class="py-2 d-block">Blog</a></li>
            <li><a href="{{ route('site.contatos2')}}" class="py-2 d-block">Contato</a></li>
            <li><a href="naotemainda.html" class="py-2 d-block">Carreiras</a></li>
            <li><a href="#topo" class="py-2 d-block">Como funciona</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <h2 class="footer-heading">Venha nos conhecer</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon fa fa-map"></span><span class="text">Rua Sergipe 2138, São Cristóvão - Francisco Beltrão - PR</span></li>
              <li><a href="https://wa.me/5546999099608?text=Ola!%20Gostaria%20de%20saber%20mais%20sobre%20o%20convênio."><span class="icon fa fa-phone"></span><span class="text">(46) 99909-9608</span></a></li>
              <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">goodpet@gmail.com</span></a></li>
              <li><a href="https://www.flaticon.com/br/icones-gratis/veterinario" title="veterinário ícones">Veterinário ícones criados por Freepik - Flaticon</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 text-center">

          <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <!-- jQuery e dependências -->
  <script src="js/jquery.min.js"></script>
  <script src="js/splide.min.js"></script>
  <script src="js/carousel.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>

  <!-- Plugins e bibliotecas -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollToPlugin.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/CustomEase.min.js"></script> -->
  <script src="js/jquery.mask.min.js"></script>
  <script src="js/maskphone.js"></script>

  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>

  <!-- Scripts personalizados -->
  <script src="js/main.js"></script>
  <script src="js/scroll.js"></script>
  <script src="js/carousel.js"></script>

</body>

</html>
