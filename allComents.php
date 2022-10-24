<?php
   $conexion= new mysqli('us-cdbr-east-06.cleardb.net','b381c8b9e9fa0a','5e7e8ce7','heroku_013d6ff191d7a71');
    $myArray = array();

    $sql = "SELECT * FROM notificationAdmin";
    $resultado = mysqli_query($conexion, $sql);
  
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
}
echo json_encode($myArray);    
?>