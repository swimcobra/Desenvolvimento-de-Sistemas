<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Resultado da Pesquisa</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Resultado da Pesquisa</h1>

    <?php
        //se parâmetro 'cliente' foi enviado via GET
        if(!empty($_GET['cliente'])){
            $cliente = $_GET['cliente'];

            //array de clientes
            /*$clientes[] = "João Silva"; //0
            $clientes[] = "Maria Souza"; //1
            $clientes[] = "José Oliveira"; //2
            $clientes[] = "João Soares*/

            //outra maneira de criar o mesmo array:
            $clientes = [
                "João Silva", 
                "Maria Souza", //pode estar tudo na mesma linha
                "José Oliveira",
                "João Soares"
            ];

            $encontrou = false; //nesse momento, não encontramos nada

            //criar foreach para percorrer o array clientes
            foreach($clientes as $clienteAtual){
                //verificar se o nome que digitamos está contido dentro do nome do 'clienteAtual'
                if(str_contains($clienteAtual, $cliente)){
                    echo "Cliente encontrado: " . $clienteAtual . "<br>";
                    $encontrou = true; // encontrou pelo menos um cliente
                }
            }

            if(!$encontrou){ //se não encontrou nenhum cliente
                echo "<h4>Nenhum cliente encontrado co o nome " . $cliente . "</h4>";
            }
        } else{
            echo "Nenhum dado foi enviado para a pesquisa";
        }
    ?>
</body>
</html>