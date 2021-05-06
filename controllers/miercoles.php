<?php
//MIERCOLES

require 'conexion.php';

$id = $_GET['id'];
    
$queryMiercoles = "SELECT * FROM miercoles WHERE user_id='$id';";
$resMiercoles = mysqli_query($conexion, $queryMiercoles);
$miercoles = mysqli_fetch_assoc($resMiercoles);

    $midia = $miercoles['dia'];
    $mimes = $miercoles['mes'];
    $micinco = $miercoles['cinco'];
    $micincoM = $miercoles['cincoM'];
    $miseis = $miercoles['seis'];
    $miseisM = $miercoles['seisM'];
    $misiete = $miercoles['siete'];
    $misieteM = $miercoles['sieteM'];
    $miocho = $miercoles['ocho'];
    $miochoM = $miercoles['ochoM'];
    $minueve = $miercoles['nueve'];
    $minueveM = $miercoles['nueveM'];
    $midiez = $miercoles['diez'];
    $midiezM = $miercoles['diezM'];
    $mionce = $miercoles['once'];
    $mionceM = $miercoles['onceM'];
    $midoce = $miercoles['doce'];
    $midoceM = $miercoles['doceM'];
    $mitrece = $miercoles['trece'];
    $mitreceM = $miercoles['treceM'];
    $micatorce = $miercoles['catorce'];
    $micatorceM = $miercoles['catorceM'];
    $miquince = $miercoles['quince'];
    $miquinceM = $miercoles['quinceM'];
    $midieciseis = $miercoles['dieciseis'];
    $midieciseisM = $miercoles['dieciseisM'];
    $midiecisiete = $miercoles['diecisiete'];
    $midiecisieteM = $miercoles['diecisieteM'];
    $midieciocho = $miercoles['dieciocho'];
    $midieciochoM = $miercoles['dieciochoM'];
    $midiecinueve = $miercoles['diecinueve'];
    $midiecinueveM = $miercoles['diecinueveM'];
    $miveinte = $miercoles['veinte'];
    $miveinteM = $miercoles['veinteM'];
    $miveintiuno = $miercoles['veintiuno'];
    $miveintiunoM = $miercoles['veintiunoM'];
    $miveintidos = $miercoles['veintidos'];
    $miveintidosM = $miercoles['veintidosM'];
    $miveintitres = $miercoles['veintitres'];
    $miveintitresM = $miercoles['veintitresM'];
    $micero = $miercoles['cero'];
    $miceroM = $miercoles['ceroM'];
    $miuna = $miercoles['una'];


?>
