<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Excluir Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1>Aula 10 - Excluir Cliente (Continuação da aula 09)</h1>

    <?php
    
    require_once 'menu.php';

    require_once 'validacoes.php';

    id_nao_enviado(); // Verifica se o cliente foi enviado

    // Se o id foi enviado para esta página, armazenamos ele numa variável
    $id = (int)$_GET['id']; 

    require_once 'conexao.php'; // Inclui o arquivo de conexão

    $conn = conectar_banco(); // Recebe conexão ativa com o BD

    $sql = "DELETE FROM tb_clientes WHERE id = ?"; // Cria o comando sql para deletar o cliente específico

    $stmt = mysqli_prepare($conn, $sql); // Prepara a declaração (statement) de intenção de execução

    // Verifica se há erros no sql
    if(!$stmt) {
        exit("<h3>Erro na preparação do comando SQL</h3>");
    }

    mysqli_stmt_bind_param($stmt, 'i', $id); // Associamos o parametro id (int), ao stmt criado acima (? substituido pelo valor de id)

    // Verifica se ocorre algum erro ao executar o comando sql
    if(!mysqli_stmt_execute($stmt)) {
        exit("<h3>Erro ao excluir cliente no BD: " . mysqli_stmt_error($stmt) . "</h3>");
    }

    // Verificarn se realmente houve exclusão de cliente no BD
    if(mysqli_affected_rows($conn) <= 0) {
        exit("<h3>Id inválido!</h3>");
    }

    echo "<h3>Cliente excluído com sucesso!</h3>";

    mysqli_stmt_close($stmt); // Encerra ações possíveis com esse stmt
    mysqli_close($conn); // Encerrar conexão com banco de dados
   
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>