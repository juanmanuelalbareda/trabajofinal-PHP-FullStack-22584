<?php


require_once('../view/secciones/header.php');

$id = $_GET["id"];
$mail = $_GET["mail"];
$clave = $_GET["clave"];
$dni = $_GET["dni"];

echo "<br><br>";
echo "<h1>Está seguro que desea borrar el Jugador id=$id,mail=$mail,dni=$dni ?</h1>";
?>

<div class="m-4">
    <form action="/trabajofinal/controller/resultDelUsuario.php" method="post">
        <input type="hidden" name="id" id="id" value=<?php echo $id ?> />
        <div class="row">
            <div class="col-md-4">
                <input type="hidden" name="mail" id="mail" value=<?php echo $mail ?> class="form-control" placeholder="Ingrese mail" required>
            </div>
            <div class="col-md-4">
                <input type="hidden" name="clave" id="clave" value=<?php echo $clave ?> class="form-control" placeholder="Ingrese contraseña" required>
            </div>
            <div class="col-md-4">
                <input type="hidden" name="dni" id="dni" value=<?php echo $dni ?> class="form-control" placeholder="Ingrese dni" required>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row">
            <input type="submit" value="Borrar" class="btn btn-primary">
        </div>
    </form>
</div>




<?php
require_once('../view/secciones/footer.php');
?>