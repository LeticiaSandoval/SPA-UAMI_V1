<section class="jumbotron">
 
  <div class="container">
   <h1 class="titulo">SPA-UAM-I</h1>
   <p>Sistema de productividad académica</p>
  </div>
 </section>
<body>
<div class="container">
         <div class="col-md-8 col-sm-offset-2 myform-cont" >
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>/principal_capitulo/actualizarCapitulo">
		<div class="myform-top">
                  <div class="myform-top-left">
                      <h3>Editar capítulo de libro</h3>
                        <p class="regis">Seleccione los campos a editar:</p>
                  </div>
        </div>
        <br>

			<div class="form-group">
				<label class="control-label col-md-2">ID:</label>
				<div class="col-md-10">
					<input type="text" readonly="true" class="form-control" name="id_libro" value="<?php echo $Capitulo->id_capituloLibro;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Titulo del Capítulo:</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="titulo_capitulo" required="true" value="<?php echo $Capitulo->titulo_capitulo;?>">
				</div>
			</div>	
			<div class="form-group">
				<label class="control-label col-md-2">Autores:</label>
				<div class="col-md-10">
					<input type="text" name="autores" class="form-control" required="true" value="<?php echo $Capitulo->autores;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Autores externos:</label>
				<div class="col-md-10">
					<input type="text" name="autoresExternos" class="form-control" required="true" value="<?php echo $Capitulo->autoresExternos;?>">
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
				<div>
					
				</div>
				<div class="col-md-10">
					<select name="estatus" class="form-control" required="true">
					<option value="Aceptado">Aceptado</option>
					<option value="En prensa">En prensa</option>
					<option value="Publicado">Publicado</option>

				</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Título del libro</label> 
				<div class="col-md-10">
					<input type="text" name="título_del_libro" class="form-control" required="true" value="<?php echo $Capitulo->título_del_libro;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Número del capítulo:</label> 
				<div class="col-md-10">
					<input type="text" name="núm_del_capítulo" class="form-control" required="true" value="<?php echo $Capitulo->núm_del_capítulo;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Editorial:</label>
				<div class="col-md-10">
					<input type="text" name="editorial" class="form-control" required="true" value="<?php echo $Capitulo->editorial;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Editores:</label>
				<div class="col-md-10">
					<input type="text" name="editores" class="form-control" required="true" value="<?php echo $Capitulo->editores;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">ISBN:</label>
				<div class="col-md-10">
					<input type="text" name="ISBN" class="form-control" required="true" value="<?php echo $Capitulo->ISBN;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-md-2">Año:</label>
				<div class="col-md-10">
					<input type="text" name="año" class="form-control" required="true" value="<?php echo $Capitulo->año;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">País:</label>
				<div class="col-md-10">
					<input type="text" name="país" class="form-control" required="true" value="<?php echo $Capitulo->país;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Páginas:</label>
				<div class="col-md-10">
					<input type="text" name="paginas" class="form-control" required="true" value="<?php echo $Capitulo->paginas;?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">URL:</label>
				<div class="col-md-10">
					<input type="text" name="URL" class="form-control" required="true" value="<?php echo $Capitulo->URL;?>">
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
</html>