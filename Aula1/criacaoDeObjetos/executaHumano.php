<?php
echo '<pre>';
require('autoload.php');

//criando objeto
$pessoa = new Humano(28);
// $pessoa->programar();
// $pessoa->dormir();
// echo $pessoa->nome;

//criando outro objeto
$pessoa2 = new Humano(28);
// $pessoa2->nome = "Santos";
// echo $pessoa2->nome;

//echo Humano::VIDA;


//$pessoa = new Humano();
//$pessoa->programar();
//$pessoa->dormir();
//echo $pessoa->nome;

//$pessoa2 = new Humano();
//$pessoa2->nome = "Santos";
//echo $pessoa2->nome;

//echo Humano::VIDA;

// $pessoa2 = new Humano(28);
// $pessoa2->nome = 'Julio';
// $pessoa3 = clone($pessoa2);
// $pessoa3->nome = 'Henrique';
 var_dump($pessoa);
 unset($pessoa);
 var_dump($pessoa2);