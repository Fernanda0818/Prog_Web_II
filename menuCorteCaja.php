<?php
session_start();
if(isset($_SESSION["usuario"])){
$user = $_SESSION['usuario'];
$fecha = ['0000-00-00'];
require("datos/classConnectionMYSQL.php");

$NewConn = new ConnectionMYSQL();

$NewConn->CreateConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menuPrincipal.css">
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

    <form action="menuCorteCaja.php" method="post">
        <div id="divFecha">
            <input value="0000-00-00" type="text" id="ingresarFecha" name="ingresarFecha" placeholder="ej. yyyy-mm-dd" required>
            
            <input id="buscarDatos" type="submit" value="Buscar Datos">
        </div>

        <table class="tblProductos" id="tblProductos">
            <thead>
                <tr>
                    <th>Id de venta</th>
                    <th>Fecha (yyyy-mm-dd)</th>
                    <th>Total de venta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $fecha = (string) $_POST['ingresarFecha'];
                $query = "SELECT * FROM ventas WHERE fecha = '$fecha' ORDER by TotalVenta ASC";
                $result = $NewConn->ExecuteQuery($query);
                if ($result) {
                    while ($row = $NewConn->GetRows($result)) {
                        $total = $total + (float) $row[3];
                        echo
                            "
                        <tr>
                        <td>" . $row[0] . "</td>
                        <td>" . $row[1] . "</td>
                        <td>" . $row[3] . "</td>
                        </tr>
                        ";
                    }
                }else{
                    echo
                            "
                        <tr>
                        <td>-----</td>
                        <td>-----</td>
                        <td>-----</td>
                        </tr>
                        ";
                }
                ?>
            </tbody>
        </table>
        <div class="barraCambio" id="barraCambio">
            <!-- <div class="cambio" id="cambio">Cambio (M.N.): $200.00</div> -->
            <?php
            echo "<div class='pagar' id='pagar'>Total de la venta del dia(M.N.): $" . $total . "</div>"
                ?>
        </div>
    </form>

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