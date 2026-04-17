<?php

function registrarAuditoria($conn, $accion, $modulo){

$usuario = $_SESSION['usuario'] ?? 'sistema';

mysqli_query($conn,"
INSERT INTO auditoria(usuario, accion, modulo)
VALUES('$usuario', '$accion', '$modulo')
");

}
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

$ip = $_SERVER['REMOTE_ADDR'];

mysqli_query($conn,"
INSERT INTO auditoria(usuario, accion, modulo, ip)
VALUES('$usuario','$accion','$modulo','$ip')
");
?>