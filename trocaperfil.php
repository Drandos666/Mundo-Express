<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
    <LINK REL=StyleSheet HREF="css/skin_trocaperfil.css">
    <title>Editar Datos | ME</title>
</head>
<body>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Editar Datos del Usuario <strong><?php echo $_SESSION['admin'] ?></strong>  <br></h2></div>
    <div class="inicio"><a href="perfil.php"><i class="fas fa-user"></i> Volver a Perfil</a> </div>
    <div class="editar">
    <form method="GET" action="LinkBDD/edit.php"><!-- form con metodo GET Y enviado a edit.php, este formulario sera para Editar elementos-->
        <label> Nombre: </label> <br />
            <input type="text" id="nom" name="nom" size="20"  value="<?php echo $_SESSION['Nombre']?>"  /> <br/>
        <label> Apellido: </label> <br />
            <input type="text" id="ape" name="ape" size="20"  value="<?php echo $_SESSION['Apellido']?>" /> <br/>    
        <label> Fecha de Nacimiento:</label> <br /> 
            <input type="date" id="fecha" name="fecha" value="<?php echo $_SESSION['Fecha']?>"> <br /> 
        <label> Edad: </label> <br />
            <input type="number" id="edad" name="edad" size="11"  value="<?php echo $_SESSION['Edad']?>" /> <br/>
        <label>Teléfono: </label> <br /> 
            <input type="tel" id="tel" name="tel"   value="<?php echo $_SESSION['Telefono']?>"> <br />
        <label>Direccion de Vivienda: </label> <br />
            <textarea id="dire" name="dire" ></textarea>
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>" /> <br/><!-- input invisible, necesario para usar id y porder cambiar una fila de elementos -->
        <br>
        <input type="submit" name="envio" onclick="javascript:alert('Datos Cambiados Con Exito!!');" value="Editar"><!-- Boton para guardar -->
    </form>
  

</body>
</html>