<?php
declare(strict_types=1);

class Smartphone{
    private string $smartphone;

    public function __construct(string $smartphone)
    {
        $this->smartphone = $smartphone;
    }

    public function mostrarMensaje(): void
    {
        echo 'Tengo mi móvil encima';
    }
}
?>