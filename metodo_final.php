<?php
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';

class ContaCorrenteEspecial extends ContaCorrente
{
    function Depositar($Valor)
    {
        echo "Sobrescrevendo método Depositar <br>";
        parent::Depositar($Valor);
    }

    function Transferir($Conta, $Valor)
    {
        echo "Sobrescrevendo método Transferir <br>";
        parent::Transferir($Conta, $Valor);
    }
}