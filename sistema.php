<?php

    session_start();

    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <h1>ENTROOOOO</h1>
</body>
</html>