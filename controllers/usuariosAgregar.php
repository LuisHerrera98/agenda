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
    $dia="Lunes";
    $queryLunes = "INSERT INTO lunes (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);
    
    //MARTES
    $dia="Martes";
    $queryLunes = "INSERT INTO martes (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //MIERCOLES
    $dia="Miercoles";
    $queryLunes = "INSERT INTO miercoles (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //JUEVES
    $dia="Jueves";
    $queryLunes = "INSERT INTO jueves (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);
    
    //VIERNES
    $dia="Viernes";
    $queryLunes = "INSERT INTO viernes (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //SABADO
    $dia="Sabado";
    $queryLunes = "INSERT INTO sabado (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);

    //DOMINGO
    $dia="Domingo";
    $queryLunes = "INSERT INTO domingo (user_id,dia) values ('" . $idUser . "','" . $dia . "')";
    $resLunes = mysqli_query($conexion,$queryLunes);
    header("Location:../views/login.php");

}

?>