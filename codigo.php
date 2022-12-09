<?php

$host='localhost';
$bd='Registro';
$user='postgres';
$pass='gabriela2510';

$nom=$_POST['nom'];
$ape=$_POST['ape'];
$cor=$_POST['cor'];
$cont=$_POST['cont'];
$estado=false;
$mensaje='';


$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSERT INTO registro(nombre,apellido,email,contraseña)
    VALUES('$nom', '$ape', '$cor', '$cont')");

$consulta=pg_query($conexion,$query);

if(!$consulta){
    $mensaje="Ocurrio un error en la consulta";
    $estado=false;

} else{
    $mensaje="Proceso exitoso";
    $estado=true;
}

$salidaJSON=array('estado' => $estado, 'mensaje' => $mensaje);
print json_encode($salidaJSON);


?>