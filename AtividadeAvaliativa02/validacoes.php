<?php
    // Função para validar se todos os campos enviados são válidos
   function validarLivros($livro){
    if(empty($livro['titulo']) || empty($livro['autor'])){
        return false;
    }
    if($livro['preco'] < 0.01){
        return false;
    }
    if($livro['quant'] <= 0){
        return false;
    }
    return true;
   }

   // Função para calcular o valor do estoque, retornando o resultado da multiplicação entre o preço do livro e sua quantidade em estoque 
   function calcularValorTotalEstoque($livro){
    return $livro['preco'] * $livro['quant'];
   }
?>
