<?php
  $conexion= new mysqli('us-cdbr-east-06.cleardb.net','bab1268ab5e278','ce1a7eef','heroku_e021dfd5e5644c0');
  //$conexion = mysqli_connect('localhost','root','','commentsadmin');
 
    $myArray = array();

    $sql = "SELECT * FROM notificationAdmin";
    $resultado = mysqli_query($conexion, $sql);
  
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
}
echo json_encode($myArray);    
?>