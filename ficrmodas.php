<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "base";

        $conn  =  mysqli_connect($host, $user, $pass, $db);

        if (!$conn) {
            
            header("Location: formulario.html");
            exit();
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $sql = "INSERT INTO usuarios (nome, telefone, email, senha) VALUE ('$nome', '$telefone', '$email' , '$senha')";

                if (mysqli_query($conn, $sql)) {
                    echo "Usuario inserido com sucesso";
                } else {
                    echo "Erro ao inserir usuario:" . mysqli_error($conn);
                }
            }
        }
    ?>
</body>
</html>