<?php
$usuarioValue=$_POST["username"];
$contraValue=$_POST["password"];

$dbLink=mysqli_connect("localhost","root","root","proyectoBarca") or exit(mysqli_connect_error());


$sql="SELECT * FROM tb_usuarios WHERE Usuario='$usuarioValue' AND Contrasenya='$contraValue';";
$result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));
$reg = mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION["usuarioSESSION"]=$usuarioValue;
	$_SESSION["nombreSESSION"]=$reg["Nombre"];
	$_SESSION["apellidoSESSION"]=$reg["Apellido"];
	$_SESSION["login"]=true;
	header("Location:indexLogin.html");
}else { ?>
	<h3><i>El usuario o la contraseña es incorrecta</i></h3>
	<a href=login.html>Volver a logear</a> <?php 
}

?>
