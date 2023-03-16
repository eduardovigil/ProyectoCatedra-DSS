<?php
// Se crea las instancias y los datos necesarios para la la conexion de la bdd
$host = 'us-cdbr-east-06.cleardb.net';
$username = 'b52fc2fc6837e1';
$password = 'd106ca9d';
$database = 'heroku_d19aa97ca0bddc1';
// Creacion de la conexion de la bdd con mysql
$conn = mysqli_connect($host, $username, $password, $database);
// Chequea que la conexion este establecida con la bdd
// Verificar la conexión
//if (!$conn) {die("Conexión fallida: " . mysqli_connect_error());}
?>