<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario Respondido | ME</title>
    <LINK REL=StyleSheet HREF="css/skin_print_f.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->

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
        if ($_POST) {
            $nom=$_POST['nom'];
            $ape=$_POST['ape'];
            $fecha=$_POST['fecha'];
            $edad=$_POST['edad'];
            $e=$_POST['e'];
            $pass=$_POST['pass'];
            $pass=password_hash($pass,PASSWORD_DEFAULT);
            $tel=$_POST['tel'];
            $sexo=$_POST['sexo'];
            $dire=$_POST['dire'];
            $mens=$_POST['mens'];
            $agregar = 'INSERT INTO registro (Nombre,Apellido,Fecha,Edad,correo,senha,Telefono,Direccion,Mensaje,Sexo) VALUES (?,?,?,?,?,?,?,?,?,?)';
            $s_agregar = $mbd->prepare($agregar);
            $s_agregar->execute(array($nom,$ape,$fecha,$edad,$e,$pass,$tel,$dire,$mens,$sexo));
        }
        ?>
        <p><input type="button" value="Imprimir el Formulario" onclick="window.print()"></p>          
        <p><a href="Index.php"><i class="fas fa-home"></i> Volver a la Pagina Principal</a></p>
        
    </div>


</body>
</html>

