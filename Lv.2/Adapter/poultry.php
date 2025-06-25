<?php
declare(strict_types=1);

require_once 'duck.php';
require_once 'turkey.php';
require_once 'turkeyAdapter.php';

function duck_interaction(DuckInterface $duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);

echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

echo "The Duck says...\n";
duck_interaction($duck);

echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);
?>
