<?php

require_once('../view/secciones/header.php');

$id = $_POST["id"];
$mail = $_POST["mail"];
$clave = $_POST["clave"];
$dni = $_POST["dni"];


require_once('../database/connect.php');
$sql1 =  "DELETE FROM usuarios WHERE id=$id";
$result = $conn->query($sql1);

echo "<h1>Jugador Borrado</h1>";



// close connection
mysqli_close($conn);

require_once('../view/secciones/footer.php');
?>