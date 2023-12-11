<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza usuário</title>
</head>
<body>
    <?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "base";

    $conn  =  mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        
        header("Location: consulta.php");
        exit();
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "UPDATE usuarios SET nome='$nome', telefone='$telefone', email='$email', senha='$senha' WHERE id='$id'";

            if (mysqli_query($conn, $sql)) {
                echo "Usuário atualizado com sucesso!";
            } else {    
                echo "Erro ao atualizar usuário: " . mysqli_error($conn);
            }
        }
    }
    ?>
</body>
</html>