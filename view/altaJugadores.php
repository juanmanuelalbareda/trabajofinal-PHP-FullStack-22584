<?php require_once('secciones/header.php');
?>
<div class="text-center">
    <div class="container">
        <div class="m-3">
            <img src="../images/pelota.jpg" alt="logo" width="72" height="72" class="mb-3">
            <h3 class="mb-3">Alta Usuario</h3>
        </div>

        <div class="m-4">
            <form action="../controller/addUsuario.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <input type="email" name="mail" id="mail" class="form-control" placeholder="Ingrese mail" required>
                    </div>
                    <div class="col-md-4">
                        <input type="password" name="clave" id="clave" class="form-control" placeholder="Ingrese contraseña" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="dni" id="dni" class="form-control" placeholder="Ingrese dni" required>
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



<?php require_once('secciones/footer.php');
?>