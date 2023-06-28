<?php

namespace app\controller;
 
class Curso
{

    public function home()
    {
        echo "<h3>Sou o método padrão da classe Curso!<h3>";
    }
    public function valor($valor)
    {
        echo "<h3>O valor das aulas é: R$" .$valor." Reais<h3><br><br>";
    }
    public function erro()
    {
        echo "<h3>Erro 404: Página não encontrada<h3><br>";
    }
    
}