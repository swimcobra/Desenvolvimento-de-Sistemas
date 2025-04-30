<?php require_once 'validacoes.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ // Verifica se o usuário chegou nessa página através do método POST
            $livro = [ // Se o usuário chegou pelo POST, atribui os dados recebidos a chaves dentro do array livro
                'titulo' => $_POST['titulo'],
                'autor'  => $_POST['autor'],
                'preco'  => str_replace(',', '.', $_POST['preco']),
                'quant'  => $_POST['quant'] 
            ];
            // Chama a função validarLivros e passa o array livro como argumento, caso esteja tudo certo, exibe os dados na tela
            if(validarLivros($livro)){
                $valorTotal = calcularValorTotalEstoque($livro);
                foreach($livro as $chave => $valor){
                    echo ucfirst($chave) . ": " . $valor . "<br>";
                }
                echo "Valor Total: " . $valorTotal;

                echo '<p><a href="index.php">Home</a></p>';
            } else{ // Caso a função validarLivros retorne false, exibe uma mensagem pedindo para que os dados sejam preenchidos corretamente e um link para a página index
                echo "<h2>Favor preencher os dados corretamente<h2>";
                echo '<a href="index.php">Home</a>';
            }
        } else{ // Caso o usuário não tenha chegado através do método Post exibe uma mensagem pedindo para que os dados sejam preenchidos corretamente e um link para a página index
            echo "<h2>Favor preencher os dados corretamente<h2>";
            echo '<a href="index.php">Home</a>';
        }
    ?>
</body>
</html>