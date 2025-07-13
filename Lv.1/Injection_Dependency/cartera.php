<?php
declare(strict_types=1);

require_once 'Mochila.php';

class Cartera implements Mochila{

    public function usar(): string
    {
       return 'Tengo la cartera';
    }
}
?>