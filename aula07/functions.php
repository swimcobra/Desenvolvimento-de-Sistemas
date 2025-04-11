<?php
    //função para verificar se o form foi enviado (via método 'post')
    function form_nao_enviado(){
        //retorna 'true' se chegamos na página via GET (diferente de POST)
        //retorn 'false' se chegamos na página via POST
        return $_SERVER['REQUEST_METHOD'] != 'POST';
    }

    //função para verificar se os valores não são numéricos
    function valor_nao_numerico(){
        //se qualquer um dos campos não for um número, a função retornará verdadeiro
        return !is_numeric($_POST['valor1']) || !is_numeric($_POST['valor2']);
    }
?>