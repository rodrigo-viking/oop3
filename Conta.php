<?php

Class Conta{

    private $numero;
    private $conta;

    public function setNumero($valor)
    {
        $this->numero = $valor;
    }
    
    public function getNumero()
    {
       return  $this->numero;
    }

    public function setConta($valor)
    {
        $this->conta = $valor;
    }

    public function getConta()
    {
        return $this->conta;
    }

}

$cliente = new Conta;

$cliente->setNumero("654321");
$cliente->setConta("123456");

echo $cliente->getNumero();
echo "<br/>";
echo $cliente->getConta();