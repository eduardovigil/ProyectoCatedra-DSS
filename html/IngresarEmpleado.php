<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ingresar nuevo empleado</title>
</head>
<body>
  <h1>Ingresar nuevo empleado</h1>

<div class="form">
<form method="POST" action="../php/recibirDatosEmpleado.php">
 <div class="form-group"></div>
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre"><br>
  </div>
  <div class="form-group">
  <label for="nombre">Apellido:</label>
  <input type="text" id="apellido" name="apellido"><br>
  </div>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>
 <div class="form-group"></div>

 <label for="email">Rol:</label>
  <select name="select" id="cargo">
  <option value="value1">Cajero</option>
  <option value="value2" selected>Personal de limpieza</option>
  <option value="value3">Secretarias</option>
  <option value="value4">Personal de mesa</option>
  <option value="value5">Secretarias</option>
  </div>

</select>
  <input type="submit" value="Enviar">
</form>

    
</body>
</html>