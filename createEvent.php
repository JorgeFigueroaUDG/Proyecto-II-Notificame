<?php
//mysql://bab1268ab5e278:ce1a7eef@us-cdbr-east-06.cleardb.net/heroku_e021dfd5e5644c0?reconnect=true
//http://localhost/plb/NotificameProyectoVII/loging.html
$conexion= new mysqli('us-cdbr-east-06.cleardb.net','bab1268ab5e278','ce1a7eef','heroku_e021dfd5e5644c0');
//$conexion = mysqli_connect('localhost','root','','commentsadmin');
	$bday = $_POST['bday'];
    $amenidad = $_POST['amenidad'];
	$evento = $_POST['evento'];
	
// Verificamos la conexión con el servidor MySQL
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}

// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE IF NOT EXISTS events (
id INT(150) NOT NULL AUTO_INCREMENT PRIMARY KEY,
bday VARCHAR(150) NOT NULL,
amenidad VARCHAR(150) NOT NULL,
evento VARCHAR(150) NOT NULL
)";

// Se verifica si la tabla ha sido creado
if ($conexion->query($sql) === TRUE) {
    echo "la tabla comentarios ha sido creado";
} else {
    echo "Hubo un error al crear la tabla comentarios: " . $conn->error;
}

	$sql="INSERT into events (bday,amenidad,evento)
			values ('$bday','$amenidad','$evento')";
	echo mysqli_query($conexion,$sql);
?>