<?php

    //PHP Orientado a Objeto 
    //Metodo construtor 

    class Carro{
        
        private $marca;
        private $modelo;
        private $cor;

        public function __construct($marca, $modelo, $cor){
            $this->marca = $marca;
            $this->setModelo($modelo);
            $this->setCor($cor);
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($m){
            $this->marca = $m;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($m){
            $this->modelo = $m;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($c){
            $this->cor = $c;
        }
    }

    $carro = new Carro("Toyota", "Hillux", "Prata");

    // $carro->setMarca("Honda");
    // $carro->setModelo("City");

    echo "Marca: " . $carro->getMarca() . "\n";
    echo "Modelo: " . $carro->getModelo() . "\n";
    echo "Modelo: " . $carro->getCor() . "\n";

    $carro2 = new Carro("", "", "");

    $carro2->setMarca(readline("Digite a marca do veiculo: "));
    $carro2->setModelo(readline("Digite o modelo do veiculo: "));
    $carro2->setCor(readline("Digite a cor do veiculo: "));
    echo "Marca: " . $carro2->getMarca() . "\n";
    echo "Modelo: " . $carro2->getModelo() . "\n";
    echo "Cor: " . $carro2->getCor() . "\n";
