<section class="jumbotron">
 
  <div class="container">
   <h1 class="titulo">SPA-UAM-I</h1>
   <p>Sistema de productividad académica</p>
  </div>
 </section>
<body>
    <div class="row">
	<div class="col-sm-6 col-sm-offset-3 myform-cont">
		<form method="post" action="principal_libro/guardarRegistro">
		<div class="myform-top">
                  <div class="myform-top-left">
                      <h3>Registrar</h3>
                        <p class="regis">Ingrese los dsatos a registrar:</p>
                  </div>
                  </div>

			<div class="form-group" col-lg-8>
				<label>Título del Articulo</label>
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
				<label>Título del Libro</label>
				<input type="text" name="título_del_libro" class="form-control" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Número del Capítulo</label>
				<input type="text" name="núm_del_capítulo" class="form-control" required="true">
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
				<label>País</label>
				<input type="text" name="país" class="form-control" required="true">
			</div>
			
			<div class="form-group" col-lg-8>
				<label>Página Inicio</label>
				<input type="text" name="pág_ini" class="form-control" required="true">
			</div>

			<div class="form-group" col-lg-8>
				<label>Página Fin</label>
				<input type="text" name="pág_fin" class="form-control" required="true">
			</div>

			<div class="clearfix"></div>
			<input type="submit" class="btn btn-primary" name="" value="Guardar">
			<input type="reset" class="btn btn-ganger" value="Limpiar" name="">
		</form>
	</div>
	</div>
	</div>

	<br><br><br>

	<div class="col-lg-5">
		<table border="1" class="table table-striped table-bordered table-hover table-condensed">
			<tr>
			<th>TITULO DEL ARTICULO</th>
			<th>AUTORES</th>
			<th>AUTORES EXTERNOS</th>
			<th>TITULO DEL LIBRO</th>
			<th>NUMERO DEL CAPITULO</th>
			<th>EDITORES</th>
			<th>EDITORIAL</th>
			<th>ISBN</th>
			<th>PAIS</th>
			<th>PÁGINA INICIO</th>
			<th>PÁGINA FIN</th>
			<th colspan="2">OPCIONES</th>
			</tr>

		<?php
			foreach ($Libros as $libro) {
				echo "<tr>"."<td>".$libro->titulo_articulo."</td>".
				"<td>".$libro->autores."</td>".
				"<td>".$libro->autoresExternos."</td>".
				"<td>".$libro->título_del_libro."</td>".
				"<td>".$libro->núm_del_capítulo."</td>".
				"<td>".$libro->editores."</td>".
				"<td>".$libro->editorial."</td>".
				"<td>".$libro->ISBN."</td>".
				"<td>".$libro->país."</td>".
				"<td>".$libro->pág_ini."</td>".
				"<td>".$libro->pág_fin."</td>".
				"<td><a href='principal_libro/editar_Libro/".$libro->id_artLibCapítulo."'><span class='glyphicon glyphicon-user'></span>Editar</a></td>".
				"<td><a href='principal_libro/eliminarLibro/".$libro->id_artLibCapítulo."'><span class='glyphicon glyphicon-user'></span>Eliminar</a></td>".
				"</tr>";
			}
		?>

		</table>
	</div>
</body>
