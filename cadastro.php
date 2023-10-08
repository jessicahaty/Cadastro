<?php
    if(isset($_POST['submit'])) {

        include_once('config.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO contas (usuario, senha) VALUE ('$usuario', '$senha')");

        header('Location: login.php');

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <h1>CADASTRO</h1>
        <form action="cadastro.php" method="POST">
            <input type="text" name="usuario" id="usuario" required placeholder="usuario">
            <input type="password" name="senha" id="senha" required placeholder="senha">
            <input type="submit" id="submit" name="submit">
        </form>
    </div>
</body>
</html>