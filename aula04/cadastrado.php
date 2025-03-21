<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Cliente Cadastrado</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <?php
        //verificar se a página recebeu uma requisição POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //verificar se nenhum campo está em branco
            if(!empty($_post['nome']) && !empty($_post['email']) && !empty($_post['fone'])){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $fone = $_POST['fone'];

                echo "<h2>Cliente Cadastrado</h2>";

                echo "Nome do cliente: " . $nome . "<br>E-mail: " . $email . "<br>Telefone: " . $fone . "<br>";
            } else{ //se um ou mais campos estiverem em branco
                echo "<h3>Preencha todos os campos do formulário!</h3>";
                //incluido o formulário para não ter a necessidade de voltar para a home
                require_once('form_cadastro.php');
            }
        } else{
            echo "<h3>ATENÇÃO: Formulário não enviado!</h3>";
        }
    ?>
</body>
</html>