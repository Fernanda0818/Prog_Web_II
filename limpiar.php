<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $user = $_SESSION['usuario'];

    require("datos/classConnectionMYSQL.php");

    //recoger informacion enviada por el metodo POST

    // $passHash = password_hash($pass, PASSWORD_BCRYPT);
// $passig = password_verify($pass, $passHash);

    // echo "pass: ".$passHash."  contraseña igual: ".$passig;



    $NewConn = new ConnectionMySQL();
    $NewConn->CreateConnection();
    $query = "DELETE FROM datostemp";

    $result = $NewConn->ExecuteQuery($query);

    if ($result) {
        $RowCount = $NewConn->GetCountAffectedRows();
        if ($RowCount > 0) {
            echo "Query ejecutado exitosamente";
            header("Location: menuPrin.php");
            header('Location: menuPrin.php');
        }
        header("Location: menuPrin.php");
        header('Location: menuPrin.php');
        $NewConn->CloseConnection();
    } else {
        echo "<h3>El usuario o la contraseña no coinciden</h3>";
    }

} else {
    echo "<script type='text/javascript'>
    window.location='index.html'
    </script>";
}

?>