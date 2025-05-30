<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Home</title>
</head>
<body>
    <h1>Aula 12 - Home</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="restrita.php">Área Restrita</a>
        <a href="logout.php">Logout</a>
    </nav>

    <h4>Bem-vindo ao nosso pequeno site!</h4>

    <?php 
        require_once 'functions.php';
        verificar_codigo();

        session_start();

        incluir_form_login();
    ?>
</body>
</html>