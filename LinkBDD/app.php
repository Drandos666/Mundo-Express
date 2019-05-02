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


