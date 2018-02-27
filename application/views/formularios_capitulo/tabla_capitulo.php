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
<h2>Capítulo de libro</h2>

       <h3 class="text-right"><a href="<?= base_url()?>principal_capitulo"><span class="glyphicon glyphicon-plus"></span>Añadir</a></h3>
       <br>
	<div class="col-lg-12">
	<div class="table-responsive">

		<table border="1" class="table table-striped table-bordered table-hover table-condensed" class=".table-hover" class="tablibro">
			<thead class="thead-inverse">
			<tr class="bg-success">
			<th class="text-center">TÍTULO DEL CAPÍTULO</th>
			<th class="text-center">AUTORES</th>
			<th class="text-center">AUTORES EXTERNOS</th>
			<th class="text-center">TIPO</th>
			<th class="text-center">ESTATUS</th>
			<th class="text-center">TÍTULO DEL LIBRO</th>
			<th class="text-center">NÚMERO DEL CAPÍTULO</th>
			<th class="text-center">EDITORES</th>
			<th class="text-center">EDITORIAL</th>
			<th class="text-center">ISBN</th>
			<th class="text-center">AÑO</th>
			<th class="text-center">PAÍS</th>
			<th class="text-center">PÁGINAS</th>
			<th class="text-center">URL</th>
			<th colspan="2">OPCIONES</th>
			</tr>
				
			</thead>
			

		<?php
			foreach ($Capitulos as $capitulo) {
				echo "<tr>"."<td>".$capitulo->titulo_capitulo."</td>".
				"<td>".$capitulo->autores."</td>".
				"<td>".$capitulo->autoresExternos."</td>".
				"<td>".$capitulo->tipo."</td>".
				"<td>".$capitulo->estatus."</td>".
				"<td>".$capitulo->título_del_libro."</td>".
				"<td>".$capitulo->núm_del_capítulo."</td>".
				"<td>".$capitulo->editores."</td>".
				"<td>".$capitulo->editorial."</td>".
				"<td>".$capitulo->ISBN."</td>".
				"<td>".$capitulo->año."</td>".
				"<td>".$capitulo->país."</td>".
				"<td>".$capitulo->paginas."</td>".
				"<td>".$capitulo->URL."</td>".
				"<td><a href='editar_Capitulo/".$capitulo->id_capituloLibro."'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>".
				"<td><a href='eliminarCapitulo/".$capitulo->id_capituloLibro."'><span class='glyphicon glyphicon-trash'></span>Eliminar</a></td>".
				"</tr>";
			}
		?>

		</table>
		</div>
		</div>
	</div>