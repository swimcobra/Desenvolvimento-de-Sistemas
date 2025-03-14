<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 04</h1>

    <p>
        Escreva um algoritmo que leia dois números e ao final mostre a soma, subtração, multiplicação e a divisão dos números lidos.
    </p>

    <form action="ex04.php" method="post">
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

                echo "<br>Número A: " . $A . "<br>Número B: " . $B . "<br><br>";
                echo $A . " + " . $B . " = " . $A + $B . "<br>";
                echo $A . " - " . $B . " = " . $A - $B . "<br>";
                echo $A . " X " . $B . " = " . $A * $B . "<br>";
                echo $A . " / " . $B . " = " . $A / $B . "<br>";
            }
        }

    ?>
</body>
</html>