<?php
// se definen las variables
$Nombre = $Usuario = $Contraseña =" ";

//cadena vacia

if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$Nombre = test_input(strtoupper($_POST["nombre"]));
	$Usuario = test_input(strtoupper($_POST["usuario"]));
	$Contraseña = test_input(strtoupper($_POST["contraseña"]));
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}
?>