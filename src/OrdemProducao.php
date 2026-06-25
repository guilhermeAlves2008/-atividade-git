<?php

class OrdemProducao
{
    private $numero;
    private $quantidade;

    public function __construct($numero, $quantidade)
    {
        $this->numero = $numero;
        $this->quantidade = $quantidade;
    }
}