<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda_proyectofinal");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla productos donde el campo id sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM productos WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($respuesta);
?>


    <?php
    // 6) Asignamos a diferentes variables los respectivos valores del array $datos.
    $tipo_producto = $datos["tipo_producto"];
    $nombre_producto = $datos["nombre_producto"];
    $precio = $datos["precio"];
    $imagen = $datos['imagen'];
    ?>

    <h2>Modificar</h2>
    <p>Ingrese los nuevos datos del producto.</p>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Tipo de producto</label>
        <input type="text" name="tipo" placeholder="tipo_producto" value="<?php echo "$tipo_producto"; ?>">
        <label>Nombre de producto</label>
        <input type="text" name="nombre" placeholder="nombre_producto" value="<?php echo "$nombre_producto"; ?>">
        <label>Precio</label>
        <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
        <label>Imagen</label>
        <input type="file" name="imagen" placeholder="imagen">
        <input type="submit" name="guardar_cambios" value="Guardar Cambios">
        <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
    </form>

    <?php
    // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
    if (array_key_exists('guardar_cambios', $_POST)) {
        // 2') Almacenamos los datos actualizados del envío POST
        $tipo_producto = $_POST['tipo'];
        $nombre_producto = $_POST['nombre'];
        $precio = $_POST['precio'];

        // Verifica si se ha cargado una nueva imagen
        if (!empty($_FILES['imagen']['tmp_name'])) {
            $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            // 3') Preparar la orden SQL con la nueva imagen
            $consulta = "UPDATE productos SET tipo_producto='$tipo_producto', nombre_producto='$nombre_producto', precio='$precio', imagen='$imagen' WHERE id=$id";
        } else {
            // 3') Preparar la orden SQL sin cambiar la imagen
            $consulta = "UPDATE productos SET tipo_producto='$tipo_producto', nombre_producto='$nombre_producto', precio='$precio' WHERE id=$id";
        }

        // 4') Ejecutar la orden y actualizamos los datos
        if (mysqli_query($conexion, $consulta)) {
            // a) Redirigir a abm.php
            header('Location: abm.php');
            exit;
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
        }
    }

    // Cierra la conexión
    mysqli_close($conexion);
    ?>

 <!-- ABM End -->

 