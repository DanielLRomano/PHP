<?php

class Login{

    private $usuario;
    private $senha;

    //Getters and Setters
    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function Logar(){

        if ($this->usuario == "userphp" and $this->senha == "1234") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos...";
        }
    }
}

$logar = new Login();
// $logar->usuario = "userphp";
// $logar->senha = "1234";
$logar->setUsuario("userphp");
$logar->setSenha("1234");
$logar->Logar();
echo "<br>";
echo $logar->getUsuario();
echo "<br>";
echo $logar->getSenha();
?>