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

    <link rel="stylesheet" href="estilos.css">

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
                    <h4>Inicio</h4>
                </div>
            </a>

            
                <div class="option">
                    <i class="far fa-futbol" title="Deportistas"></i>
                    <a href="../tabladmin/tabla.php"><h4>Deportistas registrados</h4></a>
                </div>
            

            <a href="#">
                <div class="option">
                    <i class="far fa-user" title="Nosotros"></i>
                    <a href="../registro/index.html"><h4>Registrar</h4></a>
                </div>
            </a>

        </div>

    </div>

    <main>
        

        <?php
      $sql="SELECT * FROM admin WHERE usuario = 'MauricioCR' " ;
        $result = mysqli_query($conexion,$sql);
        $data = mysqli_fetch_assoc($result);
       ?>

<h1>Bienvenido, <?php echo $data['usuario'] ?> </h1>

      

    <script src="js/script.js"></script>
</body>
</html>