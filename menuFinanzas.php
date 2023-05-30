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
    <link rel="stylesheet" href="css/estilos.css  ">
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

    <h3 id="titulo">Depositos</h3>

    <!-------------------------------------------------------------------------->

    <form method="POST" action="finanzas.php">
    <div class="s1" id="s1">

        <div id="hsbc">
            <a href="finanzas.php?com=HSBC" target="_self">
                <img id="imgHsbc" src="imagenes/HSBC-Logo.png" alt=""> 
                HSBC
            </a>
        </div>

        <div id="bbva">
            <a href="finanzas.php?com=BBVA" target="_self">
                <img id="imgBBVA" src="imagenes/bbva.png" alt="">
                BBVA
            </a>
        </div>

        <div id="bajio">
            <a href="finanzas.php?com='BANCO DEL BAJIO'" target="_self">
                <img id="imgBajio" src="imagenes/banbajio.png" alt="">
                BANCO DEL BAJIO
            </a>
        </div>

        <div id="santander">
            <a href="finanzas.php?com=SANTANDER" target="_self">
                <img id="imgSantander" src="imagenes/santander.png" alt="">
                SANTANDER 
            </a>
        </div>
    </div>


    <!-------------------------------------------------------------------------->
    <div class="s2" id="s2">
        <div id="banamex">
            <a href="finanzas.php?com=BANAMEX" target="_self">
                <img id="imgBanamex" src="imagenes/Banamex-logo.png" alt="">
                BANAMEX
            </a>
        </div>

        <div id="azteca">
            <a href="finanzas.php?com='BANCO AZTECA'" target="_self">
                <img id="imgAzteca" src="imagenes/banco-azteca.png" alt="">
                BANCO AZTECA
            </a>
        </div>

        <div id="coppel">
            <a href="finanzas.php?com=BANCOPPEL" target="_self">
                <img id="imgCoppel" src="imagenes/bancoppel.png" alt="">
                BANCOPPEL
            </a>
        </div>
        <div id="scotiabank">
            <a href="finanzas.php?com=SCOTIABANK" target="_self">
                <img id="imgScotiabank" src="imagenes/scotiabank.png" alt="">
                SCOTIABANK
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

    <link rel="stylesheet" href="menuPrin.php">

</body>

</html>

<?php
}else{
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}
 ?>