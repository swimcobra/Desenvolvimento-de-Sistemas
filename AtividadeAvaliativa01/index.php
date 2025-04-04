<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 01 - Index</title>
</head>
<body>
   <h1>Atividade Avaliativa 01 - Index</h1>
   <h2>Lucca Alves de Souza Anderle</h2> 

   <form action="cadastro.php" method="post">
    <p>
        <label for="aparelho">Nome do Aparelho:</label>
        <input type="text" name="aparelho" id="aparelho" required>
    </p>
    <p>
        <label for="consumo">Consumo Máximo em Watts:</label>
        <input type="number" name="consumo" id="consumo" required>
    </p>
    <p>
        <label for="horas">Número de horas ligado por dia:</label>
        <input type="number" name="horas" id="horas" required>
    </p>
    <p>
        <label for="dias">Número de dias ligado por mês:</label>
        <input type="number" name="dias" id="dias" required>
    </p>
    <p>
        <label for="valorKw">Valor do Kilowatt por hora:</label>
        <input type="text" name="valorKw" id="valorKw" required>
    </p>
    <p>
        <button type="submit">Cadastrar</button>
    </p>
   </form>
</body>
</html>