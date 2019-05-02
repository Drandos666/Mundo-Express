<?php
session_start();
if( isset($_SESSION['admin']) ){
}else{
    header('Location:registro.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido <?php $_SESSION['admin'] ?> </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
    <LINK REL=StyleSheet HREF="css/skin_perfil.css">
</head>
<body>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Gracias por Ingresar a <strong>Mundo Express</strong>  <br></h2></div>
    <div class="inicio">
    <ul>
        <li> <a href="Index.php"><i class="fas fa-home"></i> Volver a la Pagina Principal</a> </li>
        <li> <a href="editarP.php"><i class="fas fa-user-edit"></i> Cambiar Datos de Usuario</a></li>
        <li>  <a href="fin_ing.php"><i class="fas fa-door-open"></i> Cerrar Sección</a></li>
    </ul>

    </div>

   
    
</body>
</html>







