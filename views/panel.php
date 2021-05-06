<?php
    require '../controllers/lunes.php';
    require '../controllers/martes.php';
    require '../controllers/miercoles.php';
    require '../controllers/jueves.php';
    require '../controllers/viernes.php';
    require '../controllers/sabado.php';
    require '../controllers/domingo.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheets/panel.css">
    <link href="../img/icono.jpg" rel="shortcut icon" sizes="196x196">
    <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--Estilos de la agenda / inputs -->
    <link rel="stylesheet" href="../stylesheets/css.css">
</head>

<body>
<div class="panel aparecer">
    <div class="titulo">
        <h2>El uso sabio del tiempo</h2>
    </div>
    <img class="principal" src="../img/usotiempo.jpg" alt="">
    <div class="conteiner">
        <div class="mensaje">
            <p class="texto">“Estoy plenamente convencido de que si no nos fijamos metas en nuestra vida ni aprendemos a dominar las técnicas del vivir para lograr nuestras metas, llegaremos a la vejez y miraremos hacia atrás en la vida y nos daremos cuenta de que habremos logrado tan sólo una pequeña porción de nuestro pleno potencial. Si llegamos a dominar los principios que tienen que ver con el establecimiento de metas, entonces podremos surtir una gran diferencia en los resultados que logremos en esta vida”.</p>
            <p class="nombre" style="margin-top:8px">
            ÉLDER
            </p>
            <p class="nombre">
            M. RUSSELL BALLARD
            </p>
        </div>
        <div class="dias">
            <div class="botonLunes">
                <div class="dia-numero">
                    <p>
                        dia 1
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Lunes</p>
            </div>
            <div class="botonMartes">
            <div class="dia-numero">
                    <p>
                        dia 2
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Martes</p>
            </div>
            <div class="botonMiercoles">
            <div class="dia-numero">
                    <p>
                        dia 3
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Miércoles</p>
            </div>
            <div class="botonJueves">
            <div class="dia-numero">
                    <p>
                        dia 4
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Jueves</p>
            </div>
            <div class="botonViernes">
            <div class="dia-numero">
                    <p>
                        dia 5
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Viernes</p>
            </div>
            <div class="botonSabado">
            <div class="dia-numero">
                    <p>
                        dia 6
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Sábado</p>
            </div>
            <div class="botonDomingo">
            <div class="dia-numero">
                    <p>
                        dia 7
                    </p>
                </div>
                <i class="far fa-calendar-alt"></i><p>Domingo</p>
            </div>
        </div>
    </div>
    <div class="pasosPlan">
        <h3 class="pasos-titulo">Pasos para ser un crack</h3>
        <ol>
            <li>Orar para recibir inspiración y procurar obtenerla</li>
            <li>Fijar metas y hacer planes para la semana</li>
            <li>Planea que dias y horarios estudiaras las escrituras</li>
            <li>Planear actividades/reuniones de la iglesia de la semana</li>
            <li>Planea dar una referencia o acompañar a los misioneros</li>
            <li>Planea servir de alguna manera</li>
            <li>Hablar con algun converso o miembro menos activo</li>
            <li>Hermanar a algun miembro nuevo</li>
            <li>Planea ayudar al obispo de alguna manera</li>
            <li>Planea las actividades con regularidad: trabajo,clases,facultad,dormir y bañarse claro, no sean sucios</li>
            <li>Inventario contigo mismo</li>
        </ol>
    </div>
    <footer>
        <p>
            Si encuentran un error, o si tienen una consulta o idea para mejorar la agenda, ya sea diseño o nuevas funciones contactame por whatsapp haciendo click en el icono de abajo
        </p>
        <div style="margin-bottom:15px;">
            <div class="caja-whatsapp">
                <a href="https://api.whatsapp.com/send?phone=542216497631&text=te%20hablo%20de%20la%20agenda"><i class="fab fa-whatsapp"></i></a>
            </div>
            <br><br>
            
        </div>
        <h3>Desarrollado por Luis herrera <br> Alias: Perrito Malvado</h3>
        <br>
    </footer>

</div>

</style>
<div class="lunes desaparecer">
        <div class="botonDerecha derechaLunes">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaLunes">
            <i class="fas fa-angle-left"></i>
        </div>
    
<form action="../controllers/lunesGuardar.php" method="post">

    <div class="caja-ver-semana panelLunes">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>

        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $mes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $dia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $cinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $cincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $seis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $seisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $siete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $sieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $ocho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $ochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $nueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $nueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $diez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $diezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $once; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $onceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $doce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $doceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $trece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $treceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $catorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $catorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $quince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $quinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $dieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $dieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $diecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $diecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $dieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $dieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $diecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $diecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $veinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $veinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $veintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $veintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $veintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $veintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $veintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $veintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $cero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $ceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $una; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>

<div class="martes desaparecer">
<div class="botonDerecha derechaMartes">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaMartes">
            <i class="fas fa-angle-left"></i>
        </div>

