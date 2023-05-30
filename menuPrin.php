<?php
session_start();
if(isset($_SESSION["usuario"])){
$user = $_SESSION['usuario'];

require("datos/classConnectionMYSQL.php");

$NewConn = new ConnectionMYSQL();

$NewConn->CreateConnection();
?>

<!DOCTYPE html>
<html lang="en">
<h1></h1>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menuPrincipal.css">

</head>

<body>

    <div class="infoSup" id="infoSup">
        <div class="ubicacion" id="ubicacion">Yuriria</div>
        <div class="caja" id="caja">Caja 4</div>
        
        <!-- <input type="text" class="usuario" id="usuario" readonly> -->
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
        <div class="cerrar">
            <a href="cerrarSesion.php">
                <input type="button" id="cerrar" value="Cerrar Sesión">
            </a>
        </div>
    </div>

    <form method="post" action="guardar.php">
        <div class="contenido">
            <div class="menuPrincipal">
                <div class="captura" id="captura">
                    <p>Captura del codigo del articulo:</p>

                    <input type="text" id="articulo" name="articulo" required>
                    <input class="btn" type="submit" id="agregar" value="Agregar">
                    <!-- <input class="btn" type="reset" id="agregar" value="Pagar"> -->
                </div>

                <table class="tblProductos" id="tblProductos">
                    <thead>
                        <tr>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM datostemp";
                        $result = $NewConn->ExecuteQuery($query);
                        if ($result) {
                            while ($row = $NewConn->GetRows($result)) {
                                $total = $total + (float) $row[4];
                                echo
                                    "
                                <tr>
                                <td>" . $row[1] . "</td>
                                <td>" . $row[3] . "</td>
                                <td>" . $row[4] . "</td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <div class="barraCambio" id="barraCambio">
                    <!-- <div class="cambio" id="cambio">Cambio (M.N.): $200.00</div> -->
                    <?php
                    echo "<div class='pagar' id='pagar'>Por pagar(M.N.): $" . $total . "</div>"
                        ?>
                </div>
    </form>

    <div class="acciones">

        <div id="cobrar">
            <?php
            echo
            "
                <a href='cobrar.php?tot=$total' target='_self'>
                    <img id='imgCob' src='imagenes/cobrar.png'>
                    Cobrar
                </a>
            "
            ?>
        </div>

        <div id="eliminar">
            <a href="limpiar.php" target="_self">
                <img id="imgElim" src="imagenes/eliminar.png" alt="">
                Eliminar
            </a>
        </div>

        <div id="alimentos">
            <a href="menuAlimentos.php" target="_self">
                <img id="imgAlim" src="imagenes/comida.png" alt="">
                Alimentos
            </a>
        </div>
        <div id="servicios">
            <a href="menuServicios.php" target="_self">
                <img id="imgServ" src="imagenes/Servicios.png" alt="">
                Servicios
            </a>
        </div>
        <div id="finanzas">
            <a href="menuFinanzas.php" target="_self">
                <img id="imgFin" src="imagenes/finanzas.png" alt="">
                Finanzas
            </a>
        </div>

        <div id="tiempoAire">
            <a href="menuTiempoAire.php" target="_self">
                <img id="imgTiem" src="imagenes/cel.png" alt="cel">
                Tiempo Aire
            </a>
        </div>

        <div id="spin">
            <a href="menuSpinPremia.php" target="_self">
                <img id="imgSpin" src="imagenes/tarjeta.png" alt="">
                SPIN PREMIA
            </a>
        </div>

        <div id="corte">
            <a href="menuCorteCaja.php" target="_self">
                <img id="imgCorte" src="imagenes/corte.png" alt="">
                Corte Caja
            </a>
        </div>

    </div>
    </div>

    <div class="menuSec">
        <?php  
        echo
        "
        <div class='noUsuario'>Le atiende:  ".$user.", usuario Oxxo</div>
        ";
        ?>
        <div class="info">
            <img id="info" src="imagenes/192530.png" alt="">
        </div>
        <div class="opciones">
            <a href="menuPromociones.php">
                <input type="button" id="opciones" value="Promociones">
            </a>
        </div>
        
    </div>
    </div>

    <script src="js/scrip.js"></script>
</body>
                    
</html>

 <?php
}else{
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}
 ?>