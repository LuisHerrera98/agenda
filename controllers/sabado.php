<?php
//SABADO

require 'conexion.php';

$id = $_GET['id'];
    
$querySabado = "SELECT * FROM sabado WHERE user_id='$id';";
$resSabado = mysqli_query($conexion, $querySabado);
$sabado = mysqli_fetch_assoc($resSabado);

    $sdia = $sabado['dia'];
    $smes = $sabado['mes'];
    $scinco = $sabado['cinco'];
    $scincoM = $sabado['cincoM'];
    $sseis = $sabado['seis'];
    $sseisM = $sabado['seisM'];
    $ssiete = $sabado['siete'];
    $ssieteM = $sabado['sieteM'];
    $socho = $sabado['ocho'];
    $sochoM = $sabado['ochoM'];
    $snueve = $sabado['nueve'];
    $snueveM = $sabado['nueveM'];
    $sdiez = $sabado['diez'];
    $sdiezM = $sabado['diezM'];
    $sonce = $sabado['once'];
    $sonceM = $sabado['onceM'];
    $sdoce = $sabado['doce'];
    $sdoceM = $sabado['doceM'];
    $strece = $sabado['trece'];
    $streceM = $sabado['treceM'];
    $scatorce = $sabado['catorce'];
    $scatorceM = $sabado['catorceM'];
    $squince = $sabado['quince'];
    $squinceM = $sabado['quinceM'];
    $sdieciseis = $sabado['dieciseis'];
    $sdieciseisM = $sabado['dieciseisM'];
    $sdiecisiete = $sabado['diecisiete'];
    $sdiecisieteM = $sabado['diecisieteM'];
    $sdieciocho = $sabado['dieciocho'];
    $sdieciochoM = $sabado['dieciochoM'];
    $sdiecinueve = $sabado['diecinueve'];
    $sdiecinueveM = $sabado['diecinueveM'];
    $sveinte = $sabado['veinte'];
    $sveinteM = $sabado['veinteM'];
    $sveintiuno = $sabado['veintiuno'];
    $sveintiunoM = $sabado['veintiunoM'];
    $sveintidos = $sabado['veintidos'];
    $sveintidosM = $sabado['veintidosM'];
    $sveintitres = $sabado['veintitres'];
    $sveintitresM = $sabado['veintitresM'];
    $scero = $sabado['cero'];
    $sceroM = $sabado['ceroM'];
    $suna = $sabado['una'];


?>
