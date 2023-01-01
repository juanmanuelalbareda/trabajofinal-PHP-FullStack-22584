<?php

require_once('../view/secciones/header.php');

$id = $_POST["id"];
$mail = $_POST["mail"];
$clave = $_POST["clave"];
$dni = $_POST["dni"];


require_once('../database/connect.php');
$sql1 =  "SELECT * FROM `usuarios` WHERE id<>$id and (mail='$mail' or dni='$dni')";
$result = $conn->query($sql1);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<br>";
        echo "<br>DNI o Mail existente, ver listado de jugadores <br>";
    } else {
        $sql = "UPDATE usuarios SET mail='$mail', clave='$clave', dni=$dni  WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "Registro actualizado correctamente";
        }
    }
} else {
    echo 'Error: ' . mysqli_error();
}

// close connection
mysqli_close($conn);

require_once('../view/secciones/footer.php');

?>
