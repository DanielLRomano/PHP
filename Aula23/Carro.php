<?php

    require_once 'Veiculo.php';
    class Carro extends Veiculo{

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }
    }
?>