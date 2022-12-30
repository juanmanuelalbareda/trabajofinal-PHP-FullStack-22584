<?php
$conn = new mysqli("localhost","root","","trabajo_final");



if($conn->connect_errno)
{
    echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
    
}
 
 ?>
