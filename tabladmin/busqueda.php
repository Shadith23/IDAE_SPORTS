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
        $sessionValue = $_POST['Id'] ? $_SESSION['value'] : '';
        if ($_SESSION['value'] !== "") {
            $Id=$_POST['Id'];
            $sql="SELECT * FROM usuario WHERE Id='$Id'";
            $result=mysqli_query($conexion,$sql);
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                <h1><?php echo $_SESSION['value']?></h1>
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
    } else if ($_SESSION['value'] == "") {
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
    <h1><?php echo $_SESSION['value']?></h1>
    <script>
var sessionValue = "<?php echo $sessionValue; ?>";
console.log(sessionValue);
</script>
</tbody>
    </table>
</body>
</html>