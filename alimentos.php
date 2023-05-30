<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $user = $_SESSION['usuario'];

    $com = $_GET['com'];
    require("datos/classConnectionMYSQL.php");

    $NewConn = new ConnectionMySQL();
    $NewConn->CreateConnection();
    $query = "SELECT * FROM Productos WHERE nombre = '$com'";
    $result = $NewConn->ExecuteQuery($query);

    if ($result) {
        $RowCount = $NewConn->GetCountAffectedRows();
        if ($RowCount > 0) {
            while ($row = $NewConn->GetRows($result)) {
                $idProd = $row[0];
                $producto = $row[1];
                $precioUnit = $row[3];
            }
        }
       

        $query2 = "SELECT * FROM datostemp WHERE idProducto = '$idProd'";
        $result2 = $NewConn->ExecuteQuery($query2);

        if ($result2) {
            $RowCount2 = $NewConn->GetCountAffectedRows();
            if ($RowCount2 > 0) {
                while ($row1 = $NewConn->GetRows($result2)) {
                    $idtemp = $row1[0];
                    $precioU = (int) $row1[2];
                    $cantidad = (int) $row1[3];

                }
                $queryUpdate = "UPDATE datostemp SET cantidad = $cantidad + 1, total = ($precioU*($cantidad+1)) WHERE id = $idtemp";
                $resultUpdate = $NewConn->ExecuteQuery($queryUpdate);
                if ($resultUpdate) {
                    echo "<h3>actualizacion lista </h3>";
                    header("Location: menuPrin.php");
                    header('Location:  menuPrin.php');
                } else {
                    echo "<h3>actualizacion erronea</h3>";
                }
            } else {
                $cantidad = 1;
                $query3 = "INSERT INTO datostemp VALUES (null, '$producto', $precioUnit, $cantidad, ($precioUnit * $cantidad), $idProd)";
                $result3 = $NewConn->ExecuteQuery($query3);
                if ($result3) {
                    echo "<h3>insertados correctamente</h3>";
                    header("Location: menuPrin.php");
                    header('Location:  menuPrin.php');
                    $NewConn->CloseConnection();
                } else {
                    echo "<h3>no se inserto</h3>";
                }
            }
            $NewConn2->CloseConnection();
        } else {
            echo ("<h1>error en la conexion</h1>");
        }

    } else {
        echo "<h3>El producto no existe</h3>";
    }
} else {
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}

?>