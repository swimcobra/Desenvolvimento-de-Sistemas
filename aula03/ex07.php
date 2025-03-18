<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 07</h1>

    <p>Escreva um algoritmo que leia um número e diga, através de uma mensagem, se este número está no intervalo entre 100 e 200. Caso o número esteja fora do intervalo, solicitar ao usuário que digite novamente, até que essa condição seja atendida.</p>
    
    <form action="ex07.php" method="post">
        <label for="num">Digite um número</label>
        <input type="number" name="num" id="num">
        <button type="submit">Verificar</button>
    </form>

    <?php
        if(isset($_POST['num'])){
            $num = $_POST['num'];

            if($num >= 100 && $num <= 200){
                echo "Seu número está num intervalo entre 100 e 200";
            }
            else{
                echo "Seu número não está num intervalo entre 100 e 200. Favor informar novo número!";
            }
        }
    ?>
</body>
</html>