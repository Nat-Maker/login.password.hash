<?php
    $conn = new mysqli("localhost", "root", "","universidad"); 
    if($conn){
        echo "conexion exitosa";
    }else{
        echo "hubo un error"; 
    }


?>