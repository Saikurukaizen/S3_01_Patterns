<?php
declare(strict_types=1);

class Cartera{
    private string $cartera;

    public function __construct(string $cartera)
    {
        $this->cartera = $cartera;
    }

    public function mostrarMensaje(): void
    {
        echo 'Tengo la cartera';
    }
}
?>