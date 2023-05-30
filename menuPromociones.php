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

    <h1 id="titulo">Promociones</h1>

    <div class="promociones">

        <div id="">
            <img id="" src="imagenes/1.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/2.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/3.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/4.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/5.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/6.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/7.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/8.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/9.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/10.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/11.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/12.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/13.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/14.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/15.png" alt="">
        </div>

        <div id="">
            <img id="" src="imagenes/16.png" alt="">
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