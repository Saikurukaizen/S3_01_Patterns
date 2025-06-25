<?php
declare(strict_types=1);

class Tigger{
    private static ?Tigger $instance = null;
    private static int $counter = 0;

    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public function roar(): void
    {
        echo "Roar!" . PHP_EOL;
        self::$counter++;
    }

    public static function getInstance(): Tigger
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone(){}

    public function getCounter(): int
    {
        return self::$counter;
    }

}
?>