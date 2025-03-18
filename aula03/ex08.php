<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 08</h1>

    <p>Escreva um algoritmo que leia um número e mostre uma mensagem caso este número seja maior ou igual a 50, outra se ele for menor que 50.</p>
    
    <form action="ex08.php" method="post">
        <label for="num">Digite um número</label>
        <input type="number" name="num" id="num">
        <button type="submit">Verificar</button>
    </form>

    <?php
        if(isset($_POST['num'])){
            $num = $_POST['num'];

            if($num >= 50){
                echo "Seu número é maior ou igual a 50";
            }
            else{
                echo "Seu número é menor que 50";
            }
        }
    ?>
</body>
</html>