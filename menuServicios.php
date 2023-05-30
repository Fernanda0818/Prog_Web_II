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

    <h3 id="titulo">Servicios</h3>

    <!-------------------------------------------------------------------------->

    <form method="POST" action="servicios.php">
    <div class="s1" id="s1">

        <div id="internet">
            <a href="servicios.php?com='INTERNET'" target="_self">
                <img id="imgInternet" src="imagenes/Internet-en-Casa.png" alt="">
                INTERNET
            </a>
        </div>

        <div id="sky">
            <a href="servicios.php?com='SKY'" target="_self">
                <img id="imgSky" src="imagenes/SKY.png" alt="">
                SKY
            </a>
        </div>

        <div id="dish">
            <a href="servicios.php?com='DISH'" target="_self">
                <img id="imgDish" src="imagenes/dish.png" alt="">
                DISH
            </a>
        </div>

        <div id="luz">
            <a href="servicios.php?com='CFE'" target="_self">
                <img id="imgLuz" src="imagenes/CFE.png" alt="">
                PAGO DE LUZ 
            </a>
        </div>

        <div id="agua">
            <a href="servicios.php?com='AGUA'" target="_self">
                <img id="imgAgua" src="imagenes/AGUA.png" alt="">
                PAGO DE AGUA
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

    <!-- <footer class="footer">servicio</footer> -->
</body>

</html>
<?php
}else{
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}
 ?>