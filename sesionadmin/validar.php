<?php

    include('db.php');
    $USUARIO=$_POST['usuario'];
    $PASSWORD=$_POST['password'];

    $consulta= "SELECT* FROM admin where usuario = '$USUARIO' and password = '$PASSWORD' ";
    $resultado= mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:../tabladmin/tabla.php");
    }else{
        header("location:index.php?user=2");
    } 

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>