<!DOCTYPE html>
<head>
<title>LOGIN</title>
</head>
<style>
    body{font-family:Arial,Helvetica,sans-serif;}
    form{border: 3px solid #f1f1f1;padding: 16px;}
    </style>
<body>
    <form action="Login.php" method="POST">
<h3>Login de Usuario </h3>
<label for="txt1">Usuario:</label>
<input type="" name="t1" required>
<label for="txt1">Password:</label>
<input type="" name="t2" required>
<input type="submit" name="" value="REGISTRAR">
</form>
</body>
<?php
if($_POST){
    session_start();
    require('Conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query=$conexion->prepare("SELECT * FROM usuarios WHERE nombre=:u AND pass=:p");
$query -> bindParam(":u", $u);
$query -> bindParam(":p", $p);
$query->execute();
$usuario=$query->fetch(PDO::FETCH_ASSOC);
if($usuario){
    $_SESSION["usuario"]=$usuario["nombre"];
    header("location:trab.php");
}else{
    echo "usuario o password invalidos";
}
}
?>
</html>