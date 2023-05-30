<?php
session_start();
if (isset($_SESSION["usuario"])) {
	$user = $_SESSION['usuario'];

	require("datos/classConnectionMYSQL.php");
	// $codigo_Barras = $_POST['articulo'];
	$codigo_Barras = $_POST['articulo'];
	$NewConn = new ConnectionMySQL();
	$NewConn->CreateConnection();
	$query = "SELECT * FROM Productos WHERE codigo_barras = '$codigo_Barras'";
	$result = $NewConn->ExecuteQuery($query);


	if ($result) {
		$RowCount = $NewConn->GetCountAffectedRows();

		if ($RowCount > 0) {
			while ($row = $NewConn->GetRows($result)) {
				$idProd = $row[0];
				$producto = $row[1];
				$precioUnit = $row[3];
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
						header("Location: menuPrin.php");
						header('Location:  menuPrin.php');
					} else {
						header("Location: menuPrin.php");
						header('Location:  menuPrin.php');
					}
				} else {

					$cantidad = 1;
					$query3 = "INSERT INTO datostemp VALUES (null, '$producto', $precioUnit, $cantidad, ($precioUnit * $cantidad), $idProd)";
					$result3 = $NewConn->ExecuteQuery($query3);
					if ($result3) {
						header("Location: menuPrin.php");
						header('Location:  menuPrin.php');
						$NewConn->CloseConnection();
					} else {
						header("Location: menuPrin.php");
						header('Location:  menuPrin.php');
						echo "<h3>error</h3>";
					}
				}
				$NewConn2->CloseConnection();
			} else {
				header("Location: menuPrin.php");
				header('Location:  menuPrin.php');
			}
		} else {
			header("Location: menuPrin.php");
			header('Location:  menuPrin.php');
		}
	} else {
		header("Location: menuPrin.php");
		header('Location:  menuPrin.php');
	}

} else {
	echo "<script type='text/javascript'>
    window.location='index.html'
    </script>";
}
?>