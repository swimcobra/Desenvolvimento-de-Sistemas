<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Mais Exemplos de Array</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>
    <h1>Aula 05 - Mais Exemplos de Arrays</h1>
    <h2>Debugando arrays com print_r e var_dump</h2>
    <?php
     //verificando se recebemos dados do form de newsletter
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['nome'])){
            echo "Nome não pode estar em branco<br>";
        }
        if(empty($_POST['email'])){
            echo "E-mail não pode estar em branco<br>";
        }
        echo "<h4>Dados Recebidos</h4>";
        echo "<pre>";
        print_r($_POST); //variável superglobal $_POST
        echo "</pre>";

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

        $filme = [
            'titulo'        => 'Titanic',
            'genero'        => 'Drama',
            'diretor'       => 'James Cameron',
            'ano'           => 1997,
            'tomatometro'   => 88.5
        ];

        echo "<h3>Print_R:</h3>";
        echo "<pre>";
        print_r($filme);
        echo "</pre>";

        echo "<h3>Var_Dump:</h3>";
        echo "<pre>";
        var_dump($filme);
        echo "</pre>";
    ?>

    <h2>Array Associativo 'livro':</h2>

    <?php
        //criando array associativo linha a linha
        $livro['titulo']    = "O Senhor dos Aneis";
        $livro['genero']    = "Fantasia";
        $livro['autor']     = "J. R. R. Tolkien";
        $livro['ano']       = 1954;

        foreach($livro as $chave => $valor){
            echo ucfirst($chave) . ": " . $valor . "<br>";
        }
    ?>

    <h2>Form de simulação de newsletter:</h2>

    <form action="exemplos.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>