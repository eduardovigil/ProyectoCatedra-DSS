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

 <label for="Dui">DUI</label>
        <input type="text" name="dui" autocomplete="off" maxlength="10"  required></input>

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
  <select name="rol" id="cargo">
  <option value="4">Cajero</option>
  <option value="54" selected>Personal de limpieza</option>
  <option value="74">Secretarias</option>
  <option value="64">Personal de mesa</option>
  <option value="84">Personal de seguridad</option>
  <option value="44">Dependiente</option>
  </select>

  <label for="sucursales">Sucursales:</label>
  <select name="sucursal" id="sucursal">
  <option value="4">San Salvador</option>
  <option value="14" selected>Sonsonate</option>
  <option value="24">San Miguel</option>

  </select>

  <label for="password">Contraseña</label>
        <input type="password" name="password" autocomplete="off" required></input>

        <label for="fechanac">Fecha de Nacimiento</label>
        <input type="date" name="fechanac" autocomplete="off" required></input>

  </div>


  <input type="submit" value="Enviar">
</form>

    
</body>
</html>