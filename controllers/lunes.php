<?php
//LUNES

require 'conexion.php';

$id = $_GET['id'];
    
$queryLunes = "SELECT * FROM lunes WHERE user_id='$id';";
$resLunes = mysqli_query($conexion, $queryLunes);
$lunes = mysqli_fetch_assoc($resLunes);

    $dia = $lunes['dia'];
    $mes = $lunes['mes'];
    $cinco = $lunes['cinco'];
    $cincoM = $lunes['cincoM'];
    $seis = $lunes['seis'];
    $seisM = $lunes['seisM'];
    $siete = $lunes['siete'];
    $sieteM = $lunes['sieteM'];
    $ocho = $lunes['ocho'];
    $ochoM = $lunes['ochoM'];
    $nueve = $lunes['nueve'];
    $nueveM = $lunes['nueveM'];
    $diez = $lunes['diez'];
    $diezM = $lunes['diezM'];
    $once = $lunes['once'];
    $onceM = $lunes['onceM'];
    $doce = $lunes['doce'];
    $doceM = $lunes['doceM'];
    $trece = $lunes['trece'];
    $treceM = $lunes['treceM'];
    $catorce = $lunes['catorce'];
    $catorceM = $lunes['catorceM'];
    $quince = $lunes['quince'];
    $quinceM = $lunes['quinceM'];
    $dieciseis = $lunes['dieciseis'];
    $dieciseisM = $lunes['dieciseisM'];
    $diecisiete = $lunes['diecisiete'];
    $diecisieteM = $lunes['diecisieteM'];
    $dieciocho = $lunes['dieciocho'];
    $dieciochoM = $lunes['dieciochoM'];
    $diecinueve = $lunes['diecinueve'];
    $diecinueveM = $lunes['diecinueveM'];
    $veinte = $lunes['veinte'];
    $veinteM = $lunes['veinteM'];
    $veintiuno = $lunes['veintiuno'];
    $veintiunoM = $lunes['veintiunoM'];
    $veintidos = $lunes['veintidos'];
    $veintidosM = $lunes['veintidosM'];
    $veintitres = $lunes['veintitres'];
    $veintitresM = $lunes['veintitresM'];
    $cero = $lunes['cero'];
    $ceroM = $lunes['ceroM'];
    $una = $lunes['una'];


?>
