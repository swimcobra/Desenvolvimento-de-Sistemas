<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>
    
    <h1>Exercício 06</h1>

    <p>Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de conversão é: F = (9 * C + 160) / 5</p>

    <form action="ex06.php" method="post">
        <label for="Celsius">Número em Celsius:</label>
        <input type="number" name="Celsius" id="Celsius">
        <button type="submit">Verificar</button>
    </form>

    <?php
    //trocado de !empty para isset pois o 0 é identificado como vazio e não executava o if
        if(isset($_POST['Celsius'])){
            $Celsius = $_POST['Celsius'];
            $Fahrenheit = (9 * $Celsius + 160) / 5;

            echo "<br>Temperatura em Celsius: " . $Celsius . "°C<br>Temperatura em Fahrenheit: " . $Fahrenheit . "°F";

        }
    ?>
</body>
</html>