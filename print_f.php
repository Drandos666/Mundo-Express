<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario Respondido | ME</title>
    <LINK REL=StyleSheet HREF="css/skin_print_f.css">

</head>
<body>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Sus Datos Captados para la inscripcion <strong>Fueron:</strong><br></h2></div>
    <div class="print"> 
    <?php
        include_once 'LinkBDD/app.php';
        $nom=$_POST['nom'];
        $ape=$_POST['ape'];
        $fecha=$_POST['fecha'];
        $edad=$_POST['edad'];
        $e=$_POST['e'];
        $pass=$_POST['pass'];
        $tel=$_POST['tel'];
        $sexo=$_POST['sexo'];
        $mens=$_POST['mens'];
        $dire=$_POST['dire'];
        echo "Nombre: $nom";
        echo "<br/>";
        echo "Apellido: $ape";
        echo "<br/>";
        echo "Fecha de Nacimiento: $fecha";
        echo "<br/>";
        echo "Edad: $edad";
        echo "<br/>";
        echo "Correo: $e";
        echo "<br/>";
        echo "Contraseña: 0?2F45@D0A165";
        echo "<br/>";
        echo "Telefono: $tel";
        echo "<br/>";
        echo "Direccion: $dire";
        echo "<br/>";        
        echo "Mensaje: $mens";
        echo "<br/>";
        echo "Sexo: $sexo";
        echo "<br/>";
        echo "<br/>";
        ?>
        <p><input type="button" value="Imprimir el Formulario" onclick="window.print()"></p>          
        <p><a href="Index.php">Volver a la Pagina Principal</a></p>
    </div>


</body>
</html>

