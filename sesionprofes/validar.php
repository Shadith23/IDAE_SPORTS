<?php

    include('db.php');
    $USUARIO=$_POST['usuario'];
    $PASSWORD=$_POST['password'];

    $consulta= "SELECT* FROM profes where usuario = '$USUARIO' and password = '$PASSWORD' ";
    $resultado= mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:../tablaprofes/tabla.php");
    }else{
        header("location:index.php?user=1");
    } 

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>