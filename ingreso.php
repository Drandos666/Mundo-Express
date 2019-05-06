<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar | ME</title>
    <LINK REL=StyleSheet HREF="css/skin_ingreso.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
</head>
<body>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Ingresar a <strong>Mundo Express</strong><br></h2></div>
    <div class="inicio"><a href="Index.php"><i class="fas fa-home"></i> Volver a la Pagina Principal</a> </div>
    <form method="POST"> 
        <label> Correo: </label><br />
            <input type="text" id="e" name="e" placeholder="Baloo@Ejemplo.com" required /><br />
        <label> Contraseña: </label><br />
            <input type="password" id="pass" name="pass" placeholder="Minimo 8 Caracteres" required minlength="8" /><br />        
        <br/>
            <input type="submit" name="envio" value="Ingresar">
            <a href="formulario.php"><i class="fas fa-address-book"></i> ¿No posee cuenta? Inscribase</a>
            <input type="reset" value=" Borrar"> 
        </p>
    </form> 
    <?php
    include_once 'LinkBDD/app.php';
    session_start();
    if ($_POST) {
        
    $e=$_POST['e'];
    $pass=$_POST['pass'];  

    $verificar='SELECT * FROM registro WHERE correo = ?';
    $s_verificar = $mbd->prepare($verificar);
    $s_verificar->execute(array($e));
    $result_ve=$s_verificar->fetch();
    if(!$result_ve){
        //matar la operación
        echo '<h3>¡Usuario No Registrado!</h3>';      
        die();
    }

    if( password_verify( $pass , $result_ve['senha']) ){
        $_SESSION['admin'] = $result_ve['Nombre'].' '.$result_ve['Apellido'] ;
        $_SESSION['token'] = $result_ve['kuy'];
        $_SESSION['Nombre'] = $result_ve['Nombre'];
        $_SESSION['Apellido'] = $result_ve['Apellido'];
        $_SESSION['id'] = $result_ve['id'];
        $_SESSION['Edad'] = $result_ve['Edad'];
        $_SESSION['Fecha'] = $result_ve['Fecha'];
        $_SESSION['Telefono'] = $result_ve['Telefono'];
        $_SESSION['Direccion'] = $result_ve['Direccion'];
        header('Location: perfil.php');
        
    }else{
        echo '<h3>¡Contraseña Erronea!';
        die();
    }
    }

    ?>
</body>
</html>