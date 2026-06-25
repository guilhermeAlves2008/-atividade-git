<?php

class Funcionario
{
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
    private $cargo;
private $salario;

public function exibirDados()
{
    return $this->nome . " - " . $this->cargo;
}
}