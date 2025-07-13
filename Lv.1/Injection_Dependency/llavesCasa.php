<?php
declare(strict_types=1);

require_once 'Mochila.php';

class LlavesCasa implements Mochila{

    public function usar(): string
    {
        return 'Tengo las llaves de casa';
    }
}
?>