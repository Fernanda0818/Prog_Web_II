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

    <h1 id="titulo">Gana puntos en cada compra con spin premia</h1>

    <div class="cont">
        <div id="compra">
            <img id="compra" src="imagenes/compra.png" alt="">
            <h2>1 Compra</h2>
            <p>
                Escanea tu tarjeta Spin Premia* (física o digital)
                al comprar en cualquiera de nuestras marcas aliadas.
                Si tienes la tarjeta OXXO PREMIA,
                ¡Úsala! Aún es válida para el programa Spin Premia.
            </p>
            <h3>*Solicítala gratis en tiendas OXXO con tu número celular</h3>
        </div>

        <div id="compra">
            <img id="compra" src="imagenes/gana.png" alt="">
            <h2>2 Gana</h2>
            <p>
                Gana puntos Spin Premia con cada una de tus compras en nuestra red de marcas aliadas.
                Entre más compras realices, más puntos y beneficios ganas.
            </p>
            <h3>*Consulta tus puntos y movimientos en la app miOXXO</h3>
        </div>

        <div id="compra">
            <img id="compra" src="imagenes/disfruta.png" alt="">
            <h2>3 Disfruta</h2>
            <p>
                Usa tus puntos Spin Premia para pagar tus compras o para obtener
                diferentes beneficios, recompensas y experiencias con nuestras
                marcas aliadas*
            </p>
            <h3>*Consulta todos los beneficios de nuestras marcas aliadas</h3>
        </div>
    </div>

    <h1 id="titulo">Disfruta de beneficios exclusivos</h1>

    <div class="cont">

        <div id="compra">
            <img id="compra" src="imagenes/sellos.png" alt="">
            <h2>Sellos</h2>
            <p>
                Llévate productos de regalo al acumular tus compras
            </p>
        </div>

        <div id="compra">
            <img id="compra" src="imagenes/puntosadicionales.png" alt="">
            <h2>Puntos Adicionales</h2>
            <p>
                Elige productos participantes y en el total de tu compra gana más puntos
            </p>
            
        </div>

        <div id="compra">
            <img id="compra" src="imagenes/recompensas.png" alt="">
            <h2>Recompensas</h2>
            <p>
                Llega a la meta al acumular tus compras y llévate tus productos de regalo
            </p>
        </div>
    </div>
    <div id="regresar">
        <a href="menuPrin.php" target="_self">
            <img id="imgRegresar" src="imagenes/regresar.png" alt="cel">
            Regresar
        </a>
    </div>
</body>

</html>

<?php
}else{
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}
 ?>