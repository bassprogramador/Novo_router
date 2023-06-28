<?php
 namespace app\controller;
 
 class Site{

    public function home(){
        echo "<h3>Sou o método padrão do controller padrão!<h3>";
    }
    public function erro()
    {
        echo "<h3>Erro 404: Página não encontrada<h3><br>";
    }
 }