<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Home</title>
</head>
<body>
    <h1>Aula 03 - Home</h1>
    
    <?php

    $aluno = "Lucca Anderle";
    $curso = "ADS";
    $periodo = 3;

    echo "Aluno: " . $aluno . "<br>"; //concatenação
    echo "Curso: " . $curso . "<br>";
    echo "Periodo: $periodo<br>"; //interpolação (não recomendável)

    ?>

    <ul>
        <li><a href="exemplo01.php">Exemplo 01</a></li>
        <li><a href="ex01.php">Exercício 01</a></li>
        <li><a href="ex02.php">Exercício 02</a></li>
        <li><a href="ex03.php">Exercício 03</a></li>
        <li><a href="ex04.php">Exercício 04</a></li>
        <li><a href="ex05.php">Exercício 05</a></li>
        <li><a href="ex06.php">Exercício 06</a></li>
        <li><a href="ex07.php">Exercício 07</a></li>
        <li><a href="ex08.php">Exercício 08</a></li>
        <li><a href="ex09.php">Exercício 09</a></li>
        <li><a href="ex10.php">Exercício 10</a></li>
    </ul>

</body>
</html>