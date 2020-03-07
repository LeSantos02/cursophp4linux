<?php

class Humano
{
    public $nome = 'Leandro';
    const VIDA = TRUE;

    public function programar()
    {
        echo "Estou programando!";
        echo "<br>";
    }

    public function dormir()
    {
        if(self::VIDA == true)
        {
            echo "Dormindo...";
            echo "<br>";
        }else{
            echo "Morri";
        } 

    }

    public function comer()
    {
        echo "Comendo...";
        echo "<br>";
    }

    public function __clone()
    {
        echo "Clonando o objeto";    
    }

    public function __construct($idade)
    {
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo "Estou desalocando o espaço da memória";
    }

}

