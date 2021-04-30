<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link href="../img/icono.jpg" rel="shortcut icon" sizes="196x196">
    <link rel="stylesheet" href="../stylesheets/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo-login">Agenda Misionero <br> Retornado</h1>
        <h1 class="titulo-login" style="margin-bottom:7px!important;color:black;margin-top:0px!important;">Ingresar</h1>

        <form action="../controllers/usuarioIngresar.php" method="POST">
            <div style="width: 100%; display: flex;">
                <input  name="email" placeholder="Número de móvil o correo electrónico"><br>
            </div>
            <div style="width: 100%; display: flex;">
                <input type="password" name="password" placeholder="Contraseña" class="contra"><br>
            </div>
            <div class="ver">
                <h3>ver contraseñas <i class="far fa-eye"></i></h3>          
            </div>
            <div class="ver errorRegistro">
                <h3>-Credenciales invalidas-</h3>          
            </div>
            <div style="width: 100%; margin-top: 8px;">
                <button type="submit">Entrar</button>
            </div>
            
            
            <div class="o">
                <hr>
                <p>o</p>
                <hr>
            </div>
            <div class="crear-cuenta">
                <a href="registro.php">Crear cuenta</a>
            </div>
            <div style="width: 100%;display: flex;justify-content: center;align-items: center;">
                <a class="link-olvidar" href="https://api.whatsapp.com/send?phone=542216497631&text=hola%20olvide%20mi%20contrase%C3%B1a%20de%20mi%20agenda%2C%20aiuuda%20plis">¿Has olvidado la contraseña?</a>
            </div>
        </form>
    </div>
    <script src="../javascript/validaciones.js"></script>
</body>
</html>