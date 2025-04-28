<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa 02 - Index</title>
</head>
<body>
    <h1>Atividade Avaliativa 02 - Index</h1>
    <h2>Lucca Alves de Souza Anderle</h2>

    <form action="estoque.php" method="post">
        <p>
            <label for="titulo">Título do livro:</label>
            <input type="text" name="titulo" id="titulo" required>
        </p>
        <p>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required>
        </p>
        <p>
            <label for="preco">Preço Unitário:</label>
            <input type="text" name="preco" id="preco" required>
        </p>
        <p>
            <label for="quant">Quantidade em Estoque:</label>
            <input type="number" name="quant" id="quant" required>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>