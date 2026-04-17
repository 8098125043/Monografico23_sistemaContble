<?php
session_start();
include("conexion.php");


$correo = $_POST['correo'];
$password = $_POST['password'];


$query = mysqli_query($conn, "
SELECT * FROM usuarios WHERE correo='$correo'
");

if(mysqli_num_rows($query) > 0){

    $user = mysqli_fetch_assoc($query);

   
    if(password_verify($password, $user['password'])){

        $_SESSION['usuario'] = $user['correo'];
        $_SESSION['rol'] = $user['rol'];

        header("Location: dashboard.php");
        exit();

    }else{
        header("Location: login.php?error=1");
        exit();
    }

}else{
    header("Location: login.php?error=1");
    exit();
}
?>