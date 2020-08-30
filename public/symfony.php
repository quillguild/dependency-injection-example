<?php

use DependencyInjectionExample\ExampleController;
use DependencyInjectionExample\ExampleRepository;
use DependencyInjectionExample\ExampleService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

require __DIR__ . '/../vendor/autoload.php';

$start = microtime(true);

$container = new ContainerBuilder();
$container->register('repository', ExampleRepository::class);
$container->register('service', ExampleService::class)->addArgument(new Reference('repository'));
$container->register('example', ExampleController::class)->addArgument(new Reference('service'));
$controller = $container->get('example');

$time = microtime(true) - $start;
$roundedTime = round($time, 6);

echo $roundedTime . PHP_EOL;
