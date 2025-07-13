<?php
declare(strict_types=1);

require_once 'Mochila.php';

class TransportCard implements Mochila{

    public function usar(): string
    {
        return 'Tengo la T-Mobilitat';
    } 
}
?>