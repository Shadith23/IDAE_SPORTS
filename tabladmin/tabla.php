<?php
  include('db.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDAE SPORTS</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fab fa-instagram"></i>
            <h4>IDAE SPORTS</h4>
        </div>

        <div class="options__menu">	

        <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <a href="../paginadmin/home.php"><h4>Inicio</h4></a>
                </div>
            </a>

            
                <div class="option">
                    <i class="far fa-futbol" title="Deportistas"></i>
                    <a href="#"><h4>Deportistas registrados</h4></a>
                </div>
            
                <div class="option">
                    <i class="far fa-futbol" title="Deportistas"></i>
                    <a href="../tabladmin2/tabla.php"><h4>Entrenadores registrados</h4></a>
                </div>

            <a href="#">
                <div class="option">
                    <i class="far fa-user" title="Nosotros"></i>
                    <a href="../registro/index.html"><h4>Registrar</h4></a>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <a href="../index.html"><h4>Cerrar Sesión</h4></a>
                </div>
            </a>

        </div>

    </div>


    
    <main>
    <h1>Usuarios registrados</h1>

    <form action="busqueda.php" method="post">
                <input type="text" name="Id" required="" >
                <input type="submit" name="" required="">

<div class="tabladatos">
  <table class="tabla">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>USUARIO</th>
        <th>PASSWORD</th>
        <th>DEPORTE</th>
        <th>EDAD</th>
        <th>CORREO</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="SELECT * FROM usuario";
        $result = mysqli_query($conexion,$sql);
        while($mostrar = mysqli_fetch_array($result)){

       ?>

      <tr>
        <td><?php echo $mostrar['Id'] ?> </td>  
        <td><?php echo $mostrar['nombre'] ?> </td>
        <td><?php echo $mostrar['usuario'] ?> </td>
        <td><?php echo $mostrar['password'] ?> </td>
        <td><?php echo $mostrar['deporte'] ?> </td>
        <td><?php echo $mostrar['edad'] ?> </td>
        <td><?php echo $mostrar['correo'] ?> </td>
        
      </tr>

      <?php
        }
       ?>

    </tbody>
  </table>
</div>
    <script src="js/script.js"></script>
</body>
</html>