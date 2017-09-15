<section class="jumbotron">
 
  <div class="container">
   <h1 class="titulo">SPA-UAM-I</h1>
   <p>Sistema de productividad académica</p>
  </div>
 </section>
<body>
<div class="row">
         <div class="col-sm-6 col-sm-offset-3 myform-cont" >
		<form method="post" action="<?php echo base_url();?>/principal_capitulo/actualizarCapitulo">
		<div class="myform-top">
                  <div class="myform-top-left">
                      <h3>Editar</h3>
                        <p class="regis">Seleccione los campos a editar:</p>
                  </div>
                  </div>

			<div class="form-group" col-lg-8>
				<label>ID</label>
				<input type="text" readonly="true" class="form-control" name="id_libro" value="<?php echo $Capitulo->id_capituloLibro;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Titulo del Capitulo</label>
				<input type="text" class="form-control" name="titulo_capitulo" required="true" value="<?php echo $Capitulo->titulo_capitulo;?>">
			</div>	
			<div class="form-group" col-lg-8>
				<label>Autores</label>
				<input type="text" name="autores" class="form-control" required="true" value="<?php echo $Capitulo->autores;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Autores externos</label>
				<input type="text" name="autoresExternos" class="form-control" required="true" value="<?php echo $Capitulo->autoresExternos;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Tipo</label>
				<select name="tipo" class="form-inline" required="true">
					<option value="Docencia">Docencia</option>
					<option value="Divulgación">Divulgación</option>
					<option value="Investigación">Investigación</option>
				</select>
			</div>
			<div class="form-group" col-lg-8>
				<label>Estatus</label>
				<select name="estatus" class="form-inline" required="true">
					<option value="Aceptado">Aceptado</option>
					<option value="En prensa">En prensa</option>
					<option value="Publicado">Publicado</option>

				</select>
			</div>
			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Titulo del Libro</label> 
				<input type="text" name="título_del_libro" class="form-control" required="true" value="<?php echo $Capitulo->título_del_libro;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label class="col-lg-4">Numero del capitulo</label> 
				<input type="text" name="núm_del_capítulo" class="form-control" required="true" value="<?php echo $Capitulo->núm_del_capítulo;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Editorial</label>
				<input type="text" name="editorial" class="form-control" required="true" value="<?php echo $Capitulo->editorial;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Editores</label>
				<input type="text" name="editores" class="form-control" required="true" value="<?php echo $Capitulo->editores;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>ISBN</label>
				<input type="text" name="ISBN" class="form-control" required="true" value="<?php echo $Capitulo->ISBN;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Año</label>
				<input type="text" name="año" class="form-control" required="true" value="<?php echo $Capitulo->año;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Pais</label>
				<input type="text" name="país" class="form-control" required="true" value="<?php echo $Capitulo->país;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Paginas</label>
				<input type="text" name="paginas" class="form-control" required="true" value="<?php echo $Capitulo->paginas;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>URL</label>
				<input type="text" name="URL" class="form-control" required="true" value="<?php echo $Capitulo->URL;?>">
			</div>
			<div class="clearfix"></div>
			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">

		</form>
	</div>
	</div>
	</div>
</body>
</html>