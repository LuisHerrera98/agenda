<?php 

//EN ESTE ARCHIVO SE DAN DE ALTA LOS USUARIOS O SE CREAN USUARIOS

include ("conexion.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


//VERIFICO QUE EL USUARIO NO EXISTE

$queryUsers = "SELECT id FROM users WHERE email='$email';";
$resUser = mysqli_query($conexion, $queryUsers);
$user = mysqli_fetch_assoc($resUser);
if($user['id']){
    header("Location:../views/registroError.php");
}else{

//REGISTRO AL NUEVO USUARIO

    $query = "INSERT INTO users (name, email, password) values ('" . $name . "','" . $email . "','" . $password . "')";

    $res = mysqli_query($conexion, $query);
    
//RECUPERO EL ID
    
    $query2 = "SELECT id FROM users WHERE email='$email';";
        
    $res2 = mysqli_query($conexion, $query2);
    
    $row = mysqli_fetch_assoc($res2);
    
    $idUser = $row['id'];
    
//CREO DATOS NULOS EN LOS DIAS Y SOLO AGREGO EL USER ID DEL USUARIO REGISTRADO 

    //LUNES

    $queryLunes = "INSERT INTO lunes (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);
    
    //MARTES

    $queryLunes = "INSERT INTO martes (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //MIERCOLES

    $queryLunes = "INSERT INTO miercoles (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //JUEVES

    $queryLunes = "INSERT INTO jueves (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);
    
    //VIERNES

    $queryLunes = "INSERT INTO viernes (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //SABADO

    $queryLunes = "INSERT INTO sabado (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //DOMINGO

    $queryLunes = "INSERT INTO domingo (user_id) values ('" . $idUser . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);
    header("Location:../views/success.php");

}

?>