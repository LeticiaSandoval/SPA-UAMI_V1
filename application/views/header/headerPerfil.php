<body>
 
 <header>

  <!-- Menu de navegacion de la pagina -->
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation" class="container"> 
    <img src="<?= base_url() ?>plantillas/img/Logo-uam.jpg" class="logouam" width="400" height="100" class="img-responsive" >
    <div class="imagenes">
    <img src="<?= base_url() ?>plantillas/img/logoie.jpg"  class="img-thumbnail" width="190" height="100" >
    <img src="<?= base_url() ?>plantillas/img/logoredes.jpg" class="img-thumbnail"  class="logoredes" width="100" height="100" >
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
      <li class="active" class="menu"><a href="#">Inicio</a></li>
      <li class="active" class="menu"><a href="#">Perfil</a></li>
      <li class="active" class="menu"><a href="#">Investigación</a></li>
      <li class="active" class="menu" >
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expended="false">
       Productividad académica 
       <span class="caret"></span>
       </a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#"></a></li>
        <li role="separator" class="divider"></li>
        <li><a href="<?= base_url()?>principal_libro/libro">Libro</a></li>
        <li><a href="<?= base_url()?>principal_capitulo/capitulo">Capítulo de libro</a></li> 
        <li><a href="#">Revista</a></li>      
       </ul>
      </li>
      <li class="active" class="menu"><a href="#">Infraestructura</a></li>
     </ul> 
    </div> 
  </nav>
 </header>