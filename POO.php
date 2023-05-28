<?php
class Pessoa{
    private $nome;
    private $idade;

    public function getNome () {return $this->nome;}
    public function setNome ($nome) {$this->nome = $nome;}
    public function getIdade () {return $this->idade;}
    public function setIdade ($idade) {$this->idade = $idade;}

    public function exibirDados(){
        echo "<h2>$this->nome tem $this->idade ano (s)</h2>";
    }

    public function __construct($nome = "", $idade = 0){
        this->$nome = $nome;
        this->$idade = $idade;
    }

    function __destruct(){
        echo "$this->nome foi removido(a) .";
    }
}


//Herança
require_once "pessoa";
class Profissional extends Pessoa {
    private $profissao;
    function __construct($nome="", $idade=0, $profissao="";){
        parent::__construct($nome, $idade);
        $this->profissao = $profissao;
    }
public function getProfissao() {return $this->profissao;}
public function setProfissao($profissao) {$this->profissao = $profissao;}
    
    public function exibirDados() {   //Polimorfismo
        parent::exibirDados();
        echo "Trabalha como $this->profissao";
    }    
}

$p1 = new Pessoa("Felipe", 24);
$p1->exibirDados();
