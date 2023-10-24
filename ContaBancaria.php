<?php
    class ContaBancaria{
        private int $agencia;
        private String $conta;
        private String $titular;
        private float $saldo;
        private int $status;

        public function __construct($agencia, $conta, $titular, $saldo) {
            $this->agencia = $agencia;
            $this->conta = $conta;
            echo $this->titular = $titular;
            echo "<hr> Saldo atual: " . $this->saldo = $saldo;
            $this->status = 1;
        }

        public function sacar($valor) {
            if ($this->saldo >= 0) {
                $this->saldo = $this->saldo-$valor;
                echo "<hr> Saldo: ". $this->saldo;
            } else {
                echo "<hr> ERRO: Saldo Insuficiente";
            }
        }


        public function depositar($valor) {
            $this->saldo = $this->saldo + $valor;
            echo "<hr>Saldo: ".$this->saldo;
        }


        public function verificaSaldo($agencia, $conta, $titular, $saldo){
            echo "<hr>Agência: " . $this->agencia;
            echo "<br>Conta: " . $this->conta;
            echo "<br>Titular: " . $this->titular;
            echo "<br>Saldo: " . $this->saldo;
            return $this->saldo;
        }


        public function encerrar(){
            if($this->saldo > 0){
                echo "<hr> Erro, Conta ainda possui saldo, não foi possível encerrar";
            } else {
                $this->saldo = 0;
                echo "<hr> Conta Encerrada!";
            }
            
        }

    }


?>