<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 01</h1>

    <p>
        Escreva um algoritmo que leia um número digitado pelo usuário e mostre a mensagem Número maior do que 10!”, caso este número seja maior, ou “Número menor ou igual a 10!”, caso este número seja menor ou igual.
    </p>

    <form action="ex01.php" method="post">
        <label for="valor">Valor:</label>
        <input type="number" name="exercicio01" id="exercicio01" required>
        <button type="submit">Verificar</button>
    </form>

    <?php

        if(!empty($_POST['exercicio01'])){
            $valor = $_POST['exercicio01'];

            if($valor > 10){
                echo "Número maior do que 10!";
            }
            else{
                echo "Número menor ou igual a 10!";
            }
        }

    ?>

</body>
</html>