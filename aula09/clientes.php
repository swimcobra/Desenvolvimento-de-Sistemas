<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Clientes Cadastrados</title>
</head>
<body>
    <h1>Aula 09 - Clientes Cadastrados</h1>
    <P>
        <a href="index.php">Voltar à Home</a>
    </P>

    <?php
        // Incluir arquivo de validações
        require_once 'validacoes.php';

        // Incluir arquivo de conexão
        require_once 'conexao.php';

        // Receber a conexão com BD
        $conn = conectar_banco();

        // Cria a query (o comando select)
        $query = "SELECT * FROM tb_clientes";

        // Recebe o retorno do select (se o comando retornou algo)
        $resultado = mysqli_query($conn, $query);

        // Recebe o número de linhas afetadas pelo comando select
        $linhas_afetadas = mysqli_affected_rows($conn);

        // Verificar o número de linhas afetadas
        verificar_select($linhas_afetadas);

        // Enquanto houver registros armazenados em 'resultado', vamos criar um array associativo para cada registro retornado.
        // Mostraremos na tela, o array associativo a cada iteração do laço.
        echo "<h2>Clientes Cadastrados:</h2>";

        // Montar o cabçalho da tabela
        echo "<table>";
        echo    "<tr>";
        echo        "<th>ID</th>";
        echo        "<th>Nome</th>";
        echo        "<th>Telefone</th>";
        echo        "<th>E-mail</th>";
        echo        "<th>Ações</th>";
        echo    "</tr>";

        while($cliente = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo    "<td>" . $cliente['id']    . "</td>";
            echo    "<td>" . $cliente['nome']  . "</td>";
            echo    "<td>" . $cliente['fone']  . "</td>";
            echo    "<td>" . $cliente['email'] . "</td>";
            echo    "<td>";
            echo            '<a href="excluir.php?id='  . $cliente['id'] . '">Excluir</a> | ';
            echo            '<a href="editar.php?id='   . $cliente['id'] . '">Editar</a>';
            echo    "</td>";
            echo "</tr>";
        }

        // Fecha a tabela
        echo "</table>";

        mysqli_close($conn); // Encerra a conexão com o banco
    ?>
</body>
</html>