<?php
declare(strict_types=1);

class LlavesCasa{
    private string $llavesCasa;

    public function __construct(string $llavesCasa)
    {
        $this->llavesCasa = $llavesCasa;
    }

    public function mostrarMensaje(): void
    {
        echo 'Tengo las llaves de casa';
    }
}
?>