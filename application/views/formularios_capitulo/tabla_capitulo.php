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

       <a href="<?= base_url()?>principal_capitulo">Agregar capítulo de libro</a>
	<div class="col-lg-10">
	<div class="table-responsive">

		<table border="1" class="table table-striped table-bordered table-hover table-condensed" class=".table-hover">
			<tr>
			<th>TÍTULO DEL CAPÍTULO</th>
			<th>AUTORES</th>
			<th>AUTORES EXTERNOS</th>
			<th>TIPO</th>
			<th>ESTATUS</th>
			<th>TÍTULO DEL LIBRO</th>
			<th>NÚMERO DEL CAPÍTULO</th>
			<th>EDITORES</th>
			<th>EDITORIAL</th>
			<th>ISBN</th>
			<th>AÑO</th>
			<th>PAÍS</th>
			<th>PÁGINAS</th>
			<th>URL</th>
			<th colspan="2">OPCIONES</th>
			</tr>

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
				"<td><a href='editar_Capitulo/".$capitulo->id_capituloLibro."'><span class='glyphicon glyphicon-user'></span>Editar</a></td>".
				"<td><a href='eliminarCapitulo/".$capitulo->id_capituloLibro."'><span class='glyphicon glyphicon-user'></span>Eliminar</a></td>".
				"</tr>";
			}
		?>

		</table>
		</div>
		</div>
	</div>