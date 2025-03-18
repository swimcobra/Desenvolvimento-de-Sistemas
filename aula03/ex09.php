<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <p><a href="index.php">Home</a></p>

    <h1>Exercício 09</h1>

    <p>Leia dois números nas variáveis A e B e identifique se os valores são iguais ou diferentes. Caso eles sejam iguais imprima uma mensagem dizendo que são iguais. Caso sejam diferentes, informe que são diferentes e qual número é o maior.</p>
    
    <form action="ex09.php" method="post">
        <label for="A">Digite o número A:</label>
        <input type="number" name="A" id="A">

        <label for="B">Digite o número B:</label>
        <input type="number" name="B" id="B">

        <button type="submit">Verificar</button>
    </form>

    <?php
    //tava dando problema com o isset, pois ele só checa se foi enviado, mesmo que não tenha nenhum número, 
    //portanto troquei para o is_numeric, que checa se existe um número em cada variável.
        if(is_numeric($_POST['A']) && is_numeric($_POST['B'])){
                $A = $_POST['A'];
                $B = $_POST['B'];
                echo "<br>Número A: " . $A . "<br>Número B: " . $B . "<br><br>";

                if($A != $B){
                    if($A > $B){
                        echo "Os números são diferentes! " . $A . " é maior que " . $B . "!";
                    }
                    else{
                        echo "Os números são diferentes! " . $B . " é maior que " . $A . "!";
                    }
                }
                else{
                    echo "Os números são iguais!";
                }
            }
            else{
                echo "<br>Preencha os dois campos!";
            }
        
    ?>
</body>
</html>