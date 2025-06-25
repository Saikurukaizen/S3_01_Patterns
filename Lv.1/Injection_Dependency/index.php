<?php
declare(strict_types=1);

require_once 'puertaDeSalida.php';

$cartera = new Cartera('LOTR');
$llavesCasa = new LlavesCasa('Juego de llaves');
$llavesCoche = new LlavesCoche(false);
$tMobilitat = new TransportCard(true);
$smartphone = new Smartphone('Iphone 12 Pro');

$mochila = new puertaDeSalida(
    $cartera, 
    $llavesCasa, 
    $smartphone, 
    $llavesCoche, 
    $tarjetaTransporte
);

$puertaDeSalida->mostrarMensaje();

?>