<?php
//VIERNES

require 'conexion.php';

$id = $_GET['id'];
    
$queryViernes = "SELECT * FROM viernes WHERE user_id='$id';";
$resViernes = mysqli_query($conexion, $queryViernes);
$viernes = mysqli_fetch_assoc($resViernes);

    $vdia = $viernes['dia'];
    $vmes = $viernes['mes'];
    $vcinco = $viernes['cinco'];
    $vcincoM = $viernes['cincoM'];
    $vseis = $viernes['seis'];
    $vseisM = $viernes['seisM'];
    $vsiete = $viernes['siete'];
    $vsieteM = $viernes['sieteM'];
    $vocho = $viernes['ocho'];
    $vochoM = $viernes['ochoM'];
    $vnueve = $viernes['nueve'];
    $vnueveM = $viernes['nueveM'];
    $vdiez = $viernes['diez'];
    $vdiezM = $viernes['diezM'];
    $vonce = $viernes['once'];
    $vonceM = $viernes['onceM'];
    $vdoce = $viernes['doce'];
    $vdoceM = $viernes['doceM'];
    $vtrece = $viernes['trece'];
    $vtreceM = $viernes['treceM'];
    $vcatorce = $viernes['catorce'];
    $vcatorceM = $viernes['catorceM'];
    $vquince = $viernes['quince'];
    $vquinceM = $viernes['quinceM'];
    $vdieciseis = $viernes['dieciseis'];
    $vdieciseisM = $viernes['dieciseisM'];
    $vdiecisiete = $viernes['diecisiete'];
    $vdiecisieteM = $viernes['diecisieteM'];
    $vdieciocho = $viernes['dieciocho'];
    $vdieciochoM = $viernes['dieciochoM'];
    $vdiecinueve = $viernes['diecinueve'];
    $vdiecinueveM = $viernes['diecinueveM'];
    $vveinte = $viernes['veinte'];
    $vveinteM = $viernes['veinteM'];
    $vveintiuno = $viernes['veintiuno'];
    $vveintiunoM = $viernes['veintiunoM'];
    $vveintidos = $viernes['veintidos'];
    $vveintidosM = $viernes['veintidosM'];
    $vveintitres = $viernes['veintitres'];
    $vveintitresM = $viernes['veintitresM'];
    $vcero = $viernes['cero'];
    $vceroM = $viernes['ceroM'];
    $vuna = $viernes['una'];


?>
