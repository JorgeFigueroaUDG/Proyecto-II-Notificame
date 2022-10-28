<?php
//mysql://bab1268ab5e278:ce1a7eef@us-cdbr-east-06.cleardb.net/heroku_e021dfd5e5644c0?reconnect=true
$conexion= new mysqli('us-cdbr-east-06.cleardb.net','bab1268ab5e278','ce1a7eef','heroku_e021dfd5e5644c0');
//$conexion = mysqli_connect('localhost','root','','commentsadmin');
	$notification=$_POST['notification'];
    $type = $_POST['type'];
	$message=$_POST['message'];
	
// Verificamos la conexión con el servidor MySQL
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}

// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE IF NOT EXISTS notificationresidents (
id INT(150) NOT NULL AUTO_INCREMENT PRIMARY KEY,
notification VARCHAR(150) NOT NULL,
type VARCHAR(150) NOT NULL,
message VARCHAR(150) NOT NULL
)";

// Se verifica si la tabla ha sido creado
if ($conexion->query($sql) === TRUE) {
    echo "la tabla comentarios ha sido creado";
} else {
    echo "Hubo un error al crear la tabla comentarios: " . $conn->error;
}

	$sql="INSERT into notificationresidents (notification,type,message)
			values ('$notification','$type','$message')";
	echo mysqli_query($conexion,$sql);
?>