<!DOCTYPE html>
<html lang="pt-br">
<head>
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
        if($linhas_afetadas == 0) { // Se zero linhas afetadas = não há registros na tabela
            exit("<h3>Não há clientes para exibir</h3>");
        }

        // Se número de linhas afetadas for negativo, há erro no sql
        if($linhas_afetadas < 0) {
            exit("<h3>Não foi possível realizar a consulta no banco</h3>");
        }

        // Enquanto houver registros armazenados em 'resultado', vamos criar um array associativo para cada registro retornado.
        // Mostraremos na tela, o array associativo a cada iteração do laço.
        echo "<h2>Clientes Cadastrados:</h2>";
        while($cliente = mysqli_fetch_assoc($resultado)) {
            echo "ID: "         . $cliente['id']    . "<br>";
            echo "Nome: "       . $cliente['nome']  . "<br>";
            echo "Telefone: "   . $cliente['fone']  . "<br>";
            echo "E-mail: "     . $cliente['email'] . "<br>";
        }

        mysqli_close($conn); // Encerra a conexão com o banco
    ?>
</body>
</html>