<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>P&P Tienda de mascotas</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
    
            th,td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;        
            }
    
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        marpaciarotti@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        291-5164704
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link">Inicio</a>
                            <a href="product-list.html" class="nav-item nav-link">Productos</a>
                            <div class="navbar-nav ml-auto">
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">La Empresa</a>
                                    <div class="dropdown-menu">
                                        <a href="about-us.html" class="dropdown-item">Sobre Nosotros</a>
                                        <a href="contact.html" class="dropdown-item">Contáctanos</a>
                                        <a href="politicas.html" class="dropdown-item">Políticas de Privacidad</a>
                                        <a href="terminos-condiciones.html" class="dropdown-item">Términos y Condiciones</a>
                                    </div>
                                </div>
                            </div>
                            <a href="my-account.html" class="nav-item nav-link">Mi cuenta</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mi cuenta</a>
                                <div class="dropdown-menu">
                                    <a href="login.html" class="dropdown-item">Login</a>
                                    <a href="registro.html" class="dropdown-item">Registro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->       
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Buscar">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->   
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
    <!-- ABM Start -->
  

    <h1>Tienda de Collares</h1>
    <a class="btn" href="abm.php">Lista de Productos</a>
    <a class="btn" href="consulta1.php">Collares</a>
    <a class="btn" href="consulta2.php">Correas</a>
    <a class="btn" href="consulta3.php">Precio mayor a $500</a>
    <a class="btn" href="agregar.html">Agregar Producto</a>


    <h2>Lista de Productos</h2>
    <p>La siguiente lista muestra los datos de los productos actualmente en stock.</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Tipo de Producto</th>
            <th>Nombre del Producto</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>

        <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tienda_proyectofinal");

        $consulta = "SELECT * FROM productos WHERE tipo_producto = 'correa'";
        $datos = mysqli_query($conexion, $consulta);

            while ($reg = mysqli_fetch_assoc($datos)) {?>
                <tr>
                <td><?php echo $reg['id']; ?></td>
                <td><?php echo $reg['tipo_producto']; ?></td>
                <td><?php echo $reg['nombre_producto']; ?></td>
                <td><img src="data:image/png;base64,<?php echo base64_encode($reg['imagen']); ?>" alt="" width="100px" height="100px"></td>
                <td><?php echo $reg['precio']; ?></td>
                <td>
                    <a href="modificar.php?id=<?php echo $reg['id']; ?>">Editar</a>
                    <a href="borrar.php?id=<?php echo $reg['id']; ?>">Borrar</a>
                </td>
                </tr>
            <?php }
            ?>
    </table>



    
    <!-- ABM End -->
  
       <!-- Brand Start -->
       <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->    


    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer-widget">
                        <h2>Contáctanos</h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                            <p><i class="fa fa-envelope"></i>email@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="footer-widget">
                        <h2>Seguinos</h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="footer-widget">
                        <h2>Información Adicional</h2>
                        <ul>
                            <li><a href="about-us.html">Sobre Nosotros</a></li>
                            <li><a href="politicas.html">Políticas de Privacidad</a></li>
                            <li><a href="terminos-condiciones.html">Términos y Condiciones</a></li>
                        </ul>
                    </div>
                </div>

                
            </div>
            
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->       
    
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
