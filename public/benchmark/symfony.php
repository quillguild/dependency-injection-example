<?php

use DependencyInjectionExample\ExampleController;
use DependencyInjectionExample\ExampleRepository;
use DependencyInjectionExample\ExampleService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

require __DIR__ . '/../../vendor/autoload.php';

$start = microtime(true);

$container = new ContainerBuilder();
$container->register('repository', ExampleRepository::class);
$container->register('service', ExampleService::class)->addArgument(new Reference('repository'));
$container->register('example', ExampleController::class)->addArgument(new Reference('service'));

for ($i = 0; $i < ExampleController::LOOPS; ++$i) {
    $controller = $container->get('example');
}

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

$results = [
    'time' => $roundedTime,
    'memory' => memory_get_peak_usage()/1024/1024,
    'files' => count(get_included_files()),
];

echo json_encode($results, JSON_PRETTY_PRINT);
