<?php

abstract class Conta
{
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;

    /**método Retirar
     * diminui o Saldo em $quantia
     */
    function Retirar($quantia)
    {
        if($quantia > 0)
        {
            $this->Saldo -= $quantia;
        }
    }

    /**método Depositar
     * aumenta o Saldo em $quantia
     */
    function Depositar($quantia)
    {
        if($quantia > 0)
        {
            $this->Saldo += $quantia;
        }
    }

    /**método ObterSaldo
     * retorna o Saldo Atual
     */
    function ObterSaldo()
    {
        return $this->Saldo;
    }

    /**método construtor
     * inicializa propriedades
     */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;

        //chamada a outro método da classe
        $this->Depositar($Saldo);
        $this->Cancelada = false;
    }

    /**método destrutor
     * finaliza objeto
     */
    function __destruct()
    {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada!<br>";
    }

    abstract function Transferir($Conta, $Valor);

}