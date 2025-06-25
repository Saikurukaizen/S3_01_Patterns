<?php
declare(strict_types=1);

require_once 'tiggerClass.php';

$tigger = Tigger::getInstance();
$tigger->roar();
$tigger->roar();
echo 'Tigger has roared ' .$tigger->getCounter(). ' times';


?>