<?php
declare(strict_types=1);

require_once 'cartera.php';
require_once 'llavesCasa.php';
require_once 'llavesCoche.php';
require_once 'transportCard.php';
require_once 'smartphone.php';

class PuertaDeSalida{
    private Cartera $cartera;
    private LlavesCasa $llavesCasa;
    private Smartphone $smartphone;
    private LlavesCoche $llavesCoche;
    private TransportCard $tarjetaTransporte;
    private array $inventario;

    public function __construct(
        Cartera $cartera, 
        LlavesCasa $llavesCasa, 
        Smartphone $smartphone, 
        LlavesCoche $llavesCoche, 
        TransportCard $tarjetaTransporte
        )
    {
        $this->inventario = [$cartera, $llavesCasa, $smartphone, $llavesCoche, $tarjetaTransporte];
    }
        
    
    public function mostrarMensaje(): void{
        echo 'Lo tengo todo: ' . PHP_EOL;
        foreach($this->inventario as $objeto){
            $objeto->mostrarMensaje() . PHP_EOL;
        }
    }
}
?>