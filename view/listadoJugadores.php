<?php require_once('secciones/header.php');
?>

<div class="container text-center">
    <table class="table">
        <th colspan="2">Bienvenido</th>
        <th><a href="/trabajofinal/view/inicio.php">Regresar</a></th>
        <tr>
            <th colspan="5">
                <h1>Listado de Jugadores</h1>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>DNI</th>
            <th>Operaciones</th>

        </tr>

        <?php

        require_once('../database/connect.php');

        $sql = "select * from usuarios";
        $resultado = mysqli_query($conn, $sql);

        while ($mostrar = mysqli_fetch_array($resultado)) {
            $id = $mostrar['id'];
            $mail = $mostrar['mail'];
            $clave = $mostrar['clave'];
            $dni = $mostrar['dni'];


        ?>
            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['mail'] ?></td>
                <td><?php echo $mostrar['clave'] ?></td>
                <td><?php echo $mostrar['dni'] ?></td>
                <td><?php echo "<a href='/trabajofinal/controller/editUsuario.php?id=$id&mail=$mail&clave=$clave&dni=$dni'>" ?>
                    <i class='bi bi-pencil-fill mx-2'></i></a>
                    <?php echo "<a href='/trabajofinal/controller/delUsuario.php?id=$id&mail=$mail&clave=$clave&dni=$dni'>" ?>
                    <i class='bi bi-trash3-fill mx-2'></i></a>
                </td>
            </tr>

        <?php
        }
        ?>

    </table>

</div>

<?php require_once('secciones/footer.php');
?>