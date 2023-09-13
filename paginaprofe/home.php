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
      <a href="#">
                <div class="option">
                    <i class="far fa-file" title="Mensajes"></i>
                    <h4>Mensajes</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Multimedia"></i>
                    <h4>Videos y fotos</h4>
                </div>
            </a>

            
                <div class="option">
                    <i class="far fa-futbol" title="Deportistas"></i>
                    <a href="../tablaprofes/tabla.php"><h4>Deportistas</h4></a>
                </div>
            

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
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
        

        <!-- <?php
      $sql="SELECT * FROM admin WHERE usuario = 'Mauricio23' " ;
      $result = mysqli_query($conexion,$sql);
      $data = mysqli_fetch_assoc($result);
     ?> -->

<h1>Bienvenido, Jorge Vasques<!-- <?php echo $data['usuario'] ?> </h1> -->

      

    <script src="js/script.js"></script>
</body>
</html>