<?php
declare(strict_types=1);

require_once 'Mochila.php';

class Smartphone implements Mochila{

    public function usar(): string
    {
        return 'Tengo mi móvil encima';
    }
}
?>