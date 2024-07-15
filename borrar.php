
    <!-- ABM Start -->
  
<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda_proyectofinal");

$id = $_GET["id"];

$consulta = "DELETE FROM productos WHERE id=$id";


if (mysqli_query($conexion, $consulta)) {
    header("location:abm.php");
    exit;
} else {
    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
?>

 
    
    <!-- ABM End -->
  