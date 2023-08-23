<?php
$conexion=null;
$servidor="Localhost";
$bd="login";
$user="root";
$pass="";
try{
    $conexion=new PDO('mysql:host='.$servidor.';dbname='.$bd,$user,$pass);
}catch(PDOException $e){
    echo "error ";
    exit;
}
return $conexion;
?>