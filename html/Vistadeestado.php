<!DOCTYPE html>
<html>
<head>
	<title>Listado de registros</title>
	<link rel="stylesheet" href="../css/estado.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<h1>Listado de registros</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Incluir archivo de conexión a la base de datos
			include '../php/cone.php';

			// Consulta para obtener todos los registros de la tabla
			$sql = "SELECT * FROM usuarios";

			$resultado = mysqli_query($conn, $sql);

			if (mysqli_num_rows($resultado) > 0) {
				while ($fila = mysqli_fetch_assoc($resultado)) {
					$idusuario = $fila['idusuario'];
					$nombre = $fila['nombre'];
					$estado = $fila['estado'];

					echo "<tr>";
					echo "<td>$idusuario</td>";
					echo "<td>$nombre</td>";
					echo "<td>$estado</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
			}

			// Cerrar la conexión a la base de datos
		?>

<form action="../html/DarDeBaja.php" method="POST">
   <button name="enviar" value="1" class="btn btn-primary">Regresar</button><br><br>
</form>

        </tbody>
        </body>
</html>