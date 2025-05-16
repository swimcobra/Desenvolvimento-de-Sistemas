<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body class="container-fluid">
    <h1>Aula 10 - Editar Cliente (Continuação da aula 09)</h1>

    <?php

        require_once 'menu.php';

        require_once 'validacoes.php';

        id_nao_enviado(); // Verifica se o cliente foi enviado

        // Se o id foi enviado para esta página, armazenamos ele numa variável
        $id = (int)$_GET['id']; 

        require_once 'conexao.php'; // Inclui o arquivo de conexão

        $conn = conectar_banco(); // Recebe conexão ativa com o BD

        $query = "SELECT * FROM tb_clientes WHERE id = $id"; // Montamos o SELECT para buscar dados do Cliente especifico

        $resultado = mysqli_query($conn, $query); // Executa o comando sql e armazena o resultado em $resultado

        $linhas_afetadas = mysqli_affected_rows($conn); // Recebemos o valor das linhas afetadas

        verificar_select($linhas_afetadas); // Verificamos o valor das linhas afetadas

        $cliente = mysqli_fetch_assoc($resultado); // Se estiver tudo certo, convertemos o resultado num array associativo $cliente


        //Abaixo, mostraremos um form html, inserindo no atributo 'value' de cada input, o valor correspondente do array '$cliente'. No caso do id, usaremos um campo oculto (hidden) e usaremos o valor de '$id' para este campo

    ?>

    <h2>Editar Clientes</h2>

    <form action="editado.php" method="post">

        <label for="nome">Nome: </label><br>
        <input type="text" name="nome" id="nome"
        value="<?= $cliente['nome']; ?>"><br><br>

        <label for="fone">Fone: </label><br>
        <input type="text" name="fone" id="fone"
        value="<?= $cliente['fone']; ?>"><br><br>

        <label for="email">E-mail: </label><br>
        <input type="email" name="email" id="email"
        value="<?= $cliente['email']; ?>"><br><br>

        <input type="hidden" name="id" value="<?= $id; ?>">

        <button class="btn btn-sm btn-primary" type="submit">Editar</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>