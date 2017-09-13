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
	<div class="col-lg-10">
	<div class="table-responsive">

		<table border="1" class="table table-striped table-bordered table-hover table-condensed" class=".table-hover">
			<tr>
			<th>TITULO DEL LIBRO</th>
			<th>AUTORES</th>
			<th>AUTORES EXTERNOS</th>
			<th>TIPO</th>
			<th>ESTATUS</th>
			<th>EDITORIAL</th>
			<th>EDITORES</th>
			<th>ISBN</th>
			<th>PAIS</th>
			<th>PÁGINAS</th>
			<th>URL</th>
			<th colspan="2">OPCIONES</th>
			</tr>

		<?php
			foreach ($Libros as $libro) {
				echo "<tr>"."<td>".$libro->título_del_libro."</td>".
				"<td>".$libro->autores."</td>".
				"<td>".$libro->autoresExternos."</td>".
				"<td>".$libro->tipo."</td>".
				"<td>".$libro->estatus."</td>".
				"<td>".$libro->editorial."</td>".
				"<td>".$libro->editores."</td>".
				"<td>".$libro->ISBN."</td>".
				"<td>".$libro->país."</td>".
				"<td>".$libro->páginas."</td>".
				"<td>".$libro->URL."</td>".
				"<td><a href='editar_Libro/".$libro->id_libro."'><span class='glyphicon glyphicon-user'></span>Editar</a></td>".
				"<td><a href='eliminarLibro/".$libro->id_libro."'><span class='glyphicon glyphicon-user'></span>Eliminar</a></td>".
				"</tr>";
			}
		?>

		</table>
		</div>
		</div>

		 <div class="col-md-12 text-right" >
       <a href="<?= base_url()?>principal_libro/"><button class="btn btn-default btn-lg" type="button" class="botonEntrar">Agregar libro </button></a>
 </div>
	</div>