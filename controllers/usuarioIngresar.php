<?php
//CONECTO LA BASE DE DATOS
include ("conexion.php");

$email=$_POST['email'];
$password=$_POST['password'];


//VERIFICO QUE EL USUARIO EXISTE

$queryUsers = "SELECT id,password FROM users WHERE email='$email' and password='$password';";
$resUser = mysqli_query($conexion, $queryUsers);
$user = mysqli_fetch_assoc($resUser);
if($user['id']){

        header("Location:../views/panel.php?id=" . $user['id']);

}else{

//LOGIN ERROR
header("Location:../views/loginError.php");
    

}


?>