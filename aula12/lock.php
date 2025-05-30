<?php session_start();
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
        header('location:index.php?codigo=0'); // Código 0 = sem permissão para acessar a página
    }
?>