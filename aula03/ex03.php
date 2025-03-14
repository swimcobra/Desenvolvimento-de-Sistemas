<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 03</h1>

    <p>
    Escreva um algoritmo que leia os valores de dois números inteiros distintos nas variáveis A e B e informe qual deles é o maior. Caso os números sejam iguais informar ao usuário que a sequência de números informados é inválida.
    </p>

    <form action="ex03.php" method="post">
        <label for="A">Número A:</label>
        <input type="number" name="A" id="A" required>

        <label for="B">Número B:</label>
        <input type="number" name="B" id="B" required>
        <button type="submit">Verificar</button>
    </form>

    <?php

        if(!empty($_POST['A'])){
            if(!empty($_POST['B'])){
                $A = $_POST['A'];
                $B = $_POST['B'];

                echo "Número A: " . $A . "<br>Número B: " . $B . "<br>";

                if($A == $B){
                    echo "Sequência de números informados é inválida!";
                }
                else if($A > $B){
                    echo "Número A maior que número B";
                }
                else{
                    echo "Número B maior que número A";
                }
            }
        }
    
    ?>
        
</body>
</html>