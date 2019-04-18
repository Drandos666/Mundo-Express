<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar | ME</title>
    <LINK REL=StyleSheet HREF="css/skin_ingreso.css">
</head>
<body>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Ingresar a <strong>Mundo Express</strong><br></h2></div>
    <div class="inicio"><a href="Index.php">Volver a la Pagina Principal</a> </div>
    <form> 
        <label> Correo: </label><br />
            <input type="text" id="e" name="e" placeholder="Baloo@Ejemplo.com" required /><br />
        <label> Contraseña: </label><br />
            <input type="password" id="pass" name="pass" placeholder="Minimo 8 Caracteres" required minlength="8" /><br />        
        <br />
            <input type="submit" name="envio" value="Ingresar">
            <a href="formulario.html">¿No posee cuenta? Inscribase</a>
            <input type="reset" value="Borrar"> 
        </p>
    </form> 


</body>
</html>