<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 05</h1>

    <p>
    Leia valores nas variáveis A e B, e efetue a troca dos valores de forma que o valor da variável A passe a ser o valor da variável B, e o valor da variável B passe a ser o valor da variável A. presentar uma mensagem com o valor original de cada variável e outra com os valores trocados.
    </p>

    <form action="ex05.php" method="post">
        <label for="A">Número A:</label>
        <input type="number" name="A" id="A">

        <label for="B">Número B:</label>
        <input type="number" name="B" id="B">

        <button type="submit">Verificar</button>
    </form>

    <?php

        if(!empty($_POST['A'])){
            if(!empty($_POST['B'])){
                $A = $_POST['A'];
                $B = $_POST['B'];

                echo "<br>Números Originais:<br><br>Número A: " . $A . "<br>Número B: " . $B . "<br>";

                $C = $A;
                $A = $B;
                $B = $C;

                echo "<br>Números Trocados:<br><br>Número A: " . $A . "<br>Número B: " . $B;
            }
        }
    ?>

</body>
</html>