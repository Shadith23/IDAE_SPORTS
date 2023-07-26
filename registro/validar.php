<?php

  include('db.php');

  $nombre=$_POST['nombre'];
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
  $deporte=$_POST['deporte'];
  $edad=$_POST['edad'];
  $correo=$_POST['correo'];

  $consulta= "INSERT INTO usuario (nombre, usuario, password, deporte, edad, correo) VALUES ('$nombre', '$usuario', '$password', '$deporte', '$edad', '$correo')";
  $resultado=mysqli_query($conexion, $consulta) or die ("error de registro");
  header ("location:../tabladmin/tabla.php");
 

  mysqli_close($conexion);
?>
