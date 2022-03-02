<?php
$usuarioValue=$_POST["username"];
$contraValue=$_POST["password"];

$dbLink=mysqli_connect("localhost","usuari","123456","goActivity") or exit(mysqli_connect_error());


$sql="SELECT * FROM tb_usuarios WHERE Usuario='$usuarioValue' AND Contrasenya='$contraValue';";
$result=mysqli_query($dbLink,$sql) or exit (mysqli_error($dbLink));

if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION["usuarioSESSION"]=$usuarioValue;
	$_SESSION["login"]=true;
	header("Location:index.html");
}else { ?>
	<h3><i>El usuario o la contraseña es incorrecta</i></h3>
	<a href=login.php>Volver a logear</a> <?php 
}

?>
