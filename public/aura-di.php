<?php

use Aura\Di\ContainerBuilder;
use DependencyInjectionExample\ExampleController;

require __DIR__ . '/../vendor/autoload.php';

$start = microtime(true);

$container = (new ContainerBuilder())->newInstance();
$controller = $container->lazyGet(ExampleController::class);

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

echo $roundedTime . PHP_EOL;
