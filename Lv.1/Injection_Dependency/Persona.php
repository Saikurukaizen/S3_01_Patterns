<?php
declare(strict_types=1);



class Persona{
    private array $mochila;


    public function __construct(array $mochila)
    {
        $this->mochila = $mochila;
    }
    
    public function salirDeCasa(): void
    {
        foreach($this->mochila as $item){
            echo $item->usar() . PHP_EOL;
        }
    }


    
}
?>