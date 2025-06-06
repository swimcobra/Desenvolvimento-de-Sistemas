<?php
    function form_nao_enviado() {
        return $_SERVER['REQUEST_METHOD'] !== 'POST'; // "!==" ou "===" significa que a váriavel e o tipo dela precisam ser iguais iguais
    }

    function campos_em_branco() {
        return empty($_POST['usuario']) || empty($_POST['senha']);
    }

    function tarefa_em_branco() {
        return empty($_POST['tarefa']);
    }

    function verificar_codigo() {
        if(!isset($_GET['codigo'])) {
            return;
        }

        $codigo = (int)$_GET['codigo'];

        switch($codigo) {
            case 0:
                $msg = "<h3>Você não tem permissão para acessar a página requisitada</h3>";
                break;
            case 1:
                $msg = "<h3>Usuário ou Senha inválidos. Por favor, tente novamente</h3>";
                break;
            case 2:
                $msg = "<h3>Por favor, preencha todos os campos do form de login</h3>";
                break;
            case 3:
                $msg = "<h3>Erro na estrutura da consulta SQL. Verifique com o suporte ou tente novamente mais tarde</h3>";
                break;
            case 4:
                $msg = "Erro ao excluir a tarefa selecionada. Verifique com o suporte ou tente novamente mais tarde";
                break;
            case 5:
                $msg = "Erro ao cadastar tarefa. Verifique com o suporte ou tente novamente mais tarde";
                break;
            default:
                $msg = "";
                break;
        }

        echo $msg;
    }

    function incluir_form_login() {
        if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
            require_once 'form_login.php';
        }
    }
?>