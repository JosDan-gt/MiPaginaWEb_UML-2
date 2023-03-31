<?php

$servidor = "localhost"; //127.0.0.1
$baseDatos = "Empleados"; //nombre de la base de datos
$usuario = "root"; //usuario
$clave = ""; //password

//try catch

try {

	$conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $clave);
	echo "Conexion Exitosa";
} catch (Exception $ex) {

	//imprimo el mensaje si existe algun error
	echo $ex->getMessage();

}
