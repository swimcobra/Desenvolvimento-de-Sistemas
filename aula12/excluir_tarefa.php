<?php require_once 'lock.php';
    if(!isset($_GET['id_tarefa'])) {
        header('location:restrita.php');
        exit; //Impede que outro trecho de código seja executado após o redirecionamento
    }

    $id_tarefa = (int)$_GET['id_tarefa']; // Força o parâmetro a ser int
    
    $sql = "DELETE FROM tb_tarefas WHERE id_tarefa = $id_tarefa";

    require_once 'conexao.php';
    $conn = conectar_banco();

    mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) <= 0) {
        header('location:restrita.php?codigo=4');
        exit;
    }

    header('location:restrita.php');
?>