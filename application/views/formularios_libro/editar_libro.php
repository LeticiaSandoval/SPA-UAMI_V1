<!DOCTYPE html>
<html>
<head>
	<title>Modificar libro</title>
</head>
<body>

	<div class="col-lg-5">
		<form method="post" action="<? echo base_url();?>/principal_libro/actualizarLibro">

			<div class="form-group" col-lg-8>
				<label>ID</label>
				<input type="text" readonly="true" class="form-control" name="id_artLibCapítulo" value="<? echo $Libro->id_artLibCapítulo;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Titulo del Articulo</label>
				<input type="text" class="form-control" name="titulo_articulo" required="true" value="<? echo $Libro->titulo_articulo;?>">
			</div>	
			<div class="form-group" col-lg-8>
				<label>Autores</label>
				<input type="text" name="autores" class="form-control" required="true" value="<? echo $Libro->autores;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Autores externos</label>
				<input type="text" name="autoresExternos" class="form-control" required="true" value="<? echo $Libro->autoresExternos;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Titulo del Libro</label>
				<input type="text" name="título_del_libro" class="form-control" required="true" value="<? echo $Libro->título_del_libro;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Numero del Capitulo</label>
				<input type="text" name="núm_del_capítulo" class="form-control" required="true" value="<? echo $Libro->núm_del_capítulo;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Editores</label>
				<input type="text" name="editores" class="form-control" required="true" value="<? echo $Libro->editores;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Editorial</label>
				<input type="text" name="editorial" class="form-control" required="true" value="<? echo $Libro->editorial;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>ISBN</label>
				<input type="text" name="ISBN" class="form-control" required="true" value="<? echo $Libro->ISBN;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Año</label>
				<input type="text" name="año" class="form-control" required="true" value="<? echo $Libro->año;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Pais</label>
				<input type="text" name="país" class="form-control" required="true" value="<? echo $Libro->país;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Pagina Inicio</label>
				<input type="text" name="pág_ini" class="form-control" required="true" value="<? echo $Libro->pág_ini;?>">
			</div>
			<div class="form-group" col-lg-8>
				<label>Pagina Fin</label>
				<input type="text" name="pág_fin" class="form-control" required="true" value="<? echo $Libro->pág_fin;?>">
			</div>
			<div class="clearfix"></div>
			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">

		</form>
	</div>
</body>
</html>