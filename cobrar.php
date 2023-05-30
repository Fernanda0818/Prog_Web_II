<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $user = $_SESSION['usuario'];

    $tot = $_GET['tot'];
    $fecha = date("y-m-d");
    require("datos/classConnectionMYSQL.php");
    $NewConn = new ConnectionMySQL();
    $NewConn->CreateConnection();

    $query = "INSERT INTO Ventas VALUES(null,'$fecha',null, $tot)";
    $result = $NewConn->ExecuteQuery($query);

    if ($result) {
        $RowCount = $NewConn->GetCountAffectedRows();
        if ($RowCount > 0) {

            $query2 = "SELECT * FROM datostemp";
            $result2 = $NewConn->ExecuteQuery($query2);

            if ($result2) {

                $RowCount2 = $NewConn->GetCountAffectedRows();
                if ($RowCount2 > 0) {
                    while ($row = $NewConn->GetRows($result2)) {
                        $precioUnit = $row[2];
                        $cantidad = $row[3];
                        $idProducto = $row[5];

                        $queryInsert = "INSERT INTO detallesventa VALUES (null, '$idProducto', (SELECT max(idVentas) FROM ventas), $precioUnit, $cantidad)";
                        $resultInsert = $NewConn->ExecuteQuery($queryInsert);
                        if ($resultInsert) {
                            $RowCountI = $NewConn->GetCountAffectedRows();

                        } else {
                            echo "<h3>error al insertar</h3>";
                        }
                    }
                    header("Location: limpiar.php");
                    header('Location: limpiar.php');
                }
            } else {
                echo "<h3>Error al ejecutar la consulta</h3>";
            }


        }
        $NewConn->CloseConnection();
    } else {
        header("Location: menuPrin.php");
        header('Location: menuPrin.php');
    }

} else {
    echo "<script type='text/javascript'>
    window.location='index.html'
    </script>";
}

?>