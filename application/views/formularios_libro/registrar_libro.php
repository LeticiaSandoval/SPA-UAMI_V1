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
		<form class=class="form-inline" method="post" action="guardarRegistro">
		<div class="form-group">
                  <div class="myform-top-left">
                      <h3>Registrar</h3>
                        <p class="regis">Ingrese los datos a registrar:</p>
                  </div>
         </div>

			<div class="form-group" col-lg-10>
				<label for="Título del Libro" class="col-lg-4">Título del Libro</label>
				<input type="text" name="título_del_libro" class="form-inline">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Autores</label>
				<input type="text" name="autores" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Autores externos</label>
				<input type="text" name="autoresExternos" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Tipo</label>
				<select name="tipo" class="form-inline" required="true">
					<option value="Docencia">Docencia</option>
					<option value="Divulgación">Divulgación</option>
					<option value="Investigación">Investigación</option>
				</select>
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Estatus</label>
				<select name="estatus" class="form-inline" required="true">
					<option value="Aceptado">Aceptado</option>
					<option value="En prensa">En prensa</option>
					<option value="Publicado">Publicado</option>

				</select>
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Editorial</label> 
				<input type="text" name="editorial" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Editores</label>
				<input type="text" name="editores" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">ISBN</label>
				<input type="text" name="ISBN" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Año</label>
				<input type="text" name="año" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">País</label>
				<input type="text" name="país" class="form-inline" required="true">
			</div>
			
			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Páginas</label>
				<input type="text" name="páginas" class="form-inline" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label class="col-lg-4">URL</label>
				<input type="text" name="URL" class="form-inline" required="true">
			</div>

			<div class="clearfix"></div>
			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">
		</form>
	</div>
	</div>
	</div>

</body>
