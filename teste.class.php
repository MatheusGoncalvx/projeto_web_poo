<?php

//importação da classe pessoa.class.php
require_once("pessoa.class.php");

//Nome da classe
class Teste{

    //objeto pessoa com visibilidade privada
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();
        
        //exibição dos resultados
        $pessoa->setNome($_POST['nome'] . "<br>");
        echo $pessoa->getNome();

        $pessoa->setEndereco($_POST['endereco'] . "<br>");
        echo $pessoa->getEndereco();

        $pessoa->setBairro($_POST['bairro'] . "<br>");
        echo $pessoa->getBairro();

        $pessoa->setCep($_POST['cep'] . "<br>");
        echo $pessoa->getCep();

        $pessoa->setCidade($_POST['cidade'] . "<br>");
        echo $pessoa->getCidade();

        $pessoa->setEstado($_POST['estado'] . "<br>");
        echo $pessoa->getEstado();


    }
}new Teste();

?>