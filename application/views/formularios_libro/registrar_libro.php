<!DOCTYPE html>
<html>
<head>
	<title>Registro del Libro/Capitulo de Libro</title>
</head>
<body>
	<div class="col-lg-5">
	<form method="post" action="registrar_libro/guardaRegistro">

	<div class="form-group" col-lg-8>
		<label>Titulo del Articulo</label>
		<input type="text" name="titulo_articulo" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Autores</label>
		<input type="text" name="autores" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Autores externos</label>
		<input type="text" name="autoresExternos" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Titulo del Capitulo</label>
		<input type="text" name="titulo_del_libro" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Numero del Capitulo</label>
		<input type="text" name="num_del_capitulo" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Editores</label>
		<input type="text" name="editores" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Editorial</label>
		<input type="text" name="editorial" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>ISBN</label>
		<input type="text" name="ISBN" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Año</label>
		<input type="text" name="año" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Pais</label>
		<input type="text" name="pais" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Pagina Inicio</label>
		<input type="text" name="pág_ini" class="form-control" required="true">
	</div>
	<div class="form-group" col-lg-8>
		<label>Pagina Fin</label>
		<input type="text" name="pág_fin" class="form-control" required="true">
	</div>

	<div class="clearfix"></div>
	<input type="submit" class="btn btn-primary" name="" value="Guardar">
	<input type="reset" class="btn btn-ganger" value="Limpiar" name="">
	</form>
	</div>
</body>
</html>