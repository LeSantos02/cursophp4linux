<?php

class MinhaClasse
{
    protected $protegida = 'Protegida';
    public $publica = 'Publica';
    private $privada = 'Privada';

    function mostrarPropriedades(){
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }
}

class MinhaClassFilha extends MinhaClasse
{
    function mostrarPropriedades(){
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }

}

$obj = new MinhaClasse;
$obj2 = new MinhaClassFilha;
$obj->mostrarPropriedades();
$obj2->mostrarPropriedades();
// echo $obj->publica;
// echo $obj->privada;
// echo $obj->protegida;