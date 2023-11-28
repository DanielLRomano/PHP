<?php

    //Modificadores de visibilidade 

    //public -> atributos e métodos estão acessiveis por todos, dentro e fora da classe onde estão implementados 
    //protected -> atributos e métodos estão acessiveis pela propria classe onde estão declarados e pelas classes herdeiras (herança)
    //private -> atributos e métodos estão acessiveis apenas pela classe onde estão declarados 

    class Veiculo{

        public $marca;
        protected $modelo;
        private $cor;

        private function Ligar(){
            echo "Ligado...";
        }

        public function chamarAcao(){
            $this->Ligar();
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }
    }
?>