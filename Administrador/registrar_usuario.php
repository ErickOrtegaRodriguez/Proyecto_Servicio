<?php

include "../Includes/conexion.php";

echo $_POST["usuario"];

if(isset($_POST["usuario"]) && isset($_POST["contrasena"]) && isset($_POST["congreso"])){
	$conexion = conectar("postgres", "123456789");
	$query = "INSERT INTO organizador values ('".$_POST['usuario']."', '".$_POST['contrasena']."', '".$_POST['congreso']."')";
	if($result = pg_query($query)){
		echo '<script language="javascript">alert("Registro Exitoso!"); window.location.href="index.html"; </script>';	
	}
	else
		echo '<script language="javascript">alert("Error al conectar con la base de datos!"); window.location.href="index.html"; </script>';	
}
else
	echo '<script language="javascript">alert("Faltó de llenar algun campo!"); window.location.href="index.html"; </script>';	
?>