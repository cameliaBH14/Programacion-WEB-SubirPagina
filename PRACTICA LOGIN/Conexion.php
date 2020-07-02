<?php
$servername="localhost";
$username="root";
$password="";
$dbname="PracticaLogin";

//aqui se realiza la conexion
$conn = new mysqli($servername, $username, $password, $dbname);


//se debe de Verificar la conexion
if($conn->connect_error)
{
	die("La conexion fall&oacute: ".$conn->connect_error);
}
else{
	echo "La conexi&oacuten se realiz&oacute satisfactoriamente";
}

//cierre de conexion
//$conn->close();
?>