<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 02</h1>

    <p>
        Escreva um algoritmo que leia dois números digitados pelo usuário e exiba o resultado da sua soma.
    </p>
    
    <form action="ex02.php" method="post">
        <label for="num1">Primeiro Número:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="num2">Segundo Número:</label>
        <input type="number" name="num2" id="num2" required>
        <button type="submit">Verificar</button>
    </form>

    <?php

        if(!empty($_POST['num1'])){
            if(!empty($_POST['num2'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                echo $num1 . "+" . $num2 . "=" . $num1 + $num2;
            }
        }
    
    ?>
    
</body>
</html>