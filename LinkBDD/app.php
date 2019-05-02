<?php
$link='mysql:host=localhost;dbname=me';//variable con la direccion de la BDD para metodo PDO
$user='root';//usuario mysql
$password='root';//contraseña mysql
try {//traer de la BDD
    $mbd = new PDO($link,$user,$password);//variable donde se establece la conexcion a la BDD, tiene variable ya mensionadas
}  catch (PDOException $e) {//mensaje de error cuando no se conecte a la BDD por PDO
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
if ($_POST) {
    $nom=$_POST['nom'];
    $ape=$_POST['ape'];
    $fecha=$_POST['fecha'];
    $edad=$_POST['edad'];
    $e=$_POST['e'];
    $pass=$_POST['pass'];
    $tel=$_POST['tel'];
    $sexo=$_POST['sexo'];
    $dire=$_POST['dire'];
    $mens=$_POST['mens'];
    $agregar = 'INSERT INTO registro (Nombre,Apellido,Fecha,Edad,correo,senha,Telefono,Direccion,Mensaje,Sexo) VALUES (?,?,?,?,?,?,?,?,?,?)';
    $s_agregar = $mbd->prepare($agregar);
    $s_agregar->execute(array($nom,$ape,$fecha,$edad,$e,$pass,$tel,$dire,$mens,$sexo));
}

