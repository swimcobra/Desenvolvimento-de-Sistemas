<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 10</h1>

    <p>Escreva um algoritmo que leia um número de 1 a 50. Escreva-os na tela indo do número digitado até o número 50. <br>Caso o usuário digite um valor que não esteja neste intervalo, exibir a mensagem: “Número inválido!”, e solicitar uma nova entrada até que essa condição seja atendida</p>

    <form action="ex10.php" method="post">
        <label for="num">Digite um número entre 1 e 50:</label>
        <input type="number" name="num" id="num">
        <button type="submit">Verificar</button>
    </form>

    <?php
        if(is_numeric($_POST['num'])){
            $num = $_POST['num'];
            if($num <= 50 && $num >= 1){
                echo "<br>";
                for($i = $num; $i <= 50; $i++){
                    echo $i . " ";
                }
            }
            else{
                echo "<br>Insira um número válido!";
            }
        }
        else{
            echo "<br>Insira um número!";
        }
    ?>
</body>
</html>