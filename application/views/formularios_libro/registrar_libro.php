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
		<form class="form-horizontal" method="post" action="guardarRegistro" style="background-color:rgba(0, 0, 0, 0.3);">
		<div class="myform-top">
            <div class="myform-top-left">
                <h3>Registrar libro</h3>
                <p class="regis">Ingrese los datos a registrar:</p>
             </div>
         </div>
           <br>
			<div class="form-group">
				<label class="control-label col-md-2" for="Título del Libro">Título del Libro:</label>
				<div class="col-md-9">
					<input type="text" name="título_del_libro" class="form-control" placeholder="Título del libro">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Autores:</label>
				<div class="col-md-9">
					<input type="text" name="autores" class="form-control" required="true" placeholder="Autores">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Autores externos:</label>
				<div class="col-md-9">
					<input type="text" name="autoresExternos" class="form-control" required="true" placeholder="Autores externos">
				</div>
				
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Tipo:</label>
				<div class="col-md-9">
					<select name="tipo" class="form-control" required="true">
					<option value="Docencia">Docencia</option>
					<option value="Divulgación">Divulgación</option>
					<option value="Investigación">Investigación</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Estatus:</label>
				<div class="col-md-9"> 
					<select name="estatus" class="form-control" required="true">
					<option value="Aceptado">Aceptado</option>
					<option value="En prensa">En prensa</option>
					<option value="Publicado">Publicado</option>
				</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Editorial:</label> 
				<div class="col-md-9">
					<input type="text" name="editorial" class="form-control" required="true" placeholder="Editorial">
				</div>	
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Editores:</label>
				<div class="col-md-9">
					<input type="text" name="editores" class="form-control" required="true" placeholder="Editores">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">ISBN:</label>
				<div class="col-md-9">
					<input type="text" name="ISBN" class="form-control" required="true" placeholder="ISBN">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">Año:</label>
				<div class="col-md-9">
					<input type="text" name="año" class="form-control" required="true" placeholder="Año">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">País:</label>
				<div class="col-md-9">
					<input type="text" name="país" class="form-control" required="true" placeholder="País">
				</div>
				
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Páginas:</label>
				<div class="col-md-9">
					<input type="text" name="páginas" class="form-control" required="true" placeholder="Páginas">	
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2">URL:</label>
				<div class="col-md-9">
				   <input type="text" name="URL" class="form-control" required="true" placeholder="URL">
				</div>
			</div>
            
            	<div class="btn-group">
            		<input type="submit" class="btn btn-primary" name="" value="Guardar">
            	</div>
            	<div class="btn-group">
            		 <input type="reset" class="btn btn-ganger" value="Limpiar" name="">
            	</div>
            	
            	<a href="<?= base_url()?>principal_libro/libro" class="btn btn-primary btn-danger active" role="button">Cancelar</a>
            	
		</form>
	</div>
	</div>
	</div>

</body>
