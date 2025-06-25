<?php
declare(strict_types=1);

require_once 'duckInterface.php';

class Duck implements DuckInterface{

   public function quack(): void
   {
        echo "Quack \n";
   }
   public function fly(): void 
   {
        echo "I'm flying \n";
   }
}

?>
