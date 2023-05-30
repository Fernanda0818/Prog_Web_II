<?php
$com = $_GET['com'];
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
    <link rel="stylesheet" href="css/recargas.css">
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
        ?>>
        <div class="logo" id="logo">
            <img class="logoImg" src="imagenes/Oxxo_Logo.svg.png" alt="">
        </div>
    </div>

    <form class="recarga" action="agregarServicio.php" method="post">

        <div id="comp">
            <p>Servicio:</p>
            <?php
            echo
                "
            <input name='comp' type='text' id='comp' value=" . $com . " readOnly>
            "
                ?>
        </div>

        <div id="cantidad">
            <p>Cantidad:</p>
            <input name="cantidad" type="number" id="cantidad" required>
        </div>

        <div id='numero'>
            <p>Numero de referencia:</p>
            <input name='numeroRef' type='number' id='numeroRef' required>
        </div>

        <!-- <div id='total'>
            <p>Total:</p>
            <input name='total' type='number' id='total' readonly required>
        </div> -->

        <button type="submit" id="recargar" name="recargar">Recargar</button>
    </form>


    <div id='regresar'>
        <a href='menuServicios.php' target='_self'>
            <img id='imgRegresar' src='imagenes/regresar.png' alt='cel'>
            Regresar
        </a>
    </div>


</body>

</html>

<?php
}else{
    echo "<script type='text/javascript'>
    window.location='index.html'
    </script>";
}
 ?>