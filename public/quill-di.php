<?php

use DependencyInjectionExample\ExampleController;
use QuillDI\Container;

require __DIR__ . '/../vendor/autoload.php';

$start = microtime(true);

$container = new Container();
$controller = $container->get(ExampleController::class);

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

echo $roundedTime . PHP_EOL;
