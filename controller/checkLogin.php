<?php
require_once("../database/connect.php");
	
	
    $user=$_POST["user"];
    $pass=$_POST["pass"];

    $queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE mail='$user' AND clave='$pass'");
    $nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
        header("Location: ../view/inicio.html");
        exit;
			}
		
else
	{
        header("Location: ../view/loginError.html");
        exit;
	}
        
?>