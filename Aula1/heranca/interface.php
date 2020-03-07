<?php 

interface Maquinario
{
    public function barulhosDeFabrica($barulho);
}

interface Fornecedor
{
    public function fornecer($materiaPrima);
}

interface RacaoDeGato extends Maquinario, Fornecedor
{
    public function empacotar($kg);
    public function setPreco($preco);
    public function distribuir($cliente);
    public function fabricar($materiaPrima);
}

class Empresa implements RacaoDegato
{
    public function empacotar($kg)
    {
        echo "Empacotadno {$kg} em racão";
    }

    public function setPreco($preco)
    {
        echo "Preço definido em {$preco}";
    }

    public function distribuir($cliente)
    {
        echo "Distribuindo para {$cliente}";
    }

    public function fabricar($materiaPrima)
    {
        echo "Fabricando ração de {$materiaPrima}";
    }
}

$empresa = new Empresa();
$obj->fabricar('Coco de cavalo');