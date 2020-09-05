<?php

use DependencyInjectionExample\ExampleController;
use QuillStack\DI\Container;

require __DIR__ . '/../../vendor/autoload.php';

$start = microtime(true);

$container = new Container();

for ($i = 0; $i < ExampleController::LOOPS; ++$i) {
    $controller = $container->get(ExampleController::class);
}

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

$results = [
    'time' => $roundedTime,
    'memory' => memory_get_peak_usage()/1024/1024,
    'files' => count(get_included_files()),
];

echo json_encode($results, JSON_PRETTY_PRINT);
