<?php
    require_once 'functions.php'; // Inclui arquivo de funções

    // Se chegamos aqui via GET(form não foi enviado)
    if(form_nao_enviado()) {
        header('location:index.php?codigo=0');
        exit;
    }

    // Se o form foi enviado, verificamos agora se há algum campo em branco
    if(campos_em_branco()) {
        header('location:index.php?codigo=2');
        exit;
    }

    // Passando pelas validações acima, prosseguimos:
    // Receber dados do formulário
    $usuario    = $_POST['usuario'];
    $senha      = $_POST['senha'];

    // Incluir arquivo de conexão com o BD
    require_once 'conexao.php';

    // Receber conexão ativa com o BD atual
    $conn = conectar_banco();

    // Criar query (consulta) à tabela tb_usuario com base no usuário e senha informados
    $query = "SELECT * FROM tb_usuarios WHERE usuario = ? AND senha = ?";

    // Criar um statement antes de executarmos um SELECT
    $stmt = mysqli_prepare($conn, $query);

    if(!$stmt) { // Se houver algum problema com a consulta acima, retorna para a home
        header('location:index.php?codigo=3'); // Código 3 = erros de SQL
        exit;
    }

    // Prosseguimos com o bind das variáveis no nosso statement
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);

    // Executa comando preparado (stmt)
    $result = mysqli_stmt_execute($stmt);

    if(!$result) {
        header('location:index.php?codigo=3');
        exit;
    }

    // Registrar o número de linhas afetadas pelo código
    mysqli_stmt_store_result($stmt);

    // Armazena o número de linhas afetadas pelo comando SQL executado
    $linhas = mysqli_stmt_num_rows($stmt);

    // Verificar se usuário e senha estão incorretos
        // Se usuário e senha corresponderem a algum registro na tabela, as linhas afetadas serão maiores que zero
        // Se o número de linhas afetadas for menor ou igual a zero, significa que não há usuário e senha informados salvos na tabela do BD
    if($linhas <= 0) { 
        header('location:index.php?codigo=1'); // codigo 1 = login ou senha inválidos
        exit;
    }

    // Configurar variáveis para receber o retorno no comando sql executado
    mysqli_stmt_bind_result($stmt, $login_id, $login_usuario, $login_senha, $login_email);

    // Salvar nas variáveis locais  o resultado vindo deste select executado acima
    mysqli_stmt_fetch($stmt);

    // Iniciar a sessão
    session_start();
    // Registrar as variáveis de sessão
    $_SESSION['id']         = $login_id;
    $_SESSION['usuario']    = $login_usuario;
    $_SESSION['senha']      = $login_senha;
    $_SESSION['email']      = $login_email;

    // Redirecionar para a página restrita
    header('location:restrita.php');
?>