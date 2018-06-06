<!DOCTYPE html>
<html lang="br">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- titulo e imagem da pagina-->
  <title>@yield('title')</title>
  <link rel="icon" href="img/logo_2.png" type="image/x-icon" />
 

  <!-- CSS  -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<link href="materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
 
  
  
</head>


<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
  
   <!-- NavBar  -->
  
  <main>
  <div class="navbar-fixed">
    <nav class="e0e0e0 grey lighten-2" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo white-text">
          <img class="responsive-img"src="img/logo_1.png"  /> 
        </a>
        <a data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li ><a class="green-text" href="/">Home</a></li>
          <li ><a class="green-text" href="/Empresa">O que somos ?</a></li>
          <li ><a class="green-text" href="/Serviços">Nosso Produto</a></li>
          
          <li><a class="white-text green" href="/EasyReader">Teste Agora o Easy Reader</a></li>
        </ul>
      </div>
    </nav>
  </div>


<ul id="nav-mobile" class="side-nav e0e0e0 grey lighten-2">
  <li><a class="green-text" href="/">Home</a></li>
  <li><a class="green-text" href="/Empresa">O que somos ?</a></li>
  <li><a class="green-text" href="/Serviços">Nosso Produto</a></li>
  
  <li><a class="white-text green" href="/EasyReader">Teste Agora o Easy Reader</a></li>
</ul>
</main>
  
    
    @yield('container')
    
  

 <!-- Footer rodapé-->

  <footer class="page-footer e0e0e0 grey lighten-1">
    <div class="container">

     @yield('mapa')
    </div>
  
    <div class="footer-copyright green ">
      
      <div class="container "> 
        <div class="row center">

          <img src="img/logo_2.png" />
          <h6 class="text-muted white-text"> Easy Reader LTDA ME</h6>
          <h6 class="text-muted white-text"><i class=" tiny material-icons">map</i> Av. Transnordestina, s/n - Novo Horizonte, Feira de Santana - BA</h6>
          <h6 class="text-muted white-text"><i class=" tiny material-icons">phone</i> (75) XXXX-XXXX  </h6>
          <br>
          <h6 class="text-muted white-text"> Todos os direitos reservados © 2018 Easy Reader </h6>
        </div>
         
      
      </a> </div>
    </div>
  </footer>


  <!--  Scripts-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="jquery-2.1.3.min.js"></script>
  <script src="materialize/js/materialize.js"></script>
  <script src="materialize/js/init.js"></script>
  
 
  @yield('script')
  
<!-- /WhatsHelp.io widget -->
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
  
  (function(){
    (".button-collapse").sideNav();
  });

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

</script>
<script src="js/pegar.js"></script>
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
  </body>
</html>