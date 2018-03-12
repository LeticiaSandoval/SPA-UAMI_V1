<section class="jumbotron">
 
  <div class="container">
   <h1 class="titulo">SPA-UAM-I</h1>
   <p>Sistema de productividad académica</p>
   </div>
 </section>
<body>
	<h2>Libro</h2>

	 <h4 class="text-right"><a href="<?= base_url()?>principal_libro/"> <span class="glyphicon glyphicon-plus"></span>Añadir</a> </h4>
	 <br>
	       
	<div class="col-lg-12">
	<div class="table-responsive">

		<table border="1" class="table table-striped table-bordered table-hover table-condensed" class=".table-hover" >
			<thead>
			<tr class="bg-success">
			<th class="text-center">TÍTULO DEL LIBRO</th>
			<th class="text-center">AUTORES</th>
			<th class="text-center">AUTORES EXTERNOS</th>
			<th class="text-center" >TIPO</th>
			<th class="text-center">ESTATUS</th>
			<th class="text-center">EDITORIAL</th>
			<th class="text-center">EDITORES</th>
			<th class="text-center">ISBN</th>
			<th class="text-center">AÑO</th>
			<th class="text-center">PAÍS</th>
			<th class="text-center">PÁGINAS</th>
			<th class="text-center">URL</th>
			<th colspan="2">OPCIONES</th>
			</tr>
			</thead>

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
				"<td>".$libro->año."</td>".
				"<td>".$libro->país."</td>".
				"<td>".$libro->páginas."</td>".
				"<td>".$libro->URL."</td>".
				"<td><a href='editar_Libro/".$libro->id_libro."'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>".
				"<td><a href='eliminarLibro/".$libro->id_libro."'><span class='glyphicon glyphicon-trash'></span>Eliminar</a></td>".
				"</tr>";
			}
		?>

		</table>
		</div>
		</div>
	</div>