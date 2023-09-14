<?php
include('db.php');
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
    
<?php
include('tabla.php');
?>
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
        session_start();
        $_SESSION['value'] = $_POST['Id'];
    if (isset($_SESSION['miVariable']) !== "") {
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
        
        
        <?php
    } else if (isset($_SESSION['miVariable']) == "") {
        $sql="SELECT * FROM usuario";
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
           <?php
    }
    ?>
</tbody>
    </table>
</body>
</html>