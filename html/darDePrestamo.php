<!DOCTYPE html>
<html>
<head>
	<title>Cambiar estado de registro</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php include('menu.php') ?>

	<h1>Cambiar estado de prestamo</h1>
	<form action="../php/DarPrestamo.php" method="post">
		<label for="idcuenta">ID de la cuenta:</label>
		<input type="text" name="idcuenta" id="idcuenta">
		<button type="submit" class="btn btn-success">Cambiar estado de prestamo</button>
	</form>
</body>
</html>