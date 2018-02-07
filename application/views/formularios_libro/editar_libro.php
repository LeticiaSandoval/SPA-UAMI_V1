<section class="jumbotron">
 
  <div class="container">
   <h1 class="titulo">SPA-UAM-I</h1>
   <p>Sistema de productividad académica</p>
  </div>
 </section>
<body>
<div class="container">
         <div class="col-sm-8 col-sm-offset-2 myform-cont" >
		<form class="form-horizontal" method="post" action="<?php echo base_url();?>/principal_libro/actualizarLibro">
		<div class="myform-top">
             <div class="myform-top-left">
               <h3>Editar libro</h3>
                <p class="regis">Seleccione los campos a editar:</p>
               </div>
         </div>
        <br>
		<div class="form-group">
			<label class="control-label col-md-2">ID</label>
			<div class="col-md-10">
			<input type="text" readonly="true"  name="id_libro" value="<?php echo $Libro->id_libro;?>" class="form-control" paceholder="ID">	
			</div>	
		</div>

		<div class="form-group">
				<label class="control-label col-md-2">Título del Libro:</label>
				<div class="col-md-10">
				   <input type="text"  name="título_del_libro" required="true" value="<?php echo $Libro->título_del_libro;?>" class="form-control" placeholder="Título del libro">
				</div>
		</div>	
			<div class="form-group">
				<label class="control-label col-md-2">Autores:</label>
				<div class="col-md-10">
				   <input type="text" name="autores" class="form-control" required="true" value="<?php echo $Libro->autores;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-md-2">Autores externos:</label>
				<div class="col-md-10">
				   <input type="text" name="autoresExternos" class="form-control" required="true" value="<?php echo $Libro->autoresExternos;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">Tipo:</label>
				<div class="col-md-10">
					<select name="tipo" class="form-control" required="true">
					<option value="Docencia">Docencia</option>
					<option value="Divulgación">Divulgación</option>
					<option value="Investigación">Investigación</option>
				</select>
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">Estatus:</label>
				<div class="col-md-10">
					<select name="estatus" class="form-control" required="true">
					<option value="Aceptado">Aceptado</option>
					<option value="En prensa">En prensa</option>
					<option value="Publicado">Publicado</option>

				</select>
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">Editorial:</label>
				<div class="col-md-10">
				  <input type="text" name="editorial" class="form-control" required="true" value="<?php echo $Libro->editorial;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">Editores:</label>
				<div class="col-md-10">
				  <input type="text" name="editores" class="form-control" required="true" value="<?php echo $Libro->editores;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">ISBN:</label>
				<div class="col-md-10">
				  <input type="text" name="ISBN" class="form-control" required="true" value="<?php echo $Libro->ISBN;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">Año:</label>
				<div class="col-md-10">
				 <input type="text" name="año" class="form-control" required="true" value="<?php echo $Libro->año;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">País:</label>
				<div class="col-md-10">
				  <input type="text" name="país" class="form-control" required="true" value="<?php echo $Libro->país;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">Páginas:</label>
				<div class="col-md-10">
				  <input type="text" name="páginas" class="form-control" required="true" value="<?php echo $Libro->páginas;?>">
				</div>
			</div>
			<div class="form-group" col-lg-8>
				<label class="control-label col-sm-2">URL:</label>
				<div class="col-md-10">
				<input type="text" name="URL" class="form-control"required="true" value="<?php echo $Libro->URL;?>">
				</div>
			</div>

			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">
			<a href="<?= base_url()?>principal_libro/libro" class="btn btn-primary btn-danger active" role="button">Cancelar</a>

		</form>
	</div>
	</div>
	</div>
</body>
</html>