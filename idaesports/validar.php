<?php

    include('db.php');
    $USUARIO=$_POST['usuario'];
    $PASSWORD=$_POST['password'];

    $consulta= "SELECT* FROM usuario where usuario = '$USUARIO' and password = '$PASSWORD' ";
    $resultado= mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:../Paginap/home.php");
    }else{
        header("location:index.php?user=1");
    } 

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>