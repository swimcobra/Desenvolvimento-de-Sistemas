<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $erros = [];

            if(empty($_POST['aparelho'])){
                $erros[] = "<h4>Aparelho não pode estar em branco!</h4>";
            }

            if(empty($_POST['consumo'])){
                $erros[] = "<h4>Consumo não pode estar em branco!</h4>";
            }
    
            if(empty($_POST['horas'])){
                $erros[] = "<h4>Horas não pode estar em branco!</h4>";
            }

            if(empty($_POST['dias'])){
                $erros[] = "<h4>Dias não pode estar em branco!</h4>";
            } 

            if(empty($_POST['valorKw'])){
                $erros[] = "<h4>ValorKw não pode estar em branco!</h4>";
            } 
            
            if(empty($erros)){
                $aparelho = $_POST['aparelho'];
                $horas = $_POST['horas'];
                $dias = $_POST['dias'];
                $valorKw = $_POST['valorKw'];
                $consumo = $_POST['consumo'];

                echo "<h3>Nome do Aparelho: " . $aparelho . "</h3>";
                echo "<h3>Consumo máximo em watts: " . $consumo . "</h3>";
                echo "<h3>Número de horas que o aparelho é ligado por dia: " . $horas . "</h3>";
                echo "<h3>Número de dias que o aparelho ficará ligado no mês: " . $dias . "</h3>";
                echo "<h3>valor do kilowatt-hora: R$" . $valorKw . "</h3>";

                $x = $consumo/1000;
                $consumoDiario = $x * $horas;

                echo "<h3>Consumo diário do aparelho: " . $consumoDiario . "</h3>";

                $consumoMensal = $consumoDiario * $dias;
            
                echo "<h3>Consumo mensal do aparelho: " . $consumoMensal . "</h3>";

                $consumoEmReais = $consumoMensal * $valorKw;

                echo "<h3>Consumo em reais do aparelho: R$" . $consumoEmReais . "</h3>";

                if($consumoEmReais <= 5){
                    echo "<h3>Sua categoria de consumo é baixa</h3>";
                } else if( $consumoEmReais > 5 && $consumoEmReais <= 10){
                 echo "<h3>Sua categoria de consumo é moderada</h3>";
                } else{
                 echo "<h3>Sua categoria de consumo é alta</h3>";
                }
            } else{
                foreach($erros as $erroAtual){
                    echo $erroAtual;
                }
            } 
        } 
    ?>
    <h4><a href="index.php">Voltar para a Home</a></h4>
</body>
</html>