<?php
session_start();
if(isset($_SESSION["usuario"])){
$user = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="infoSup" id="infoSup">
        <div class="ubicacion" id="ubicacion">Yuriria</div>
        <div class="caja" id="caja">Caja 4</div>
        <?php 
        echo
        "
        <div class='fecha' id='fecha'>".date('Y-m-d H:i:s')."</div>
        <div class='usuario' id='usuario'>$user</div>
        "
        ?>
        <div class="logo" id="logo">
            <img class="logoImg" src="imagenes/Oxxo_Logo.svg.png" alt="">
        </div>
    </div>

    <h3 id="titulo">Tiempo Aire</h3>

    <!-------------------------------------------------------------------------->

    <form method="get" action="tiempoAire.php">
        <div class="s1" id="s1">

            <div id="telcel">
                <a href="tiempoAire.php?com='TELCEL'" target="_self">
                    <img id="imgTelcel" src="imagenes/telcel.png" alt="">
                    TELCEL
                </a>
            </div>

            <div id="unefon">
                <a href="tiempoAire.php?com='UNEFON'" target="_self">
                    <img id="imgUnefon" src="imagenes/unefon.png" alt="">
                    UNEFON
                </a>
            </div>

            <div id="at&t">
                <a href="tiempoAire.php?com='ATyT'" target="_self">
                    <img id="imgAtyt" src="imagenes/at&t.png" alt="">
                    AT&T
                </a>
            </div>

            <div id="movistar">
                <a href="tiempoAire.php?com='MOVISTAR'" target="_self">
                    <img id="imgMovistar" src="imagenes/movistar.png" alt="">
                    MOVISTAR Nvo
                </a>
            </div>

            <div id="virgin">
                <a href="tiempoAire.php?com='VIRGIN'" target="_self">
                    <img id="imgVirgin" src="imagenes/virgin-mobile.png" alt="">
                    VIRGIN MEX
                </a>
            </div>
        </div>


        <!-------------------------------------------------------------------------->
        <div class="s2" id="s2">
            <div id="telcelamigo">
                <a href="tiempoAire.php?com='TELCEL AMIGO'" target="_self">
                    <img id="imgTelcelamigo" src="imagenes/telcel.png" alt="">
                    TELCEL AMIGO
                </a>
            </div>

            <div id="oxxocel">
                <a href="tiempoAire.php?com='OXXO CEL'" target="_self">
                    <img id="imgOxxocel" src="imagenes/oxxocel.png" alt="">
                    OXXO CEL
                </a>
            </div>

            <div id="paqueteTelcel">
                <a href="tiempoAire.php?com='PAQUETE TELCEL'" target="_self">
                    <img id="imgTelcel" src="imagenes/telcel.png" alt="">
                    PAQUETES TELCEL
                </a>
            </div>

            <div id="weex">
                <a href="tiempoAire.php?com='WEEX'" target="_self">
                    <img id="imgWeex" src="imagenes/weex.png" alt="">
                    WEEX
                </a>
            </div>

            <div id="buenocell">
                <a href="tiempoAire.php?com='BUENO CELL'" target="_self">
                    <img id="imgBuenocell" src="imagenes/buenocell.png" alt="">
                    BUENO CELL
                </a>
            </div>
        </div>
        </div>

        <!-------------------------------------------------------------------------->
        <div class="s2" id="s2">

            <div id="simpati">
                <a href="tiempoAire.php?com='SIMPATI'" target="_self">
                    <img id="imgSimpati" src="imagenes/celular.png" alt="">
                    SIMPATI
                </a>
            </div>

            <div id="flashmobile">
                <a href="tiempoAire.php?com='FLASH MOBILE'" target="_self">
                    <img id="imgFlasmobil" src="imagenes/LOGO-Flash-Mobile.png" alt="">
                    FLASH MOBILE
                </a>
            </div>

            <div id="oui">
                <a href="tiempoAire.php?com='OUI'" target="_self">
                    <img id="imgOui" src="imagenes/oui.png" alt="">
                    OUI
                </a>
            </div>

            <div id="freedrompop">
                <a href="tiempoAire.php?com='FREEDOMPOP'" target="_self">
                    <img id="imgFreedompop" src="imagenes/celular.png" alt="">
                    FREEDOMPOP
                </a>
            </div>
        </div>
    </form>
    <div id="regresar">
        <a href="menuPrin.php" target="_self">
            <img id="imgRegresar" src="imagenes/regresar.png" alt="cel">
            Regresar
        </a>
    </div>

    <link rel="stylesheet" href="menuPrin.html">

</body>

</html>
<?php
}else{
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}
 ?>