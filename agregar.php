<?php
$conexion = mysqli_connect("127.0.0.1","root","");
    
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($conexion,"tienda_proyectofinal");


  $tipo_producto = $_POST ['tipo_producto'];
  $nombre_producto = $_POST['nombre_producto'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $precio = $_POST['precio'];

$consulta = "INSERT INTO productos (id,tipo_producto,nombre_producto,precio,imagen)
VALUES ('','$tipo_producto','$nombre_producto','$precio','$imagen')";

if (mysqli_query($conexion, $consulta)) {
    header("location:abm.php");
    exit;
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
 