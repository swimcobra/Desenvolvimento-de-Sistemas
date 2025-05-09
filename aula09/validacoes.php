<?php 

function form_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] != 'POST';
}

function ha_campos_em_branco($dados) {
    return  empty($dados['nome']) || 
            empty($dados['fone']) || 
            empty($dados['email']);
}

function verificar_select($linhas_afetadas) {
    // Se zero linhas afetadas = não há registros na tabela
    if($linhas_afetadas == 0) {
        exit("<h3>Não há clientes para exibir</h3>");
    }

    // Se número de linhas afetadas for negativo, há erro no sql
    if($linhas_afetadas < 0) {
        exit("<h3>Não foi possível realizar a consulta no banco</h3>");
    }

    return; // Continue a executar o código (totalmente opcional)
}

?>