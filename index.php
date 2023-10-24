<?php

    include "ContaBancaria.php";

    $conta1 = new ContaBancaria(0144, "3578-X", "Roberta Kamilly", 500);

    $conta1->sacar(150);
    $conta1->sacar(20);
    $conta1->depositar(1000);
    $conta1->encerrar();
    $conta1->sacar(1000);
    $conta1->sacar(330);
    $conta1->encerrar();
    

?>