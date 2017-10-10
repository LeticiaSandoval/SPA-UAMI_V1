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
    <div class="container">
	<div class="col-sm-8 col-sm-offset-2 myform-cont">
		<form class="form-horizontal" method="post" action="principal_capitulo/guardarRegistroCapitulo">
		<div class="myform-top">
                  <div class="myform-top-left">
                      <h3>Registrar capítulo de libro</h3>
                        <p class="regis">Ingrese los datos a registrar:</p>
                  </div>
         </div>
         <br>

			<div class="form-group">
				<label class="control-label col-md-2" for="Título del Capitulo">Título del Capítulo:</label>
				<div class="col-md-10">
					<input type="text" name="titulo_capitulo" class="form-control" placeholder="Título del capítulo">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Autores:</label>
				<div class="col-md-10">
					<input type="text" name="autores" class="form-control" required="true" placeholder="Aturores">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Autores externos:</label>
				<div class="col-md-10">
					<input type="text" name="autoresExternos" class="form-control" placeholder="Autores externos" required="true">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Tipo:</label>
				<div class="col-md-10">
					<select name="tipo" class="form-control" required="true">
					<option value="Docencia">Docencia</option>
					<option value="Divulgación">Divulgación</option>
					<option value="Investigación">Investigación</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Estatus:</label>
				<div class="col-md-10">
					<select name="estatus" class="form-control" required="true">
					<option value="Aceptado">Aceptado</option>
					<option value="En prensa">En prensa</option>
					<option value="Publicado">Publicado</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Título del Libro:</label> 
				<div class="col-md-10">
					<input type="text" name="título_del_libro" class="form-control" placeholder="Título del libro" required="true">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Número del capítulo:</label> 
			    <div class="col-md-10">
			    	<input type="text" name="núm_del_capítulo" class="form-control" placeholder="Número del capítulo" required="true">
			    </div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Editores:</label> 
				<div class="col-md-10">
					<input type="text" name="editores" class="form-control" placeholder="Editores" required="true">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Editorial:</label>
				<div class="col-md-10">
					<input type="text" name="editorial" class="form-control" placeholder="Editorial" required="true">
				</div>
				
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">ISBN:</label>
				<div class="col-md-10">
					<input type="text" name="ISBN" class="form-control" placeholder="ISBN" required="true">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Año:</label>
				<div class="col-md-10">
					<input type="text" name="año" class="form-control" placeholder="Año" required="true">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">País:</label>
				<div class="col-md-10">
					<input type="text" name="país" class="form-control" placeholder="País" required="true">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-2"">Páginas:</label>
				<div class="col-md-10">
					<input type="text" name="paginas" class="form-control" placeholder="Páginas" required="true">
				</div> 
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">URL:</label>
				<div class="col-md-10">
					<input type="text" name="URL" class="form-control" placeholder="URL" required="true">
				</div>
			</div>

			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">

			<a href="<?= base_url()?>principal_capitulo/capitulo" class="btn btn-primary btn-danger active" role="button">Cancelar</a>
		</form>
	</div>
	</div>
	</div>

</body>
