<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Waterpolo</title>
    <link rel="icon" href="../images/pelota.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css1.css">
</head>


<body class="text-center">
    <input name="q" autofocus />
    <div class="grisoscuro">
        <div class="container">
            <nav class="d-flex justify-content-between navbar navbar-expand-md navbar-light grisoscuro  fixed-top">
                <div class="col-md-6">
                    <a class="navbar-brand" href="https://www.waterpolo.com.ar/trabajofinal/?redirect=0">
                        <img src="../images/waterlogo.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill">
                    </a>
                    <a class="navbar-brand text-white" href="https://www.waterpolo.com.ar/trabajofinal/?redirect=0">Waterpolo
                        Argentino</a>

                </div>
            </nav>
        </div>
    </div>
    <br> <br> <br>
    <ul class="nav nav-tabs">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Jugadores</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="listadoJugadores.php">Listado de Jugadores</a></li>
                <li><a class="dropdown-item" href="#">Link 2</a></li>
                <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Clubes</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link 1</a></li>
                <li><a class="dropdown-item" href="#">Link 2</a></li>
                <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
        </li>
    </ul>
    
    <div class="container text-center"> 
    <table class="table">
        <th colspan="2">Bienvenido</th>
        <th><a href="inicio.html">Regresar</a></th>
        <tr>
            <th colspan="4">
                <h1>Listado de Jugadores</h1>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>DNI</th>

        </tr>

        <?php

        require_once('../database/connect.php');

        $sql = "select * from usuarios";
        $resultado = mysqli_query($conn, $sql);

        while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>

            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['mail'] ?></td>
                <td><?php echo $mostrar['clave'] ?></td>
                <td><?php echo $mostrar['dni'] ?></td>
            </tr>

        <?php
        }
        ?>

    </table>

    </div>

  
    <div class="azulito fixed-bottom">
        <nav class="justify-content-center navbar navbar-expand-md navbar-light azulito">
            <div class="navbar" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="https://api.whatsapp.com/send?phone=5491158458109">Contáctenos por Whatsapp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="https://laligawp.com.ar/">La liga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="https://cadda.org.ar/">CADDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="#">Términos y<br>condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="#">Privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" href="#">Jugadores</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="../js/trabajoFinal.js"></script>


</body>

</html>