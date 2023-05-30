<?php
session_start();

require("datos/classConnectionMYSQL.php");

$user = $_POST['usuario'];
$pass = $_POST['password'];

//echo "<h1> El usuario es: " . $user . " y el password es: " . $pass . " </h1>";

$NewConn = new ConnectionMySQL();
$NewConn->CreateConnection();
$query = "SELECT * FROM usuario WHERE Usuario='$user' AND Pass= sha1('$pass')";
$result = $NewConn->ExecuteQuery($query);

if ($result) {
    $RowCount = $NewConn->GetCountAffectedRows();
    if ($RowCount > 0) {
        echo "Query ejecutado exitosamente <br/>";
        header("Location: menuPrin.php");
        header('Location: menuPrin.php');
        $_SESSION['usuario'] = $user;
    } else {
        
        // echo "<script>
        // document.getElementById('resultado').innerHTML =
        //     -<span style = 'color: red;'>Ninguno de los campos debe ser vacio</span>-;
        // </script>";

         header("Location: Login.html");
         header('Location: Login.html');
    }
} else {
    header("Location: Login.html");
    header('Location: Login.html');
}
?>