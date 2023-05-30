<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $user = $_SESSION['usuario'];

    require("datos/classConnectionMYSQL.php");

    //OBTENER EL CODIGO DE BARRAS DEL CUADRO DE TEXTO 
    $codigo_Barras = $_POST['articulo'];

    //BUSCAMOS EL PRODUCTO AL QUE PERTENECE EL CODIGO DE BARRAS

    $NewConn = new ConnectionMySQL();
    $NewConn->CreateConnection();

    $query = "SELECT * FROM Productos WHERE codigo_barra = '$codigo_Barras'";
    $result = $NewConn->ExecuteQuery($query);

    if ($result) {
        $RowCount = $NewConn->GetCountAffectedRows();
        if ($RowCount > 0) {
            echo "
        <table class='tblProductos' id='tblProductos'>
                <thead>
                    <tr>
                        <th>Artículo</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jugos</td>
                        <td>1</td>
                        <td>$12.00</td>
                    </tr>
                    <td>Papas</td>
                    <td>1</td>
                    <td>$17.00</td>
                    </tr>
                    <tr>
                        <td>Cafe</td>
                        <td>1</td>
                        <td>$15.00</td>
                    </tr>
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>Cambio (M.N): $</th>
                        <th>Por pagar(M.N): $</th>
                    </tr>
                </tfoot> -->
            </table>
            ";
            // header("Location: menuPrin.html");
            // header('Location: menuPrin.html');
        }
    } else {
        echo "<h1> Producto no fue encontrado</h1>";
    }

} else {
    echo "<script type='text/javascript'>
    window.location='Login.html'
    </script>";
}
?>