<?php

//definindo a classe Pessoa
class Pessoa{

    //definição das caracteristicas/atributos
    public $nome;
    public $idade;

    //definindo as ações/metodos
    public function Falar(){
        echo $this->nome . " de " . $this->idade ." anos, está Falando...";
    }

}

//criando um objeto do tipo Pessoa - instancia do objeto
$p = new Pessoa();
$p->nome = "Joaozinho";
$p->idade = 15;

//var_dump($p);
$p->Falar();
echo "<br> Nome: " . $p->nome;
echo "<br> Idade: " . $p->idade; 

?>