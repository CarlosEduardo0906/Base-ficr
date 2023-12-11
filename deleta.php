<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "base";

$conn  =  mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    
    header("Location: delete.php");
    exit();
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];

        $sql  = "DELETE FROM usuarios WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            echo "Usuario excluido com sucesso";
        } else {
            echo "Erro ao excluir usuario:" . mysqli_error($conn);
        }
    }
}

?>