<?php

 namespace app\controller;
 
 class Sobre{

    public function home($n1, $n2){
        echo "<h3>Sou o método padrão home recebendo dois parâmetros!<h3>".$n1."<br>". $n2;
    }

    public function erro()
    {
        echo "<h3>Erro 404: Página não encontrada<h3><br>";
    }
 }