<?php
declare(strict_types=1);

require_once 'cartera.php';
require_once 'llavesCasa.php';
require_once 'llavesCoche.php';
require_once 'transportCard.php';
require_once 'smartphone.php';

class Persona{
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
        ){}
    
    public function salirDeCasa(): void
    {
        echo $this->cartera->usar() . "\n";
        echo $this->llavesDeCasa->usar() . "\n";
        echo $this->tarjetaTransporte->usar() . "\n";
        echo $this->smartphone->usar() . "\n";
        echo "Listo para salir!\n";
    }

$persona = new Persona(new Cartera, new LlavesCasa, new TransportCard, new Smartphone);
    
}
?>