<?php
include('db.php');
include('tabla.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="body-search">
        <h1>Usuarios por busqueda</h1>
        <section class="table_search">
            <table>
        
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Deporte</th>
                        <th>Edad</th>
                        <th>Correo</th>
                    </tr>
                </thead>
           
                <tbody>
                    <?php
                    $Id=$_POST['Id'];
                    $sql="SELECT * FROM usuario WHERE Id='$Id'";
                    $result=mysqli_query($conexion,$sql);
                    while($mostrar = mysqli_fetch_array($result)){
                        ?>
                   <tr>
                       <td><?php echo $mostrar ['Id']?></td>
                       <td><?php echo $mostrar ['nombre']?></td>    
                       <td><?php echo $mostrar ['usuario']?></td>
                       <td><?php echo $mostrar ['password']?></td>
                       <td><?php echo $mostrar ['deporte']?></td>
                       <td><?php echo $mostrar ['edad']?></td>
                       <td><?php echo $mostrar ['correo']?></td>
                  </tr>
                   
                   
                   </tr>
                   <?php
                   }
                   ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>