<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $user = $_SESSION['usuario'];
    require("datos/classConnectionMYSQL.php");

    $compania = $_POST['comp'];
    $cantidad = $_POST['cantidad'];
    $numero = $_POST['numeroRef'];
    $nombre = $_POST['nombre'];
    $fecha = date("y-m-d");
    $comision = 15;
    $cantTotal = (intval($cantidad)) + $comision;


    $NewConn = new ConnectionMySQL();
    $NewConn->CreateConnection();
    $query = "INSERT INTO Ventas VALUES(null,'$fecha',null, $cantidad)";

    $result = $NewConn->ExecuteQuery($query);

    if ($result) {
        $RowCount = $NewConn->GetCountAffectedRows();
        if ($RowCount > 0) {
            echo "Query ejecutado exitosamente";
            header("Location: menuFinanzas.php");
            header('Location: menuFinanzas.php');
        }
        $NewConn->CloseConnection();
    } else {
        echo "<h3>error</h3>";
    }

    $NewConn2 = new ConnectionMySQL();
    $NewConn2->CreateConnection();
    $query2 = "INSERT INTO Depositos VALUES (null, '$compania', '$fecha', $cantidad, '$nombre', $comision, $cantTotal, (SELECT max(idVentas) FROM ventas))";

    $result2 = $NewConn2->ExecuteQuery($query2);

    if ($result2) {
        $RowCount2 = $NewConn->GetCountAffectedRows();
        if ($RowCount2 > 0) {
            echo "Query ejecutado exitosamente";
            header("Location: menuFinanzas.php");
            header('Location: menuFinanzas.php');
            
        }
        $NewConn2->CloseConnection();
    } else {
        echo "<h3>error1</h3>";
    }


} else {
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}


?>