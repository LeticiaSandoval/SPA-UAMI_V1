<section class="jumbotron">
 
  <div class="container">
   <h1 class="titulo">SPA-UAM-I</h1>
   <p>Sistema de productividad académica</p>
    <div class="col-md-17 text-right" >
       <a href="<?= base_url()?>inicio"><button class="btn btn-default btn-lg" type="button" class="botonEntrar"> Cerrar sesión </button></a>
 </div>
  </div>

 </section>
<body>
    <div class="row">
	<div class="col-sm-6 col-sm-offset-3 myform-cont">
		<form class=class="form-inline" method="post" action="principal_libro/guardarRegistro">
		<div class="form-group">
                  <div class="myform-top-left">
                      <h3>Registrar</h3>
                        <p class="regis">Ingrese los datos a registrar:</p>
                  </div>
         </div>

			<div class="form-group" col-lg-10>
				<label for="Título del Articulo">Título del Articulo</label>
				<input type="text" name="titulo_articulo" class="form-inline">
			</div>

			<div class="form-group" col-lg-8>
				<label>Autores</label>
				<input type="text" name="autores" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Autores externos</label>
				<input type="text" name="autoresExternos" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Título del Libro</label>
				<input type="text" name="título_del_libro" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Número del Capítulo</label>
				<input type="text" name="núm_del_capítulo" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Editores</label> 
				<input type="text" name="editores" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Editorial</label>
				<input type="text" name="editorial" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>ISBN</label>
				<input type="text" name="ISBN" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Año</label>
				<input type="text" name="año" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>País</label>
				<input type="text" name="país" class="form-inline" required="true">
			</div>
			
			<div class="form-group" col-lg-8>
				<label>Página Inicio</label>
				<input type="text" name="pág_ini" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Página Fin</label>
				<input type="text" name="pág_fin" class="form-inline" required="true">
			</div>

			<div class="clearfix"></div>
			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">
		</form>
	</div>
	</div>
	</div>

</body>
