<?php

class Produto
{
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function exibirProduto()
    {
        return $this->descricao . " - R$ " . $this->preco;
    }
}