<form action="../controllers/martesGuardar.php" method="post">
    <div class="caja-ver-semana panelMartes">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $mmes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $mdia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $mcinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $mcincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $mseis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $mseisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $msiete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $msieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $mocho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $mochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $mnueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $mnueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $mdiez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $mdiezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $monce; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $monceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $mdoce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $mdoceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $mtrece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $mtreceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $mcatorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $mcatorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $mquince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $mquinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $mdieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $mdieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $mdiecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $mdiecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $mdieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $mdieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $mdiecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $mdiecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $mveinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $mveinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $mveintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $mveintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $mveintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $mveintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $mveintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $mveintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $mcero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $mceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $muna; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>

<div class="miercoles desaparecer">
        <div class="botonDerecha derechaMiercoles">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaMiercoles">
            <i class="fas fa-angle-left"></i>
        </div>

<form action="../controllers/miercolesGuardar.php" method="post">
<div class="caja-ver-semana panelMiercoles">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $mimes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $midia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $micinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $micincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $miseis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $miseisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $misiete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $misieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $miocho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $miochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $minueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $minueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $midiez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $midiezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $mionce; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $mionceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $midoce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $midoceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $mitrece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $mitreceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $micatorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $micatorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $miquince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $miquinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $midieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $midieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $midiecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $midiecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $midieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $midieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $midiecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $midiecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $miveinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $miveinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $miveintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $miveintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $miveintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $miveintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $miveintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $miveintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $micero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $miceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $miuna; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>

<div class="jueves desaparecer">
        <div class="botonDerecha derechaJueves">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaJueves">
            <i class="fas fa-angle-left"></i>
        </div>
<form action="../controllers/juevesGuardar.php" method="post">
<div class="caja-ver-semana panelJueves">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $jmes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $jdia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $jcinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $jcincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $jseis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $jseisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $jsiete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $jsieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $jocho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $jochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $jnueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $jnueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $jdiez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $jdiezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $jonce; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $jonceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $jdoce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $jdoceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $jtrece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $jtreceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $jcatorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $jcatorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $jquince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $jquinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $jdieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $jdieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $jdiecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $jdiecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $jdieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $jdieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $jdiecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $jdiecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $jveinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $jveinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $jveintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $jveintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $jveintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $jveintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $jveintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $jveintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $jcero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $jceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $juna; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>

<div class="viernes desaparecer">
    <div class="botonDerecha derechaViernes">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaViernes">
            <i class="fas fa-angle-left"></i>
        </div>
<form action="../controllers/viernesGuardar.php" method="post">
<div class="caja-ver-semana panelViernes">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $vmes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $vdia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $vcinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $vcincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $vseis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $vseisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $vsiete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $vsieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $vocho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $vochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $vnueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $vnueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $vdiez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $vdiezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $vonce; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $vonceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $vdoce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $vdoceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $vtrece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $vtreceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $vcatorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $vcatorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $vquince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $vquinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $vdieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $vdieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $vdiecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $vdiecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $vdieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $vdieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $vdiecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $vdiecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $vveinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $vveinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $vveintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $vveintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $vveintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $vveintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $vveintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $vveintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $vcero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $vceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $vuna; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>

<div class="sabado desaparecer">
        <div class="botonDerecha derechaSabado">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaSabado">
            <i class="fas fa-angle-left"></i>
        </div>
<form action="../controllers/sabadoGuardar.php" method="post">
<div class="caja-ver-semana panelSabado">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $smes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $sdia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $scinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $scincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $sseis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $sseisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $ssiete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $ssieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $socho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $sochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $snueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $snueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $sdiez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $sdiezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $sonce; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $sonceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $sdoce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $sdoceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $strece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $streceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $scatorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $scatorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $squince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $squinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $sdieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $sdieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $sdiecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $sdiecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $sdieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $sdieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $sdiecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $sdiecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $sveinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $sveinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $sveintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $sveintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $sveintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $sveintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $sveintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $sveintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $scero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $sceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $suna; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>

<div class="domingo desaparecer">
        <div class="botonDerecha derechaDomingo">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="botonIzquierda izquierdaDomingo">
            <i class="fas fa-angle-left"></i>
        </div>
<form action="../controllers/domingoGuardar.php" method="post">
<div class="caja-ver-semana panelDomingo">
        <div class="boton-ver-semana">
            <p>ver semana</p>
        </div>
    </div>
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $dmes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $ddia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $dcinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $dcincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $dseis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $dseisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $dsiete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $dsieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $docho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $dochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $dnueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $dnueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $ddiez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $ddiezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $donce; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $donceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $ddoce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $ddoceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $dtrece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $dtreceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $dcatorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $dcatorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $dquince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $dquinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $ddieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $ddieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $ddiecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $ddiecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $ddieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $ddieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $ddiecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $ddiecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $dveinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $dveinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $dveintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $dveintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $dveintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $dveintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $dveintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $dveintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $dcero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $dceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $duna; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</div>
    <script src="../javascript/mostrar.js"></script>
</body>
</html>