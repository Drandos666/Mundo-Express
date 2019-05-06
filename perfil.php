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
    <title>Bienvenido | ME </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
    <LINK REL=StyleSheet HREF="css/skin_perfil.css">
</head>
<body>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Gracias por Ingresar <strong><?php echo $_SESSION['admin'] ?></strong>  <br></h2></div>
    <div class="inicio">
    <ul>
        <li> <a href="Index.php"><i class="fas fa-home"></i> Volver a la Pagina Principal</a> </li>
        <li> <a href="trocaperfil.php"><i class="fas fa-user-edit"></i> Cambiar Datos de Usuario</a></li>
        <li>  <a href="fin_ing.php"><i class="fas fa-door-open"></i> Cerrar Sección</a></li>
    </ul>
    </div>
    <div class='usuario'>
    <h3>Número de Envios </h3>
    <p>1</p>    
    </div>

    <div class='cuy'>
    <h3>Número de CuyTokens</h3>
    <p>
     <?php echo $_SESSION['token'];?>
    </p>
    </div>

    <div class='rastreo'>
    <h3>Rastreo del Envio</h3>
    <p><br><br><br><br><br><br><br>
         1.Recepción del Paquete<i class="fas fa-check-circle"></i><br>
        2.Envalaje de el Paquete <i class="fas fa-check-circle"></i><br>
        3.Transporte de el Paquete<i class="far fa-check-circle"></i><br>
        4.Llegada a Surcursal de Destino<i class="far fa-check-circle"></i><br>
        5.Revisión de el Estado del Paquete<i class="far fa-check-circle"></i><br>
        6.Avisar a Destinatario<i class="far fa-check-circle"></i><br>
        7.Retiro por Destinatario<i class="far fa-check-circle"></i><br>
    </p>
    </div>

</body>
</html>







