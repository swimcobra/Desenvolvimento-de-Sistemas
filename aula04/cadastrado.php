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

            /*Abaixo testaremos se cada campo do form está vazio. 
            Para cada campo vazio, adicionaremos uma mensagem de erro numa nova posição do array $erros.
            O colchetes em branco [] indica que o PHP criará uma nova posição para o array conforme a necessidade.

            Se, o form foi inteiramente preenchido, então, não haverá erros no array. Logo o array estará vazio.

            Array vazio =  array não existe para o PHP*/

            if(empty($_POST['nome'])){
                $erros[] = "<h4>Nome não pode estar em branco!</h4>";
            }

            if(empty($_POST['email'])){
                $erros[] = "<h4>E-mail não pode estar em branco!</h4>";
            }

            if(empty($_POST['fone'])){
                $erros[] = "<h4>Telefone não pode estar em branco!</h4>";
            }

            //verificar se nenhum campo está em branco
            if(!isset($erros)){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $fone = $_POST['fone'];

                echo "<h2>Cliente Cadastrado</h2>";

                echo "Nome do cliente: " . $nome . "<br>E-mail: " . $email . "<br>Telefone: " . $fone . "<br>";
            } else{ //se um ou mais campos estiverem em branco
                echo "<h3>Preencha todos os campos do formulário!</h3>";

                //print_r($erros); //debugugar arrays

                //foreach: laço 'for' próprio para percorrer arrays
                foreach($erros as $erroAtual){
                    echo $erroAtual;
                }

                //incluido o formulário para não ter a necessidade de voltar para a home
                require_once('form_cadastro.php');
            }
        } else{
            echo "<h3>ATENÇÃO: Formulário não enviado!</h3>";
        }
    ?>
</body>
</html>