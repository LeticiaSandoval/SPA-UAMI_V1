<body>
 
 <header>

  <!-- Menu de navegacion de la pagina -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation" class="container"> 
    <img src="<?= base_url() ?>plantillas/img/Logo-uam.jpg" class="logouam" width="400" height="100" class="img-responsive" >
    <div class="imagenes">
    <img src="<?= base_url() ?>plantillas/img/logoie.jpg"  class="img-thumbnail" width="190" height="120" >
    <img src="<?= base_url() ?>plantillas/img/logoredes.jpg" class="img-thumbnail"  class="logoredes" width="100" height="120" >
    </div>
    <br><br><br><br><br>
    <div class="navbar-header">

    <!-- El boton que se muestra cuando el dispositivo es mediano-->
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion" aria-expended="false" aria-controls="navbar">
      <span class="sr-only">Ocultar</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
    </div>

    <!-- Aqui se iniciara el menu-->
    <div class="collapse navbar-collapse" id="navegacion" > 
     <ul class="nav navbar-nav">     
      <li class="active" class="menu"><a href="<?= base_url()?>inicio/pagPrincipal">Inicio</a></li>          
    </ul> 
    </div> 
  </nav>
 </header>