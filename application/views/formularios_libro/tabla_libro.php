<body>
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
		 <div class="col-md-12 text-right" >
       <a href="<?= base_url()?>principal_libro/"><button class="btn btn-default btn-lg" type="button" class="botonEntrar">Agregar</button></a>
 </div>
	</div>