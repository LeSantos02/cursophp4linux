<?php

abstract class BarulhoDeCarro
{
    public function getBarulho($nomeDoCarro)
    {
        return "{$nomeDoCarro}, Fazendo Barulho";
    }
}

class Carro extends BarulhoDeCarro
{
    public function Acelerar(){
        return 'Vrum Vrum';
    }
}

// $obj = new BarulhoDeCarro();
// echo $obj->getBarulho('Fiesta');
$ford = new Carro;
echo $ford->getBarulho('Fiesta');
echo $ford->Acelerar();