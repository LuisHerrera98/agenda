<?php
//JUEVES

require 'conexion.php';

$id = $_GET['id'];
    
$queryJueves = "SELECT * FROM jueves WHERE user_id='$id';";
$resJueves = mysqli_query($conexion, $queryJueves);
$jueves = mysqli_fetch_assoc($resJueves);

    $jdia = $jueves['dia'];
    $jmes = $jueves['mes'];
    $jcinco = $jueves['cinco'];
    $jcincoM = $jueves['cincoM'];
    $jseis = $jueves['seis'];
    $jseisM = $jueves['seisM'];
    $jsiete = $jueves['siete'];
    $jsieteM = $jueves['sieteM'];
    $jocho = $jueves['ocho'];
    $jochoM = $jueves['ochoM'];
    $jnueve = $jueves['nueve'];
    $jnueveM = $jueves['nueveM'];
    $jdiez = $jueves['diez'];
    $jdiezM = $jueves['diezM'];
    $jonce = $jueves['once'];
    $jonceM = $jueves['onceM'];
    $jdoce = $jueves['doce'];
    $jdoceM = $jueves['doceM'];
    $jtrece = $jueves['trece'];
    $jtreceM = $jueves['treceM'];
    $jcatorce = $jueves['catorce'];
    $jcatorceM = $jueves['catorceM'];
    $jquince = $jueves['quince'];
    $jquinceM = $jueves['quinceM'];
    $jdieciseis = $jueves['dieciseis'];
    $jdieciseisM = $jueves['dieciseisM'];
    $jdiecisiete = $jueves['diecisiete'];
    $jdiecisieteM = $jueves['diecisieteM'];
    $jdieciocho = $jueves['dieciocho'];
    $jdieciochoM = $jueves['dieciochoM'];
    $jdiecinueve = $jueves['diecinueve'];
    $jdiecinueveM = $jueves['diecinueveM'];
    $jveinte = $jueves['veinte'];
    $jveinteM = $jueves['veinteM'];
    $jveintiuno = $jueves['veintiuno'];
    $jveintiunoM = $jueves['veintiunoM'];
    $jveintidos = $jueves['veintidos'];
    $jveintidosM = $jueves['veintidosM'];
    $jveintitres = $jueves['veintitres'];
    $jveintitresM = $jueves['veintitresM'];
    $jcero = $jueves['cero'];
    $jceroM = $jueves['ceroM'];
    $juna = $jueves['una'];


?>
