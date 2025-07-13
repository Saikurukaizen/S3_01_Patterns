<?php
declare(strict_types=1);

require_once 'Mochila.php';

class LlavesCoche implements Mochila{

    public function usar(): string
    {
        return 'Tengo las llaves de mi coche';
    }
}
?>