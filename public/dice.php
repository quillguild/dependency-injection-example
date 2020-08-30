<?php

use DependencyInjectionExample\ExampleController;
use Dice\Dice;

require __DIR__ . '/../vendor/autoload.php';

$start = microtime(true);

$container = new Dice();
$controller = $container->create(ExampleController::class);

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

echo $roundedTime . PHP_EOL;
