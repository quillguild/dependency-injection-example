<?php

use DependencyInjectionExample\ExampleController;
use Laminas\Di\Injector;

require __DIR__ . '/../vendor/autoload.php';

$start = microtime(true);

$container = new Injector();
$container->create(ExampleController::class);

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

echo $roundedTime . PHP_EOL;
