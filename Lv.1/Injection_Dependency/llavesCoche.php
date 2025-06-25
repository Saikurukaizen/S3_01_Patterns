<?php
declare(strict_types=1);

class LlavesCoche{
    private bool $llavesCoche;

    public function __construct(bool $llavesCoche)
    {
        $this->llavesCoche = $llavesCoche;
    }

    public function mostrarMensaje(): void
    {
        echo 'Tengo las llaves de mi coche';
    }
}
?>