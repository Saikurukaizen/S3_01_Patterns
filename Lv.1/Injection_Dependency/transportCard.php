<?php
declare(strict_types=1);

class TransportCard{
    private bool $tarjetaTransporte;

    public function __construct(bool $tarjetaTransporte)
    {
        $this->tarjetaTransporte = $tarjetaTransporte;
    }

    public function mostrarMensaje(): void
    {
        echo 'Tengo la T-Mobilitat';
    } 
}
?>