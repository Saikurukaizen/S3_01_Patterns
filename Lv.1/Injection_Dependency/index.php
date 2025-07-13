<?php
declare(strict_types=1);

require_once 'cartera.php';
require_once 'llavesCasa.php';
require_once 'llavesCoche.php';
require_once 'transportCard.php';
require_once 'smartphone.php';

$persona = new Persona([
    new Cartera(), 
    new LlavesCasa(), 
    new TransportCard(), 
    new Smartphone()
]);

$persona->salirDeCasa();

?>