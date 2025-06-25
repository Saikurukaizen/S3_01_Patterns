<?php
declare(strict_types=1);

require_once 'duckInterface.php';
require_once 'turkey.php';

class TurkeyAdapter implements DuckInterface{

    private Turkey $turkey;

    public function __construct(Turkey $turkey){
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for($i = 0; $i < 5; $i++){
            $this->turkey->fly();
        }
    }
}

?>