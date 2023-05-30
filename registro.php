<?php
// session_start();
// if (isset($_SESSION["usuario"])) {
//     $user = $_SESSION['usuario'];

    require("datos/classConnectionMYSQL.php");

    //recoger informacion enviada por el metodo POST
    $correo = $_POST['email'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    $confPass = $_POST['confiPassword'];
    // $passHash = password_hash($pass, PASSWORD_BCRYPT);
// $passig = password_verify($pass, $passHash);

    $NewConn = new ConnectionMySQL();
    $NewConn->CreateConnection();
    $query = "INSERT INTO usuario VALUES(null,'$correo','$usuario', sha1('$pass'))";

    $result = $NewConn->ExecuteQuery($query);
    echo ($result);
    if ($result) {
        $RowCount = $NewConn->GetCountAffectedRows();
        if ($RowCount > 0) {
            echo "Query ejecutado exitosamente";
            //header("Location: Login.html");
            // header('Location: Login.html');
        }
        $NewConn->CloseConnection();
    } else {
        echo "<h3>error</h3>";
    }

// } else {
//     echo "<script type='text/javascript'>
//     window.location='Login.html'
//     </script>";
// }

?>