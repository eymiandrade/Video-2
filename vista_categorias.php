<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Categorias</h1>
<a href="form_nueva_categoria.html">Nueva Categoria</a><br><br>
<table border="1" width="80%" align="center">
	<tr>
		<th>Opciones</th>
		<th>Nombre Categoria</th>
		<th>Estado</th>
	</tr>
	<?php
	require 'conexion.php';
	$consulta=mysqli_query ($conexion, "SELECT * FROM categorias");
	while ($fila=mysqli_fetch_array( $consulta)) {
		$id_categoria=$fila['id_categoria'];
		if ($fila['activo']==1) {
			$texto='Activo';
		} else {
			$texto='Inactivo';
		}
		echo '<tr>';
		echo '<td><a href="form_editar_categoria.php?id_categoria='.$id_categoria.'">Editar</a>&nbsp;<a href="">Eliminar</a></td>';
		echo '<td>'.$fila['categoria'].'</td>';
		echo '<td>'.$texto.'</td>';
		echo '</tr>';
	}
	?>
</table>
</body>
</html>