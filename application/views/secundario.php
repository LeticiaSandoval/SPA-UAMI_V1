<body>
     <header>
     <nav class="navbar navbar-inverse navbar-static-top" role="navigation"><img src="<?= base_url() ?>plantillas/img/Logo-uam.jpg">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion">
           <span class="sr-only">Desplegar / Ocultar Menu</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="#" class="navbar-brand">SPA-UAMI</a>
       </div>
       <!--Inicia Menu -->

       <div class="collapse navbar-collapse" id="navegacion-fm"> 

     <ul class="nav navbar-nav">
      
      <li class="active"><a href="#">Inicio</a></li>

      <li class="dropdown">

       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
       Categorias
       <span class="caret"></span>
       </a>

       <ul class="dropdown-menu" role="menu">
        <li><a href="#">Menu</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">cat 1</a></li>
        <li><a href="#">cat 2</a></li>
        <li><a href="#">cat 3</a></li>
       </ul>

      </li>

      <li><a href="#">Contacto</a></li>
     </ul> 

     <form action="" class="navbar-form navbar-right" role="search">
      <div class="form-group">
       <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-primary">
       <span class="glyphicon glyphicon-search"></span>
      </button>

     </form>

    </div>
   </div>
  </nav>
 </header>

 <section class="jumbotron">
  <div class="container">
   <h1>SPA-UAMI</h1>
   <p>Sistema de productividad académica</p>
  </div>
 </section>
 <section class="container">
 <div class="row">
 <section class="col-md-8">
     <div class="miga-de-pan">
       <ol class="bredcrumb">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Login</a></li>
          <li class="active">Diseño web</li>
       </ol>
     </div>
        <a href="#" class="thum pull-left"><img src="<?= base_url() ?>plantillas/img/uami.jpg"></a>
        
 </section>
   
 </div>
   
 </section>