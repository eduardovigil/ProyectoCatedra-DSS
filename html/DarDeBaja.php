<!DOCTYPE html>
<html>
<head>
	<title>Cambiar estado de registro</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<h1>Cambiar estado de empleado</h1>
	<form action="../DarBaja.php" method="post">
		<label for="idusuario">ID del empleado:</label>
		<input type="text" name="id_registro" id="id_registro">
		<button type="submit">Cambiar estado</button>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de registros</title>
</head>
<body>
	<h1>Listado de registros</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Incluir archivo de conexión a la base de datos
			include("cone.php");

			// Consulta para obtener todos los registros de la tabla
			$sql = "SELECT * FROM usuario";

			$resultado = mysqli_query($conn, $sql);

			if (mysqli_num_rows($resultado) > 0) {
				while ($fila = mysqli_fetch_assoc($resultado)) {
					$idusuario = $fila['id'];
					$nombre = $fila['nombre'];
					$estado = $fila['estado'];

					echo "<tr>";
					echo "<td>$idusuario</td>";
					echo "<td>$nombre</td>";
					echo "<td>$estado</td>";
					echo "<td><a href='../DarBaja.php?idusuario=$idusuario'>Cambiar estado</a></td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
			}

			// Cerrar la conexión a la base de datos
		
