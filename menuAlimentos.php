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

    <h3 id="titulo">Alimentos</h3>

    <!-------------------------------------------------------------------------->

    <form method="POST" action="alimentos.php">
    <div class="s1" id="s1">

        <div id="sopa">
            <a href="alimentos.php?com=sopa Preparada" target="_self">
                <img id="imgSopa" src="imagenes/sopa.png" alt=""> 
                SOPA
            </a>
        </div>

        <div id="cafeAmericano">
            <a href="alimentos.php?com=cafe Americano" target="_self">
                <img id="imgCafeAmericano" src="imagenes/cafe.png" alt="">
                CAFE AMERICANO
            </a>
        </div>

        <div id="chocolate">
            <a href="alimentos.php?com=chocolate Caliente" target="_self">
                <img id="imgChocolate" src="imagenes/chocolate.png" alt="">
                CHOCOLATE 
            </a>
        </div>

        <div id="cafeCappucchino">
            <a href="alimentos.php?com=cafe Cappuchino" target="_self">
                <img id="imgCappucchino" src="imagenes/capuchino.png" alt="">
                CAPPUCCHINO 
            </a>
        </div>

        <div id="sandwich">
            <a href="alimentos.php?com=sandwich" target="_self">
                <img id="imgSandwich" src="imagenes/sandwich.png" alt="">
                SANDWICH
            </a>
        </div>
    </div>


    <!-------------------------------------------------------------------------->
    <div class="s2" id="s2">
        <div id="miniPizza">
            <a href="alimentos.php?com=mini Pizza" target="_self">
                <img id="imgMiniPizza" src="imagenes/pizza.jpg" alt="">
                MINI PIZZA
            </a>
        </div>

        <div id="iceMora">
            <a href="alimentos.php?com=ice Mora" target="_self">
                <img id="imgIceMora" src="imagenes/iceMora.png" alt="">
                ICE MORA AZUL
            </a>
        </div>
        <div id="iceFresa">
            <a href="alimentos.php?com=ice Fresa" target="_self">
                <img id="imgIceFresa" src="imagenes/iceFresa.png" alt="">
                ICE FRESA
            </a>
        </div>

        <div id="iceCereza">
            <a href="alimentos.php?com=ice Cereza" target="_self">
                <img id="imgIceCereza" src="imagenes/iceCereza.png" alt="">
                ICE CEREZA
            </a>
        </div>

        <div id="ramen">
            <a href="alimentos.php?com=ramen" target="_self">
                <img id="imgRamen" src="imagenes/ramen.png" alt=""> 
                RAMEN
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
    window.location='index.html'
    </script>";
}
 ?>