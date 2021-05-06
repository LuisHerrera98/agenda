<?php
//LUNES

require 'conexion.php';

$id = $_GET['id'];
    
$queryMartes = "SELECT * FROM martes WHERE user_id='$id';";
$resMartes = mysqli_query($conexion, $queryMartes);
$martes = mysqli_fetch_assoc($resMartes);

    $mdia = $martes['dia'];
    $mmes = $martes['mes'];
    $mcinco = $martes['cinco'];
    $mcincoM = $martes['cincoM'];
    $mseis = $martes['seis'];
    $mseisM = $martes['seisM'];
    $msiete = $martes['siete'];
    $msieteM = $martes['sieteM'];
    $mocho = $martes['ocho'];
    $mochoM = $martes['ochoM'];
    $mnueve = $martes['nueve'];
    $mnueveM = $martes['nueveM'];
    $mdiez = $martes['diez'];
    $mdiezM = $martes['diezM'];
    $monce = $martes['once'];
    $monceM = $martes['onceM'];
    $mdoce = $martes['doce'];
    $mdoceM = $martes['doceM'];
    $mtrece = $martes['trece'];
    $mtreceM = $martes['treceM'];
    $mcatorce = $martes['catorce'];
    $mcatorceM = $martes['catorceM'];
    $mquince = $martes['quince'];
    $mquinceM = $martes['quinceM'];
    $mdieciseis = $martes['dieciseis'];
    $mdieciseisM = $martes['dieciseisM'];
    $mdiecisiete = $martes['diecisiete'];
    $mdiecisieteM = $martes['diecisieteM'];
    $mdieciocho = $martes['dieciocho'];
    $mdieciochoM = $martes['dieciochoM'];
    $mdiecinueve = $martes['diecinueve'];
    $mdiecinueveM = $martes['diecinueveM'];
    $mveinte = $martes['veinte'];
    $mveinteM = $martes['veinteM'];
    $mveintiuno = $martes['veintiuno'];
    $mveintiunoM = $martes['veintiunoM'];
    $mveintidos = $martes['veintidos'];
    $mveintidosM = $martes['veintidosM'];
    $mveintitres = $martes['veintitres'];
    $mveintitresM = $martes['veintitresM'];
    $mcero = $martes['cero'];
    $mceroM = $martes['ceroM'];
    $muna = $martes['una'];


?>
