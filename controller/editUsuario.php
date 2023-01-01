<?php
//    $user=$_POST["user"];
//    $pass=$_POST["pass"];

require_once('../view/secciones/header.php');

$id = $_GET["id"];
$mail = $_GET["mail"];
$clave = $_GET["clave"];
$dni = $_GET["dni"];

?>

<div class="text-center">
    <div class="container">
        <div class="m-3">
            <img src="/trabajofinal/images/pelota.jpg" alt="logo" width="72" height="72" class="mb-3">
            <h3 class="mb-3">Editar Usuario</h3>
        </div>

        <div class="m-4">
            <form action="/trabajofinal/controller/resultEditUsuario.php" method="post">
                <input type="hidden" name="id" id="id" value=<?php echo $id ?> />
                <div class="row">
                    <div class="col-md-4">
                        <input type="email" name="mail" id="mail" value=<?php echo $mail ?> class="form-control" placeholder="Ingrese mail" required>
                    </div>
                    <div class="col-md-4">
                        <input type="password" name="clave" id="clave" value=<?php echo $clave ?> class="form-control" placeholder="Ingrese contraseña" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="dni" id="dni" value=<?php echo $dni ?> class="form-control" placeholder="Ingrese dni" required>
                    </div>
                </div>

                <hr class="mb-4">
                <div class="row">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once('../database/connect.php');

mysqli_close($conn);

require_once('../view/secciones/footer.php');

?>