<?php

    class Veiculo{
        private $marca;
        private $modelo;

        public function Ligar(){
            echo "Ligando a moto... \n";
        }

        public function Desligar(){
            echo "Desligando a moto... \n";
        }
    }

    class Carro extends Veiculo{
       private $numRodas;

       public function acelerar(){
        echo "Acelerando o carro ...";
       }
    }

    class Moto extends Veiculo{
        private $numRodas;

        public function acelerar(){
            echo "Acelerando a moto ... \n";
        }
    }

    $carro = new Carro();
    $carro->marca = "Honda";
    // echo $carro->marca; 
    //var_dump($carro);

    $moto = new Moto();
    $moto->Ligar();
    $moto->acelerar();
    $moto->Desligar();
    // var_dump($moto);