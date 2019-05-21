<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario De Inscripcion | ME</title>
    <SCRIPT SRC="js/app.js"></SCRIPT>
    <LINK REL=StyleSheet HREF="css/skin_formulario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!-- importa iconos utilizado para botones -->
</head>
<body>       
    <?php include_once 'LinkBDD/app.php';?>
    <img src="img/logo.jpg" >
    <div class= "portada"><h2><br>Formulario de Inscripcion para <strong>Mundo Express</strong><br></h2></div>
    <a href="Index.php"><i class="fas fa-home"></i> Volver a la Pagina Principal</a>
    <form method="POST" action="print_f.php">
        <label> Nombre: <div class="punto">(*)</div></label> <br />
            <input type="text" id="nom" name="nom" size="40" placeholder="Primer Nombre" required /> <br />
        <label> Apellido: <div class="punto">(*)</div></label> <br />
            <input type="text" id="ape" name="ape" size="40" placeholder="Primer Apellido" required /> <br />    
        <label> Fecha de Nacimiento: <div class="punto">(*)</div></label> <br /> 
             <input type="date" id="fecha" name="fecha" required size="20"> <br />  
        <label> Edad: <div class="punto">(*)</div></label> <br />
            <input type="number" id="edad" name="edad" size="3" placeholder="Mínimo 17 Años" required min="17" /> <br />
        <label> Correo: <div class="punto">(*)</div></label><br />
            <input type="text" id="e" name="e" placeholder="Baloo@Ejemplo.com" required /><br />
        <label> Contraseña (Sera Encriptada)<div class="punto">(*)</div></label><br />
            <input type="password" id="pass" name="pass" placeholder="Mínimo 8 Caracteres" required minlength="8" /><br /> 
        <label>Teléfono: <div class="punto">(*)</div></label> <br /> 
            <input type="tel" id="tel" name="tel" placeholder="0000-Ejemplo"  required size="40"> <br />
        <label>Direccion de Vivienda: <div class="punto">(*)</div></label> <br />
            <textarea id="dire" name="dire" placeholder="Escriba su Direccion..."></textarea>
        <label>Mensaje: </label> <br />
            <textarea id="mens" name="mens" placeholder="Escriba su Mensaje..."></textarea>           
        <label>Sexo: </label>  <br />
            <select  id="sexo" name="sexo" >
                <option selected>...</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select><br />
        </div><br />            
        <div class="alerta">
        <p> Campos con (*) son Obligatorios </p>
        </div> <br />
            <input type="submit" name="envio" onclick="javascript:alert('Datos captados con exito!!');" value="Enviar">

            <input type="reset" value="Borrar"> 
        </p>
    </form>          
</body>
</html>