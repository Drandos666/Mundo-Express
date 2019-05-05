<?php
session_start();
$id=$_GET['id'];//id por GET
$Nombre=$_GET['nom'];//nombre por GET
$Apellido=$_GET['ape'];//apellido por GET
$Fecha=$_GET['fecha'];
$Edad=$_GET['edad'];//ci por GET
$Telefono=$_GET['tel'];
$Direccion=$_GET['dire'];
$id=$_GET['id'];
include_once 'app.php';//importa a el archivo app.php
$editar='UPDATE registro SET Nombre=?,Apellido=?,Fecha=?,Edad=?,Telefono=?,Direccion=? WHERE id=?';//variable con sentencia editar de la tabla cuado tiene un id espesifico
$sditar=$mbd->prepare($editar);//variable donde se prepara la variable anterior con la BDD
$sditar->execute(array($Nombre,$Apellido,$Fecha,$Edad,$Telefono,$Direccion,$id));//ejecutar la variable en un array los cuales son los componentes necesarios para editar los elementos de un id espesifico
header('location:../fin_troca.php');//manda directamente a la pagina perfil, asi no se tiene que recargar la pagina
//no se cierra en este caso el php para evitar inyexiones


$_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión.
session_destroy();