<?php
//DOMINGO

require 'conexion.php';

$id = $_GET['id'];
    
$queryDomingo = "SELECT * FROM domingo WHERE user_id='$id';";
$resDomingo = mysqli_query($conexion, $queryDomingo);
$domingo = mysqli_fetch_assoc($resDomingo);

    $ddia = $domingo['dia'];
    $dmes = $domingo['mes'];
    $dcinco = $domingo['cinco'];
    $dcincoM = $domingo['cincoM'];
    $dseis = $domingo['seis'];
    $dseisM = $domingo['seisM'];
    $dsiete = $domingo['siete'];
    $dsieteM = $domingo['sieteM'];
    $docho = $domingo['ocho'];
    $dochoM = $domingo['ochoM'];
    $dnueve = $domingo['nueve'];
    $dnueveM = $domingo['nueveM'];
    $ddiez = $domingo['diez'];
    $ddiezM = $domingo['diezM'];
    $donce = $domingo['once'];
    $donceM = $domingo['onceM'];
    $ddoce = $domingo['doce'];
    $ddoceM = $domingo['doceM'];
    $dtrece = $domingo['trece'];
    $dtreceM = $domingo['treceM'];
    $dcatorce = $domingo['catorce'];
    $dcatorceM = $domingo['catorceM'];
    $dquince = $domingo['quince'];
    $dquinceM = $domingo['quinceM'];
    $ddieciseis = $domingo['dieciseis'];
    $ddieciseisM = $domingo['dieciseisM'];
    $ddiecisiete = $domingo['diecisiete'];
    $ddiecisieteM = $domingo['diecisieteM'];
    $ddieciocho = $domingo['dieciocho'];
    $ddieciochoM = $domingo['dieciochoM'];
    $ddiecinueve = $domingo['diecinueve'];
    $ddiecinueveM = $domingo['diecinueveM'];
    $dveinte = $domingo['veinte'];
    $dveinteM = $domingo['veinteM'];
    $dveintiuno = $domingo['veintiuno'];
    $dveintiunoM = $domingo['veintiunoM'];
    $dveintidos = $domingo['veintidos'];
    $dveintidosM = $domingo['veintidosM'];
    $dveintitres = $domingo['veintitres'];
    $dveintitresM = $domingo['veintitresM'];
    $dcero = $domingo['cero'];
    $dceroM = $domingo['ceroM'];
    $duna = $domingo['una'];


?>
