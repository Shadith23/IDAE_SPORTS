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
        <h1 class="bienvenido">Bienvenido Admin <!-- <?php echo $data['usuario'] ?> </h1> -->
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fab fa-instagram"></i>
            <h4>IDAE SPORTS</h4>
        </div>

        <div class="options__menu">	

        <a href="#" class="selected">
            
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
                    <a href="../registro/index.html"><h4>Registrar Deportistas</h4></a>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-user" title="Nosotros"></i>
                    <a href="../registroentre/index.html"><h4>Registrar Entrenadores</h4></a>
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
    <section class="search-container">
        <h1>Usuarios registrados</h1>
        <form action="busqueda.php" method="post">
            <input type="text" name="Id" required="" >
            <input id="submit" type="submit" name="" required="">
        </form>
    </section>
<h1 class="title">Usuarios totales</h1>
<div class="tabladatos tabla-origin" id="table">
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
        <th>VERIFICACION  </th> <!-- NUEVO-->
        <th>ACCIONES</th> <!-- NUEVO-->
        
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
        <td>
              <!-- editar-->
              <a href="editar.php?id=<?php echo $mostrar['Id'] ?>">Editar</a>

              <!-- eliminar-->
              <form action="eliminar.php" method="post">
                <input type="text" class="aaa" value="<?php echo $mostrar['Id']?>" name="Id" readonly>
                <td><input class="accion" type="submit" value="Eliminar"></td>
              </form>

            </td>
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